<?php
require_once("subject.php");

//データベースから持ってきた各教科情報を格納する二次元配列

$subject_info = array(
	'A1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'A2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'A3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'A4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'A5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'A6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'B1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'B2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'B3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'B4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'B5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'B6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'C1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'C2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'C3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'C4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'C5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'C6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'D1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'D2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'D3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'D4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'D5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'D6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'E1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'E2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'E3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'E4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'E5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'E6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'F1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'F2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'F3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'F4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'F5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'F6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),

	'G1'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'G2'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'G3'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'G4'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'G5'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>''),
	'G6'=>array('name'=>'','attendance'=>'','task_condition'=>'','condi'=>-1,'memo'=>'')

);

//時間割表示用に変換するメソッド群
//出席・欠席
function getAttenCondi($atten_condi){
	if($atten_condi == 'null'){
		print "未実施";
	}elseif($atten_condi == 'absence'){
		print "欠席";
	}elseif($atten_condi == 'attend'){
		print "出席";
	}else{
		print "エラー";
	}
}
//タスク完了・未完了
function getTaskCondi($task_condi){
	if($task_condi == 'No'){
		print "未完了";
	}elseif($task_condi == 'Yes'){
		print "完了";
	}else{
		print "エラー";
	}
}
//bgcolor変換メソッド
//引数は、condi値
function getBgcolor($condi){
	if($condi == 3){
		print "bgcolor='#adf491'";
	}elseif($condi == 2){
		print "bgcolor='#208a85'";
	}elseif($condi == 1){
		print "bgcolor='#d4e80a'";
	}elseif($condi == 0){
		print "bgcolor='#ff0000'";
	}else{
		print "bgcolor='#eeeeee'";
	}
}

?>
