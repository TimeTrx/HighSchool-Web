<?php
$salary = 50000.00;
$sales = 150000.00;
$bonus = 0.00;
$total = 0.00;

switch($sales){
	case ($sales >= 200000.00):
	$bonus = $sales * 0.10;
	$total = $sales + $salary;	
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
	break;
	case ($sales >= 100000.00):
	$bonus = $sales * 0.05;
	$total = $salary + $bonus;
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
	break;
	case ($sales >= 50000.00):
	$bonus = $sales * 0.02;
	$total = $salary + $bonus;
	echo "Bonus is $ $bonus
	Salary including bonus is $ $total";
	break;
	case($sales < 50000.00):
	echo "No Bonus!";
	break;

}

?>
