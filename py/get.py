import json, time, gzip, time, math, pymysql, sys, socket
from urllib.request import urlopen
from db import db
from config import *

# ABANDON ALL HOPE YE WHO ENTER HERE!! 


# get the total count of all tags from so
URL_TAGS = "https://api.stackexchange.com/2.2/tags?site=stackoverflow&filter=total"

# start searching for tags created from date
FIRST_BADGE_DATE = "2008-06-06"; 

sql = """
	INSERT INTO so_badges (name, tags_count, is_moderator_only, is_required, has_synonyms, page_id, date_submitted) 
	VALUES (%s, %s, %s, %s, %s, %s, NOW())
		ON DUPLICATE KEY UPDATE 
			tags_count 			= VALUES(tags_count),
			is_moderator_only 	= VALUES(is_moderator_only), 
			is_required 		= VALUES(is_required), 
			has_synonyms	 	= VALUES(has_synonyms), 
			page_id 			= VALUES(page_id),
			date_submitted 		= NOW() """

# I don't know why I need to use this
db=db()

# jsonify the api
def jsonify(url):
	try:
		response = urlopen(url).read()
		tmp = gzip.decompress(response).decode('utf-8')
		repo = json.loads(tmp)
		return repo
	except Exception as e: 
		return 0;


# get number of all existing tags from SO
# ex: output > {'total': 48959}   
def get_tags_count():
	response = jsonify(URL_TAGS)
	if not response:
		return 0
	else:
		return response['total']


# get the last id (page number) from db 
# ex output > 7
def get_last_page_id():
	stmt  = db.query("SELECT page_id FROM so_badges ORDER BY page_id DESC LIMIT 1");
	fetch = stmt.fetchone()
	if not fetch:
		return 0
	else: 
		return fetch[0]


pages_by_100 = math.ceil(get_tags_count() / 100); 

last_page_id = get_last_page_id()


# if table is empty (no badges inserted) or number of pages is
# greater than the pages that exist (all badges inserted)
# then start over (update everything)
if not last_page_id or last_page_id >= pages_by_100:
	from_page	= 1
	until_page	= 100
else:
	from_page = last_page_id
	until_page = (last_page_id + 100)

# debug output
# print("get_tags_count " + str(get_tags_count()))
# print("pages_by_100 " 	+ str(pages_by_100))
# print("last_page_id " 	+ str(last_page_id))
# print("from_page " 		+ str(from_page))
# print("until_page " 	+ str(until_page))
# sys.exit()

for page in range(from_page, until_page): 
	time.sleep(1)
	build_url = "http://api.stackexchange.com/2.2/tags?page=" + str(page) + "&pagesize=10&order=desc&sort=popular&site=stackoverflow" + str(ACCESS_KEY)
	print("> Fetching tags from page id: " + str(page))
	try:
		api = jsonify(build_url)
	except Exception as e:
		print("> Exiting script: Likely due to execeding rate limit: e -> ", e)
		sys.exit()
	for badge in api['items']:
		is_moderator_only	= badge['is_moderator_only']
		is_required			= badge['is_required']
		has_synonyms		= badge['has_synonyms']
		name 				= badge['name']
		tags_count 			= badge['count']
		page_id 				= int(page)
		try: 
			db.prepare(sql, (name, tags_count, is_moderator_only, is_required, has_synonyms, page_id))
			db.commit()
		except Exception as e:
			print("> Existing script: Likely unknown error in database e -> ", e)
			sys.exit()
			db.rollback()
