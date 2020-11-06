<?php
/*
	class Subject{
		private $name;	//科目名
		private $period;	//時限数
		private $start_date;//講義開始日
		private $daySort;	//曜日
		private $attend;	//出欠。0:欠席，1:出席
		private $attendNum;//授業回数
		private $currentAtNum;//現在の授業回数


		private $zoom_id;	//zoom_idをいれる

		//コンストラクタ
		public function __construct($name, $period, $start_date, $daySort, $attendNum){
			//出欠判定用のプロパティ準備
			for($i = 0; $i < $this->attend; $i++){
				$attend = array(0);
			}
			$this->$attendNum = $attendNum;
			$this->name = $name;
			$this->period = $period;
			$this->start_date = $start_date;
			$this->daySort = $daySort;
		}
		//時間割表示用のメソッド
		public function showName(){
			return $this->name.'('.$this->period.')';//0番目から4文字を抜きだす
		}
		//名前のゲッタ
		public function getName(){
			return $this->name;
		}
		//時限のゲッタ
		public function getPeriod(){
			return $this->period;
		}
		//zoom_idのゲッタ
		public function getZoom_id(){
			return $this->zoom_id;
		}
		//曜日
		public function getDaySort(){
			return $this->daySort;
		}

		//出欠の配列。0:欠席，1:出席
		public function getAttend(){
				return $this->attend;
		}
		//授業回数のゲッタ
		public function getAttendNum(){
			return $this->attendNum;
		}
		//現在の受講授業回数
		public function getCurrentAtNum(){
			$t = 0;
			for($i = 0; $i < $this->attendNum; $i++){
				if($this->attend[i] == 1){
					$t++;
				}
			}
			return $t;
		}
		//危険度判定
		//出席・完了->緑，出席・未完了/欠席・完了->黄色，欠席・未完了->白
		/*public function checkBgcolor(){
			if(isset($_POST['attendance'])&&isset($_POST['task'])){

				if($_POST['attendance'] == 'attend' && $_POST['task'] == 'Yes'){
					return rgba(30, 88, 38, 0.44);
				}elseif($_POST['attendance'] == 'absence' && $_POST['task'] == 'No'){
					return rgb(255, 255, 255);
				}else{
					return rgb(221, 36, 36);
				}
			}else{
				return rgb(100,100,100);
			}
		}
	}*/
 ?>
