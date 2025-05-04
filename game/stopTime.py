#!/usr/bin/env python3.7
import cgi
import html

form = cgi.FieldStorage()
elapsed_time = form.getvalue('elapsedTime')

print("Content-Type: text/html; charset=utf-8")
print()
print("<!DOCTYPE html>")
print("<html><head><title>結果</title></head><body>")

if elapsed_time:
    escaped_time = html.escape(elapsed_time)
    print(f"<p>停止時の経過時間: {escaped_time} ミリ秒</p>")
else:
    print("<p>経過時間が送信されませんでした。</p>")

print("<p><a href='/stopwatch.html'>戻る</a></p>")
print("</body></html>")
