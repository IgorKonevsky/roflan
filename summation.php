<?php
function summation($n) {
	if($n<1)
		return 0;
	$sum=0;

	for($i=1; $i<=$n; $i++){
		$sum+=$i;
	}
	return $sum;

}