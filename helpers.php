<?php

if ( ! function_exists('getMaxNumberInRow'))
{
	/**
	 * Get the biggest number in row
	 *
	 * @param  array  $row
	 * @return int
	 */
	function getMaxNumberInRow(array $row = [])
	{
		foreach ($row as $i => $value) {
			if ($i == 0) {
				$maximum = $value;
			} elseif ($maximum < $value) {
				$maximum = $value;
			}
		}
		
		return $maximum;
	}
}
