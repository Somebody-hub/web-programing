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
