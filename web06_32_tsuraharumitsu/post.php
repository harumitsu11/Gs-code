<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>

<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	EMAIL: <input type="text" name="mail"><br>
	年齢  :   <input type="text" name="age"><br>
	<!-- 備考  :   <input type="text" name="memo"><br> -->
	ご意見 <textarea name="memo" id="" cols="30" rows="10"></textarea>

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>