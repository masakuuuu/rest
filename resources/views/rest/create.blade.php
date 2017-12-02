<html>
<head>
<title>REST_FORM</title>
</head>
<body>
<h1>POSTを送信するフォーム</h1>
<form action="/rest" method="POST">
{{ csrf_field() }}
NAME:<input type="text" name="name"><br>
MESSAGE:<input type="text" name="message"><br>
<input type="submit" value="send">
</form>

<hr>

<h1>PUTを送信するフォーム</h1>
<form action="/rest/1" method="POST">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
NAME:<input type="text" name="name"><br>
MESSAGE:<input type="text" name="message"><br>
<input type="submit" value="send">
</form>

<hr>

<h1>PUTを送信するフォーム</h1>
<form action="/rest/1" method="POST">
{{ csrf_field() }}
<input type="hidden" name="_method" value="DELETE">
<input type="submit" value="send">
</form>

</body>
</html>