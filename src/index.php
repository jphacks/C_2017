<!DOCTYPE html>
<?php
require_once("data.php");//追記
 ?>

<html>
<head>
  <meta charset="utf-8">
  <title>大学生のための課題管理ツール（仮）</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<?php

try{
	//データベースの接続準備
	$dsn = 'mysql:dbname=taskapp;host=localhost;charset=utf8';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn, $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT name,attend1,task1,condi,memo FROM subject WHERE 1';//nameカラムを全て持ってくる
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	//データベースの切断
	$dbh = null;

	$i = 0;//while内のswitch用

	while(true){
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rec==false){
			break;
		}
		//一般化前
		switch($i){
				case 0:
					$subject_info['A4']['name'] = $rec['name'];
					$subject_info['A4']['attendance'] = $rec['attend1'];
					$subject_info['A4']['task_condition'] = $rec['task1'];
					$subject_info['A4']['condi'] = $rec['condi'];
					$subject_info['A4']['memo'] = $rec['memo'];
					break;
				case 1:
					$subject_info['B1']['name'] = $rec['name'];
					$subject_info['B1']['attendance'] = $rec['attend1'];
					$subject_info['B1']['task_condition'] = $rec['task1'];
					$subject_info['B1']['condi'] = $rec['condi'];
					$subject_info['B1']['memo'] = $rec['memo'];
					break;
				case 2:
					$subject_info['B2']['name'] = $rec['name'];
					$subject_info['B2']['attendance'] = $rec['attend1'];
					$subject_info['B2']['task_condition'] = $rec['task1'];
					$subject_info['B2']['condi'] = $rec['condi'];
					$subject_info['B2']['memo'] = $rec['memo'];
					break;
				case 3:
					$subject_info['B3']['name'] = $rec['name'];
					$subject_info['B3']['attendance'] = $rec['attend1'];
					$subject_info['B3']['task_condition'] = $rec['task1'];
					$subject_info['B3']['condi'] = $rec['condi'];
					$subject_info['B3']['memo'] = $rec['memo'];
					break;
				case 4:
					$subject_info['B4']['name'] = $rec['name'];
					$subject_info['B4']['attendance'] = $rec['attend1'];
					$subject_info['B4']['task_condition'] = $rec['task1'];
					$subject_info['B4']['condi'] = $rec['condi'];
					$subject_info['B4']['memo'] = $rec['memo'];
					break;
				case 5:
					$subject_info['C1']['name'] = $rec['name'];
					$subject_info['C1']['attendance'] = $rec['attend1'];
					$subject_info['C1']['task_condition'] = $rec['task1'];
					$subject_info['C1']['condi'] = $rec['condi'];
					$subject_info['C1']['memo'] = $rec['memo'];
					break;
				case 6:
					$subject_info['C2']['name'] = $rec['name'];
					$subject_info['C2']['attendance'] = $rec['attend1'];
					$subject_info['C2']['task_condition'] = $rec['task1'];
					$subject_info['C2']['condi'] = $rec['condi'];
					$subject_info['C2']['memo'] = $rec['memo'];
					break;
				case 7:
					$subject_info['C3']['name'] = $rec['name'];
					$subject_info['C3']['attendance'] = $rec['attend1'];
					$subject_info['C3']['task_condition'] = $rec['task1'];
					$subject_info['C3']['condi'] = $rec['condi'];
					$subject_info['C3']['memo'] = $rec['memo'];
					break;
				case 8:
					$subject_info['D1']['name'] = $rec['name'];
					$subject_info['D1']['attendance'] = $rec['attend1'];
					$subject_info['D1']['task_condition'] = $rec['task1'];
					$subject_info['D1']['condi'] = $rec['condi'];
					$subject_info['D1']['memo'] = $rec['memo'];
					break;
				case 9:
					$subject_info['D2']['name'] = $rec['name'];
					$subject_info['D2']['attendance'] = $rec['attend1'];
					$subject_info['D2']['task_condition'] = $rec['task1'];
					$subject_info['D2']['condi'] = $rec['condi'];
					$subject_info['D2']['memo'] = $rec['memo'];
					break;
				case 10:
					$subject_info['D3']['name'] = $rec['name'];
					$subject_info['D3']['attendance'] = $rec['attend1'];
					$subject_info['D3']['task_condition'] = $rec['task1'];
					$subject_info['D3']['condi'] = $rec['condi'];
					$subject_info['D3']['memo'] = $rec['memo'];
					break;
				case 11:
					$subject_info['D4']['name'] = $rec['name'];
					$subject_info['D4']['attendance'] = $rec['attend1'];
					$subject_info['D4']['task_condition'] = $rec['task1'];
					$subject_info['D4']['condi'] = $rec['condi'];
					$subject_info['D4']['memo'] = $rec['memo'];
					break;
				case 12:
					$subject_info['E1']['name'] = $rec['name'];
					$subject_info['E1']['attendance'] = $rec['attend1'];
					$subject_info['E1']['task_condition'] = $rec['task1'];
					$subject_info['E1']['condi'] = $rec['condi'];
					$subject_info['E1']['memo'] = $rec['memo'];
					break;
				case 13:
					$subject_info['E2']['name'] = $rec['name'];
					$subject_info['E2']['attendance'] = $rec['attend1'];
					$subject_info['E2']['task_condition'] = $rec['task1'];
					$subject_info['E2']['condi'] = $rec['condi'];
					$subject_info['E2']['memo'] = $rec['memo'];
					break;
				case 14:
					$subject_info['E3']['name'] = $rec['name'];
					$subject_info['E3']['attendance'] = $rec['attend1'];
					$subject_info['E3']['task_condition'] = $rec['task1'];
					$subject_info['E3']['condi'] = $rec['condi'];
					$subject_info['E3']['memo'] = $rec['memo'];
					break;
				default:
					break;
		}
		//テスト用
		//print $i.':';
		//print $rec['name'];
		//print '<br>';
		//swirch文のためのインクリメント
		$i++;
	}
} catch(Exception $e){
	print 'ただいま障害により，大変ご迷惑をおかけしおります。';
	print '<br>';
	print "$e";
	ecit();
}
?>
  <div class="header">
    <div class="header-logo">tastech</div>
    <div class="header-list">
      <ul>
        <li>カレンダー</li>
        <li>タイトルへ戻る</li>
        <li href="setting.php" class="btn cog">設定</li>
        <li href="#" class="login">ログイン</li>
      </ul>
    </div>
  </div>


