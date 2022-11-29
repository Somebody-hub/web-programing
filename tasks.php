<?php
// task1: Link access
$very_bad_unclear_name = "15 chicken wings";
$order = $very_bad_unclear_name;
$order .= "and some spicy sauce";
echo $very_bad_unclear_name . "\n";
// end task

// task2: Numbers
$var = 4;
echo $var . "\n";

$float_var = 490.5;
echo "float variable = " . $float_var . "\n";

echo 12 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "the difference in spending money = " . ($last_month - $this_month) . "\n";
// end task

// task3: Division and multiplication
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "\n";
// end task

// task4: Power of number
echo 8**2;
// end task

// task5: Assignment statement
$my_num = 7;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
// end task

// task6: Math functions
$a = 10;
$b = 3;
$remainder = $a % $b;

if($remainder == 0)
{
	echo "Делится без остатка" . "\n";
}
else
{
	echo "Делится с остатком: " . $remainder . "\n";
}

$st = pow(2, 10);
$root = sqrt(245);
$arr = [4, 2, 5 , 19, 13, 0 ,10];
$sum = 0;
foreach ($arr as $num)
{
	$sum += pow($num, 2);
}
$result = sqrt($sum);

echo "sqrt 0:" . round(sqrt(379), 1);
echo "sqrt 1:" . round(sqrt(379), 2);
echo "sqrt 2:" . round(sqrt(379), 3);
$array = [
	'ceil' => ceil(sqrt(587)),
	'floor' => floor(sqrt(587))
];


echo min([4, -2, 5, 19, -130, 0, 10]) . max([4, -2, 5, 19, -130, 0, 10]);

echo rand(0, 100);
$arr1 = [];
while(sizeof($arr1) < 10)
{
	array_push($arr1, rand(0, 100));
}

$a = -10;
$b = 68;
echo  abs($a - $b);
$arr2 = [1, 2, -1, -2, 3, -3];
$new_arr2 = [];
foreach ($arr2 as $num)
{
	array_push($new_arr2, abs($num));
}

$number = 30;
$del = [];
for($i = 1; $i < $number + 1; $i ++)
{
	if($number % $i == 0)
	{
		array_push($del, $i);
	}
}

$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$quantity = 0;
$sum = 0;
for($i = 0; $i < sizeof($arr3); $i++)
{
	$sum += $arr3[$i];
	$quantity++;
	if($sum > 10)
	{
		break;
	}
}
//end task

// task7: Functions
function printStringReturnNumber(): int
{
	echo "some string" . "\n";
	return 10;
}
$my_num = printStringReturnNumber();
echo $my_num . "\n";
//end task
