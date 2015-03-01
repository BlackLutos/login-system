<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		html,body {
			margin:0 auto;
		}
		#login {
			width:210px;
			height: 100px;
			margin-left: 42%;
			margin-top: 10%;
			background-image: url(image/1.jpg);
		}
		#submit {
			border-width: 10px;
			border-height: 10px;
			margin-left: 150px
		}
		h1 {
			text-align: center;
			margin-top: 80px;
			color:#0033FF;
		}
		.label1 {
			color: #33FF66;
		}
	</style>
	<title>登入頁面</title>
</head>
<body>
	<h1>登入頁面</h1>
	<div id="login">	
		<form method="post" action="login_2.php">
	    	<lable class="label1">帳號:<input type="text"  name="user" required></lable><br><br>
			<lable class="label1">密碼:<input type="password"  name="pw" required></lable><br>
			<input name="submit" type="submit" id="submit"  value="登入">
		</form>
	</div>
</body>
</html>

