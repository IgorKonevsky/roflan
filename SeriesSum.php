<?php
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

SeriesSum(2);

