<?php

class Katas_8kyu{
	function rowSumOddNumbers($n) {
		$count=1;
		$num=1;
		while($num<=($n-1)){
			$count+=$num;
			$num++;
		}


		echo "$count\n$num";
		$i=(2*$count)-1;
		$res=$i;
		while($num>1){
			$num--;
			$i+=2;
			$res+=$i;
		}
		echo "\n$res";
	}
	function SeriesSum($n) {
		if($n<=1)
			return 1;
		$v=1.0;
		$i=1;
		while ($i<$n){
			$v+=(1/(1+(3*$i)));
			$i++;


		}
		$res = round($v, 2);
		$res=(float)$res;
	}
	function summation($n) {
		if($n<1)
			return 0;
		$sum=0;

		for($i=1; $i<=$n; $i++){
			$sum+=$i;
		}
		return $sum;

	}
	function smallestInteger ($arr) {
		$min=32000;
		for($i=0; $i<count($arr); $i++){
			if($arr[$i]<$min) $min=$arr[$i];
		}
		return $min;

	}
	function removeStringSpaces(string $s): string {
		$s = str_split($s);
		for($i=0; $i < sizeof($s); $i++){
			if($s[$i] == ' '){
				unset($s[$i]);
				$j = $i;
				while($j==' ') $j++;
				$s[
				}
			}
			$s = implode($s);
			return $s;

		}
	}





