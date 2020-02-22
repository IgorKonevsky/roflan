<?php

class Reverse{

	public function example1($str){
		$l=strlen($str);
		/*$m;
		for($i=$l; $i>=0; $i--){
			$str[$i] = $m[$l-$i];
		}*/
		echo $str;
	}
}

$obj1 = new Reverse();
$obj1 -> example1("qwerty");





?>
