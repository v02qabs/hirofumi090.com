#!/usr/bin/env ruby
require "mysql"
require "cgi"
qs = CGI.new
print "Content-type: text/html \n\n "
print "#{qs['pass']}"
object = Mysql::new('localhost', 'hirofumi090', 'hirofumi090Abc')
object.query("select pass from login")
object.close()
