import sys, datetime, time, socket, os, pymysql
from db import db
from config import *


db=db()

try:
	so_badges = db.query("SELECT * FROM so_badges")
	for badge in so_badges:
		id, name, so_link, tags_count, is_moderator_only, is_required, has_synonyms,  page_id, date_submited = badge
		
		strlen = len(name)
		so_icon_width = 26
		calculated_badge_width = 50 + (strlen * 6)
		orange_box_width = 35 + (strlen * 5)
		tag_name_start_pos = 40 + (strlen * 2.66)

		file = open(os.getcwd() + '/badges/' + name + '.svg', 'w+')

		file.write("""
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
width="%d" height="20">
<linearGradient id="b" x2="0" y2="100%%">
<stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
<stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="a">
<rect width="%d" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#a)">
<path fill="#555" d="M0 0h26v20H0z"/>
<path fill="#f48024" d="M%d 0h%dv20H%dz"/>
<path fill="url(#b)" d="M%d 0h%dv20H26z"/>
</g>
<g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
<image x="5" y="3" width="15" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAkZJREFU
WIXN111oz1Ecx/HXH1FbHpI7oWVWtJiN5CHlIc3DBZLydLEoFy6QkpJY2YUUFyi5QFJYiZKHUsoV
0jyUPIxdeCrlxtOK0f4uzpn9mv9sv23//X3rdM7vdB7e53s+33POL5PNZhXSBhR0dgzqqkFz7YS8
TFy89yX+Aw/0NcA03EV5IQCG4yZm4BJG9DfAZ2xCFqU4h4H5BhiISYnvi9gfy9WoyzfAETzA5kTd
PlyN5Z1YnS+AcViBITiOMyhCK9bhBTI4hcn5AHiNqbgdvzfgHsoEPSyPeREuY1RfA8AHLMQBQXzl
uI9VeB6hsijRiSh7ArAWyxJ9f2EXVuIThqEeh3BD0IQIerC3AMNxFFfQiG2xjuDm6Xgk7P123MJJ
4Vz4JnilVwCj8SSWx+Mw3kaoMrzCTJyObeagQRBpBU70FuAp5qIqTvIDQ7FFWN11zMPGmL6jJfZr
yjVgT0X4ADUYgz14L7i9GtfwTFD/IizGu84GSgOwRIjvidrV/FE4+UqwRriICNtxBLO1b1lO6/I9
kLAdmB/LzXiMh4I3HgrH8HnhRtyKBTjW1aBpAH7iixBmxZgVU5u1CKttwB3U4muPAE6drf9TThzk
1cKWlQonYGXMqzASg2NdZWy/VIiK9ADR2l6rmURdqxD/jbiQqB8bQSpiPkXUQ/34uiysbtqdHKdb
AGnsTUyX0nZMA5D2/Z5zxR2t4I/SNB7o1orSWsE9kMn1axbDsK//2TI16/9+nRXcA//SQF72vKMV
3AM5NdCf9hsNPHtOoTELNAAAAABJRU5ErkJggg=="/>

<text x="%d" y="15" fill="#010101" fill-opacity=".3">%s</text>
<text x="%d" y="14">%s</text></g></svg>
		""" % (
			calculated_badge_width, 
			calculated_badge_width, 
			so_icon_width, 
			orange_box_width, 
			so_icon_width, 
			so_icon_width,
			orange_box_width, 
			tag_name_start_pos, 
			name, 
			tag_name_start_pos, 
			name))
		file.close()
except Exception as e:
	print(e)