<div class="top-wrapper">
<div class="container">
  <div class="contents">
  <table>
    <caption>時間割表</caption>
    <tr>
      <th></th> <th>月</th> <th>火</th> <th>水</th> <th>木</th> <th>金</th> <th>土</th> <th>日</th>
    </tr>

    <tr>
      <th>1</th><td class="style-A1"></td>
			<td class="style-B1"  <?php getBgcolor($subject_info['B1']['condi']); ?>>
				<div class="name"><?php print $subject_info['B1']['name']; ?><br></div>
				<div class="content">・出欠</div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['B1']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['B1']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['B1']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="B1">'; ?>
				</form>
			</td>
			<td class="style-C1" <?php getBgcolor($subject_info['C1']['condi']); ?>>
				<div class="name"><?php print $subject_info['C1']['name']; ?><br></div>
				<div class="content">・出欠</div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['C1']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['C1']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['C1']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="C1">'; ?>
				</form>
			</td>
			<td class="style-D1" <?php getBgcolor($subject_info['D1']['condi']); ?>>
				<div class="name"><?php print $subject_info['D1']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['D1']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['D1']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['D1']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="D1">'; ?>
				</form>
			</td>
			<td class="style-E1" <?php getBgcolor($subject_info['E1']['condi']); ?>>
				<div class="name"><?php print $subject_info['E1']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['E1']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['E1']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['E1']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="E1">'; ?>
				</form>
			</td>
			<td class="style-F1">
			</td>
			<td class="style-G1">
			</td>
    </tr>

    <tr>
      <th>2</th>
			<td class="style-A2">
			</td>
			<td class="style-B2" <?php getBgcolor($subject_info['B2']['condi']); ?>>
				<div class="name"><?php print $subject_info['B2']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['B2']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['B2']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['B2']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="B2">'; ?>
				</form>
			</td>
			<td class="style-C2" <?php getBgcolor($subject_info['C2']['condi']); ?>>
				<div class="name"><?php print $subject_info['C2']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['C2']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['C2']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['C2']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="C2">'; ?>
				</form>
			</td>
			<td class="style-D2" <?php getBgcolor($subject_info['D2']['condi']); ?>>
				<div class="name"><?php print $subject_info['D2']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['D2']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['D2']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['D2']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="D2">'; ?>
				</form>
			</td>
			<td class="style-E2" <?php getBgcolor($subject_info['E2']['condi']); ?>>
				<div class="name"><?php print $subject_info['E2']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['E2']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['E2']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['E2']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="E2">'; ?>
				</form>
			</td>
			<td class="style-F2"></td>
			<td class="style-G2"></td>
    </tr>

    <tr>
      <th>3</th>
			<td class="style-A3">
			</td>
			<td class="style-B3" <?php getBgcolor($subject_info['B3']['condi']); ?>>
				<div class="name"><?php print $subject_info['B3']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['B3']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['B3']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['B3']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="B3">'; ?>
				</form>
			</td>
			<td class="style-C3" <?php getBgcolor($subject_info['C3']['condi']); ?>>
				<div class="name"><?php print $subject_info['C3']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['C3']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['C3']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['C3']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="C3">'; ?>
				</form>
			</td>
			<td class="style-D3" <?php getBgcolor($subject_info['D3']['condi']); ?>>
				<div class="name"><?php print $subject_info['D3']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['D3']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['D3']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['D3']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="D3">'; ?>
				</form>
			</td>
			<td class="style-E3" <?php getBgcolor($subject_info['E3']['condi']); ?>>
				<div class="name"><?php print $subject_info['E3']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['E3']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['E3']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['E3']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="E3">'; ?>
				</form>
			</td>
			<td class="style-F3"></td>
			<td class="style-G3"></td>
    </tr>

    <tr>
      <th>4</th>
			<td class="style-A4" <?php getBgcolor($subject_info['A4']['condi']); ?>>
				<div class="name"><?php print $subject_info['A4']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['A4']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['A4']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['A4']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="A4">'; ?>
				</form>
			</td>

			<td class="style-B4" <?php getBgcolor($subject_info['B4']['condi']); ?>>
				<div class="name"><?php print $subject_info['B4']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['B4']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['B4']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['B4']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="B4">'; ?>
				</form>
			</td>
			<td class="style-C4"></td>
			<td class="style-D4" <?php getBgcolor($subject_info['D4']['condi']); ?>>
				<div class="name"><?php print $subject_info['D4']['name']; ?><br></div>
				<div class="content">・出欠<br></div>
				<form action="setting.php" method="post">
				<?php getAttenCondi($subject_info['D4']['attendance']); ?>
				<div class="content">・課題進捗<br></div>
				<?php getTaskCondi($subject_info['D4']['task_condition']); ?>
				<div class="content">・メモ帳<br></div>
				<?php print $subject_info['D4']['memo']; ?>
				<br><input type="submit" value="編集">
				<?php print '<input type="hidden" name="period" value="D4">'; ?>
				</form>
			</td>
			<td class="style-E4"></td>
			<td class="style-F4"></td>
			<td class="style-G4"></td>
    </tr>

    <tr>
      <th>5</th>
			<td class="style-A5"></td>
			<td class="style-B5"></td>
			<td class="style-C5"></td>
			<td class="style-D5"></td>
			<td class="style-E5"></td>
			<td class="style-F5"></td>
			<td class="style-G5"></td>
    </tr>

    <tr>
      <th>6</th>
			<td class="style-A6"></td>
			<td class="style-B6"></td>
			<td class="style-C6"></td>
			<td class="style-D6"></td>
			<td class="style-E6"></td>
			<td class="style-F6"></td>
			<td class="style-G6"></td>
    </tr>

  </table>

  </div>

</div>

</div>
</body>
</html>
