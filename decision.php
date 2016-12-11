<?php
	$year = date('Y');
	$month = date('n');
	$last_day = date('j',mktime(0,0,0,$month + 1, 0, $year));//月末
	$calendar = array();
	$j = 0;
	for($i = 1; $i < $last_day + 1; $i++) {
		$week = date('w', mktime(0,0,0,$month, $i, $year));
		if($i == 1) {
			for($s = 1; $s <= $week; $s++) {
				$calendar[$j]['day'] = '';
				$j++;
			}
		}
		$calendar[$j]['day'] = $i;
		$j++;
		if($i == $last_day) {
			for($e = 1; $e <= 6 - $week; $e++) {
				$calendar[$j]['day'] = '';
				$j++;
			}
		}
	}
	$wstr = array('日', '月', '火', '水', '木', '金', '土');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="decision.css">
		<title>schedule</title>
	</head>
	<body>
		<div class="menu_list" id="menu_list">
			<ul class="menu">
				<li class="menu"><button type="submit" name="">button</button></li>
				<li class="menu"><button type="submit" name="">button</button></li>
				<li class="menu"><button type="submit" name="login">login</button></li>
			</ul>
		</div>
		<h1 class="home">日程を決める</h1>
		<div class="table">
		<?php echo $year;?>年<?php echo $month;?>月のカレンダー
			<table>
				<tr class="week">
					<th>日</th>
					<th>月</th>
					<th>火</th>
					<th>水</th>
					<th>木</th>
					<th>金</th>
					<th>土</th>
				</tr>
				<tr class="day">
				<?php $cnt = 0; ?>
				<?php foreach ($calendar as $key => $value): ?>
					<td class="day">
					<?php $cnt++; ?>
					<?php echo $value['day']; ?>
					</td>
				<?php if($cnt == 7): ?>
				</tr>
				<tr class="content">
					<?php for ($s=0; $s < 7; $s++): ?>
						<td class="content"></td>
					<?php endfor; ?>
				</tr>
				<tr>
				<?php $cnt = 0; ?>
				<?php endif; ?>
				<?php endforeach; ?>
				</tr>
			</table>
		</div>
	</body>
</html>