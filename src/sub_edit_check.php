<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>大学生のための課題管理ツール（仮）</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
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

<?php
try{
//遷移元からのデータ
$class_at =$_POST['attendance'];
$task_condition = $_POST['task'];
$task_memo = $_POST['memo'];
$period_code = $_POST['period'];

//コンディション用の計算処理
$class_condition;
if($class_at == "attend" && $task_condition == "Yes"){
	$class_condition = 3;
}elseif($class_at == "absence" && $task_condition == "Yes"){
	$class_condition = 2;
}elseif($class_at == "attend" && $task_condition == "No"){
	$class_condition = 1;
}elseif($class_at == "absence" && $task_condition == "No"){
	$class_condition = 0;
}else{
	$class_condition = -1;
}

//セキュリティ対策
 $class_at = htmlspecialchars($class_at,ENT_QUOTES,'UTF-8');
$task_condition = htmlspecialchars($task_condition,ENT_QUOTES,'UTF-8');
$task_memo = htmlspecialchars($task_memo,ENT_QUOTES,'UTF-8');
$class_condition = htmlspecialchars($class_condition,ENT_QUOTES,'UTF-8');


//データベース接続
$dsn = 'mysql:dbname=taskapp;host=localhost;charset=utf8';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'UPDATE subject SET attend1=?,task1=?,memo=?,condi=? WHERE period=?';
$stmt = $dbh->prepare($sql);
$data[] = $class_at;
$data[] = $task_condition;
$data[] = $task_memo;
$data[] = $class_condition;
$data[] = $period_code;

$stmt->execute($data);
//データベースの切断
$dbh = null;

print '更新が完了しました！';

}catch(Exception $e){
	print 'ただいま障害により，大変ご迷惑をおかけしております。';
	print "$e";

	print '$class_at:'."$class_at";
	print '$task_condition'."$task_condition";
	print '$task_memo'."$task_memo";
	print '$period_code'."$period_code";
	print '$class_condition'."$class_condition";
	exit();
}
?>
<form action="index.php" method="POST">
	<input type="submit" value="ホームへ">
</form>
</body>
