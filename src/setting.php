<!DOCTYPE html>
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
$period_code = $_POST['period'];

$dsn = 'mysql:dbname=taskapp;host=localhost;charset=utf8';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT memo FROM subject WHERE period=?';
$stmt = $dbh->prepare($sql);
$data[] = $period_code;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$memo_text = $rec['memo'];

$dbh = null;
} catch(Exception $e){
	print 'ただいま障害により，ご迷惑をおかけしております。';
	print "$e";
	exit();
}
?>

  <div class="header">
    <div class="header-logo">tastech</div>
    <div class="header-list">
      <ul>
        <li>カレンダー</li>
        <li>タイトルへ戻る</li>
        <li href="#" class="btn cog"></span>設定</li>
        <li href="#" class="login">ログイン</li>
      </ul>
    </div>
  </div>
  <div class="top-wrapper">
  <h1>出欠</h1>
	<form action="sub_edit_check.php" method="post">
		<select name="attendance"><br>
			<option value="null">選択して下さい</option>
			<option value="absence">欠席</option>
			<option value="attend">出席</option>
		</select><br>
	<h1>課題進捗</h1>
		<select name="task"><br>
			<option value="No">未完了</option>
			<option value="Yes">完了</option>
		</select><br>
	<h1>メモ<br>
	<textarea name="memo" rows="5" cols="40"><?php print $memo_text; ?></textarea><br>
	<input type="button" onclick="history.back()" value="戻る">
	<input type="submit" value="保存">
	<?php print '<input type="hidden" name="period" value="'.$period_code.'">'; ?>
	</form>
