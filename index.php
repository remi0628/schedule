<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>schedule</title>
	</head>
	<body>
		<div class="menu_list" id="menu_list">
			<form action="post.php" method="post">
				<ul class="menu">
					<li class="menu"><button type="submit" name="">button</button></li>
					<li class="menu"><button type="submit" name="">button</button></li>
					<li class="menu"><button type="submit" name="login">login</button></li>
				</ul>
			</form>
		</div>
		<h1 class="home">スケジュール管理</h1>
		<div class="choice">
			<ul class="choice">
				<form action="post.php" method="post">
					<li class="box"><button type="submit" name="decide" onclick="post.php">日程を決める</button></li>
					<li class="box"><button type="submit" name="take">出欠を取る</button></li>
				</form>
			</ul>
	</body>
</html>