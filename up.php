<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="up.css">
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
		<h1 class="home">イベント設定</h1>
		<form action="post.php" method="post">
			<div class="up">
				<h2 class="h2">イベント</h2>
					<ul class="event_list">
						<li class="event"><label>イベント名</label><input type="text" name="event" /></li>
						<li class="event"><label>主催者名</label><input type="text" name="name"></li>
						<li class="event"><label>イベント詳細</label><textarea class="main" name="main"></textarea></li>
					</ul>
				<h2 class="h2">日程</h2>
					<ul class="day_list">
						<li class="day"></li>
						<li class="day"></li>
					</ul>
			</div>
		</form>
	</body>
</html>