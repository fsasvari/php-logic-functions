<?php

if ( ! function_exists('isPalindrome'))
{
	/**
	 * 1. task
	 * 
	 * Check if string is a palindrome
	 *
	 * @param  string  $string
	 * @return bool
	 */
	function isPalindrome($string)
	{
		$string = strtolower(trim($string));
		
		$length = strlen($string);
		
		if ($length == 1 || $length == 0) {
			return true;
		}
		
		if ($string[0] == $string[$length - 1]) {
			return isPalindrome(substr($string, 1, $length - 2));
		}
		
		/*if (substr($string, 0, 1) == substr($string, ($length - 1), 1)) {
			return isPalindrome(substr($string, 1, $length - 2));
		}*/
		
		return false;
	}
}

if ( ! function_exists('getPow'))
{
	/**
	 * 2. task
	 * 
	 * The pow function
	 *
	 * @param  int  $n
	 * @param  int  $m
	 * @return int
	 */
	function getPow($n, $m)
	{
		if ($m === 0) {
			return 1;
		}
		
		$result = $n;
		
		for ($i = 1; $i < $m; $i++) {
			$result *= $n;
		}
		
		return $result;
	}
}

if ( ! function_exists('getSmallestNumberInRow'))
{
	/**
	 * 4. task
	 * 
	 * Get the smallest number in row
	 *
	 * @param  array  $row
	 * @return int
	 */
	function getSmallestNumberInRow(array $row = [])
	{
		foreach ($row as $i => $value) {
			if ($i == 0) {
				$minimum = $value;
			} elseif ($minimum > $value) {
				$minimum = $value;
			}
		}
		
		return $minimum;
	}
}

if ( ! function_exists('getLocasticNumbers'))
{
	/**
	 * 7. task
	 * 
	 * Get all numbers from 1 to 100 divisible by 3, by 5 and by 3 and 5
	 *
	 * @return void
	 */
	function getLocasticNumbers()
	{
		$limit = 100;
		
		for ($i = 1; $i <= $limit; $i++) {
			if ($i % 3 == 0) {
				echo "LOCA<br>";
			}
			
			if ($i % 5 == 0) {
				echo "STIC<br>";
			}
			
			if ($i % 3 == 0 && $i % 5 == 0) {
				echo "LOCASTIC<br>";
			}
		}
		
		return;
	}
}
