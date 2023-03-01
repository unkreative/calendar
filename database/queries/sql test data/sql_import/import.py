#!/usr/bin/python

from __future__ import print_function

# import data



hostname = 'localhost'
username = 'root'
password = 'root'
database = 'schedule'
port = 8889

# Simple routine to run a query on a database and print the results:
def doQuery( conn ) :
    cur = conn.cursor()

    cur.execute( "SELECT id, year_start, year_end FROM year" )

    for id, year_start, year_end  in cur.fetchall() :
        print( id, year_start, year_end )


print( "Using pymysql:" )
import pymysql
myConnection = pymysql.connect( host=hostname, user=username, passwd=password, db=database, port=port )
# doQuery( myConnection )

myConnection.close()