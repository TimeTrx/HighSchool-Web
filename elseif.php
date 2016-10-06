<?php
$salary = 50000.00;
$sales = 150000.00;
$bonus = 0.00;
$total = 0.00;
if($sales >= 200000.00)
{
	$bonus = $sales * 0.10;
	$total = $salary + $bonus;
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
}
elseif($sales >= 100000.00) {
	$bonus = $sales * 0.05;
	$total = $salary + $bonus;
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
}
elseif($sales >= 50000.00) {
	$bonus = $sales * 0.02;
	$total = $salary + $bonus;
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
}
elseif($sales < 50000.00){
	echo "No Bonus!";
}


?>
