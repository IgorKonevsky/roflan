<?php
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

rowSumOddNumbers(3);


