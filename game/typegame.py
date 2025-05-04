#!/usr/bin/env python3
import cgi
import html
import random
import time

# 問題リスト
questions = [
    "apple",
    "banana",
    "cherry",
    "date",
    "elderberry"
]

form = cgi.FieldStorage()
typed_text = form.getvalue('typed_text', '')
question_index = int(form.getvalue('question_index', 0))
start_time = float(form.getvalue('start_time', 0.0))
score = int(form.getvalue('score', 0))

# HTMLのヘッダー
print("Content-Type: text/html; charset=utf-8")
print()
print("<!DOCTYPE html>")
print("<html lang='ja'>")
print("<head>")
print("<meta charset='UTF-8'>")
print("<title>タイピングゲーム</title>")
print("</head>")
print("<body>")
print("<h1>タイピングゲーム</h1>")

if not questions:
    print("<p>問題がありません。</p>")
else:
    current_question = questions[question_index % len(questions)]

    if typed_text:
        end_time = time.time()
        elapsed_time = end_time - start_time

        if typed_text == current_question:
            score += 1
            result_message = "<p style='color: green;'>正解！</p>"
        else:
            result_message = f"<p style='color: red;'>不正解！ 正解は「{html.escape(current_question)}」でした。</p>"

        print(result_message)
        print(f"<p>経過時間: {elapsed_time:.2f}秒</p>")
        print(f"<p>現在のスコア: {score}</p>")

        # 次の問題へ
        next_question_index = (question_index + 1) % len(questions)
        print(f"<form method='post' action='./typegame.py'>")
        print(f"<p>次の問題: {html.escape(questions[next_question_index])}</p>")
        print(f"<input type='hidden' name='question_index' value='{next_question_index}'>")
        print(f"<input type='hidden' name='start_time' value='{time.time()}'>")
        print(f"<input type='hidden' name='score' value='{score}'>")
        print("<input type='text' name='typed_text' autofocus>")
        print("<input type='submit' value='入力'>")
        print("</form>")

    else:
        # 初回アクセス時、またはリロード時
        print(f"<p>問題: {html.escape(current_question)}</p>")
        print(f"<form method='post' method='./typegame.py'>")
        print(f"<input type='hidden' name='question_index' value='{question_index}'>")
        print(f"<input type='hidden' name='start_time' value='{time.time()}'>")
        print(f"<input type='hidden' name='score' value='{score}'>")
        print("<input type='text' name='typed_text' autofocus>")
        print("<input type='submit' value='入力'>")
        print("</form>")
print("<a href='logout.html'>logout</a>")
print("</body>")
print("</html>")
