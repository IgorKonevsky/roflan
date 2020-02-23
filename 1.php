	<?php

	class Testing{
		private $num;
		function __construct($num){
			$this->num=$num;
		}
		
		function mult(){
			if($this -> num<10){
				echo '0';
				return 0;
			}

			$val=(string)$this -> num;
			$sum=1;
			$count=0;
			while(true){

				for($i = 0; $i < strlen($val); $i++){
					$sum *= $val[$i];
				}
				$count++;
				if($sum<10)
					break;
				$val=(string)$sum;
				$sum=1;
			}
			echo "$sum,\n$count";
			
		}

	}

	$myobj = new Testing("1");
	$myobj -> mult();





	?>