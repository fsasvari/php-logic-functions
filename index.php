<?php

include('helpers.php');
include('functions.php');

/*
|--------------------------------------------------------------------------
| 1. Task
|
| Check if string is a palindrome
|--------------------------------------------------------------------------
*/

echo '<h2>1. Task - Palindrome</h2>';

$string = 'anavolimilovana';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'ana';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'cevapi';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'a';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'an';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'nekisupervelikistring';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

$string = 'cevapipavec';
echo '<p>' . $string . ' = ' . var_export(isPalindrome($string), true) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 2. Task
|
| Create php pow function
|--------------------------------------------------------------------------
*/

echo '<h2>2. Task - Pow function</h2>';

$n = 2;
$m = 3;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

$n = 1;
$m = 5;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

$n = 5;
$m = 5;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

$n = 4;
$m = 1;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

$n = 5;
$m = 0;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

$n = -2;
$m = 2;
echo '<p>' . $n . '^' . $m . ' = ' . getPow($n, $m) . '</p>';
echo '<p>' . $n . '^' . $m . ' = ' . pow($n, $m) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 3. Task
|
| Get the most repetition number in row
|--------------------------------------------------------------------------
*/

echo '<h2>3. Task - Most reps in row</h2>';

$row = [5, 3, 10, 2, 1, 'cevapi', 'pljeskavica', 'cevapi', 3, 10, 'cevapi'];
print_r($row);
echo '<p>Most repeated: ' . getMostRepeatedElement($row) . '</p>';

echo '<hr>';

$row = [1, 2, 3, 4, 5, 6, 1, 1, 2, 3, 4, 5, 6];
print_r($row);
echo '<p>Most repeated: ' . getMostRepeatedElement($row) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 4. Task
|
| Get the smallest number in row
|--------------------------------------------------------------------------
*/

echo '<h2>4. Task - Smallest number in row</h2>';

$row = [5, 3, 10, 2, 1];
print_r($row);
echo '<p>Smallest: ' . getMinNumberInRow($row) . '</p>';

$row = [0, 5, 8, 3, 12];
print_r($row);
echo '<p>Smallest: ' . getMinNumberInRow($row) . '</p>';

$row = [25, 33, 12, 8, 17];
print_r($row);
echo '<p>Smallest: ' . getMinNumberInRow($row) . '</p>';

$row = [15, 18, 3, 0, -5, -10];
print_r($row);
echo '<p>Smallest: ' . getMinNumberInRow($row) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 5. Task
|
| Get the longest common string in string
|--------------------------------------------------------------------------
*/

echo '<h2>5. Task - Longest common string</h2>';



echo '<hr>';

/*
|--------------------------------------------------------------------------
| 6. Task
|
| Get the approximate sum of all members within the group
|--------------------------------------------------------------------------
*/

echo '<h2>6. Task - The approximate sum of all members within the group</h2>';

$row = [2, 1, 4, 7, 1, 2, 6, 8];
$groupsCount = 3;
$groups = getApproximateGroups($row, $groupsCount);

print_r($row);
echo '<hr>';
foreach ($groups as $group) {
	print_r($group['row']);
	echo '<p>Sum: ' . $group['sum'] . '</p>';
}

echo '<hr>';

$row = [15, 12, 32, 4, 5, 1, 1, 8, 23, 7, 3, 4];
$groupsCount = 4;
$groups = getApproximateGroups($row, $groupsCount);

print_r($row);
echo '<hr>';
foreach ($groups as $group) {
	print_r($group['row']);
	echo '<p>Sum: ' . $group['sum'] . '</p>';
}

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 7. Task
|
| Get all numbers from 1 to 100 divisible by 3, by 5 and by 3 and 5
|--------------------------------------------------------------------------
*/

echo '<h2>7. Task - Numbers divisible by 3, by 5 and by 3 and 5</h2>';

getLocasticNumbers();

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 8. Task
|
| Get all folder and files recursively
|--------------------------------------------------------------------------
*/

echo '<h2>8. Task - Recursion with folders and files</h2>';

getRecursive();

echo '<hr>';
