import json, time, gzip, time, math, pymysql, sys, socket
from urllib.request import urlopen
from config import *


class db:
	def __init__ (self):
		self.conn = pymysql.connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, use_unicode=True, charset="utf8")
		cursor = self.conn.cursor()
		cursor.execute('SET NAMES utf8mb4;')
		cursor.execute('SET CHARACTER SET utf8mb4;')
		cursor.execute('SET character_set_connection=utf8mb4;')
	def prepare_many (self, sql, args):
		cursor = self.conn.cursor()
		cursor.executemany(sql, args)
		return cursor
	def prepare (self, sql, args):
			cursor = self.conn.cursor()
			cursor.execute(sql, args)
			return cursor
	def query(self, q):
			cursor = self.conn.cursor()
			cursor.execute(q)
			return cursor
	def query_many(self, q):
			cursor = self.conn.cursor()
			cursor.executemany(q)
			return cursor
	def commit (self):
			self.conn.commit()
	def prepare_many (self, sql, args):
		cursor = self.conn.cursor()
		cursor.executemany(sql, args)
		return cursor

	def close(self):
		self.conn.close()

	def rollback(self):
		self.conn.rollback()

	def escape(self, s):
		return self.conn.escape_string(s)

	@staticmethod
	def simple_json_api_fetcher(url):
		response = urlopen(url).read().decode('utf8')
		repo = json.loads(response)
		return repo 
	def get_percentage(rank, count):
		return rank /count * 100
	
	@staticmethod
	def normalize_date(date, format):
		return datetime.datetime.strptime(date, '%Y-%m-%dT%H:%M:%S+0000').strftime('%Y-%m-%d:%H:%M:%S')

	@staticmethod
	def today():
		return datetime.date.today()

	@staticmethod
	def nextday():
		r = datetime.date.fromordinal(datetime.date.today().toordinal()-7)
		return str(n)

	@staticmethod 
	def exit(message):
		sys.exit(message)

	@staticmethod 
	def echo(message):
		if len(sys.argv) != 2 or sys.argv[1] != 'prod':
			print(message)
		else:
			pass
			#print("prod compatiple -- quiet")
	@staticmethod 
	def fetchall(self, q):
		result = self.query(q)
		return result.fetchall()
	
	def fetchone(self, q):
		result = self.query(q)
		return result.fetchone()
