<?php

include('functions.php');

/*
|--------------------------------------------------------------------------
| 1. Task
|
| Check if string is a palindrome
|--------------------------------------------------------------------------
*/

echo '<h2>1. Task - Palindrome</h2>';

echo '<p>Check if string is a palindrome:</p>';

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

echo '<h2>2. Task - Pow</h2>';

echo '<p>Create PHP pow function</p>';

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
