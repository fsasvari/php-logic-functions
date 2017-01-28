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
			}
			
			if ($minimum > $value) {
				$minimum = $value;
			}
		}
		
		return $minimum;
	}
}
