<?php

include('helpers.php');
include('functions.php');

echo '<hr>';

echo '<h1>1. Tasks</h1>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 1.1. Task
|
| Check if string is a palindrome
|--------------------------------------------------------------------------
*/

echo '<h2>1.1. Task - Palindrome</h2>';

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
| 1.2. Task
|
| Create php pow function
|--------------------------------------------------------------------------
*/

echo '<h2>1.2. Task - Pow function</h2>';

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
| 1.3. Task
|
| Get the most repetition number in row
|--------------------------------------------------------------------------
*/

echo '<h2>1.3. Task - Most reps in row</h2>';

$row = ['zagrebacki', 'becki', 'osjecki', 'ljubljanski', 'salata :(', 'cevapi', 'pljeskavica', 'cevapi', 'sendvic', 'lepinja', 'cevapi'];
print_r($row);
echo '<p>Most repeated: ' . getMostRepeatedElement($row) . '</p>';

echo '<hr>';

$row = [1, 2, 3, 4, 5, 6, 1, 1, 2, 3, 4, 5, 6];
print_r($row);
echo '<p>Most repeated: ' . getMostRepeatedElement($row) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 1.4. Task
|
| Get the smallest number in row
|--------------------------------------------------------------------------
*/

echo '<h2>1.4. Task - Smallest number in row</h2>';

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
| 1.5. Task
|
| Get the longest common string in string
|--------------------------------------------------------------------------
*/

echo '<h2>1.5. Task - Longest common string</h2>';

$string1 = "sti";
$string2 = "locastic";

echo '<p>' . getLongestCommonString($string1, $string2) . '</p>';

$string1 = "loca";
$string2 = "oc";

echo '<p>' . getLongestCommonString($string1, $string2) . '</p>';

$string1 = "locastic";
$string2 = "cast";

echo '<p>' . getLongestCommonString($string1, $string2) . '</p>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 1.6. Task
|
| Get the approximate sum of all members within the group
|--------------------------------------------------------------------------
*/

echo '<h2>1.6. Task - The approximate sum of all members within the group</h2>';

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
| 1.7. Task
|
| Get all numbers from 1 to 100 divisible by 3, by 5 and by 3 and 5
|--------------------------------------------------------------------------
*/

echo '<h2>1.7. Task - Numbers divisible by 3, by 5 and by 3 and 5</h2>';

getLocasticNumbers();

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 1.8. Task
|
| Get all folder and files recursively
|--------------------------------------------------------------------------
*/

echo '<h2>1.8. Task - Recursion with folders and files</h2>';

getRecursive();

echo '<hr>';

echo '<h1>2. Tasks</h1>';

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 2.1. Task
|
| Explain integer sum in PHP
|--------------------------------------------------------------------------
*/

echo '<h2>2.1. Task - Explain integer sum in PHP;</h2>';

$result = 6 + "30%" + "$50";

var_dump($result);

echo '<hr>';

/*
|--------------------------------------------------------------------------
| 2.2. Task
|
| Random numbers from 1 to 100, print missing one
|--------------------------------------------------------------------------
*/

echo '<h2>2.2. Task - Random numbers from 1 to 100, print missing one</h2>';

$randomArray = createRandomArrayWithMissingNumber(1, 100);

var_dump($randomArray);

$missingNumber = getMissingNumberFromArray(100, $randomArray);

var_dump($missingNumber);

echo '<hr>';
