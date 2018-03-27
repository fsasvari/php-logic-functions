<?php

if ( ! function_exists('getMaxNumberIdInRow'))
{
    /**
     * Get the biggest number in row
     *
     * @param  array  $row
     * @return int
     */
    function getMaxNumberIdInRow(array $row = [])
    {
        foreach ($row as $i => $value) {
            if ($i == key($row)) {
                $maximum = $value;
                $maximumId = $i;
            } elseif ($maximum < $value) {
                $maximum = $value;
                $maximumId = $i;
            }
        }
        
        return $maximumId;
    }
}
