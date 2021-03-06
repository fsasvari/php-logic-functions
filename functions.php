<?php

if ( ! function_exists('isPalindrome'))
{
    /**
     * 1.1. task
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
     * 1.2. task
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

if ( ! function_exists('getMostRepeatedElement'))
{
    /**
     * 1.3. task
     *
     * Get most repeated element in row
     *
     * @param  array  $row
     * @return string
     */
    function getMostRepeatedElement(array $row = [])
    {
        $array = [];

        foreach ($row as $value) {
            if (array_key_exists($value, $array)) {
                $array[$value]++;
            } else {
                $array[$value] = 1;
            }
        }

        return getMaxNumberIdInRow($array);
    }
}

if ( ! function_exists('getMinNumberInRow'))
{
    /**
     * 1.4. task
     *
     * Get the smallest number in row
     *
     * @param  array  $row
     * @return int
     */
    function getMinNumberInRow(array $row = [])
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

if ( ! function_exists('getLongestCommonString'))
{
    /**
     * 1.5. task
     *
     * Get the longest common substring in string
     *
     * @param  string  $string1
     * @param  string  $string2
     * @return string
     */
    function getLongestCommonString($string1, $string2)
    {
        $length1 = strlen($string1);
        $length2 = strlen($string2);

        $longestCommonString = [];
        $largestCommonString = 0;

        for ($i = 0; $i < $length1; $i++) {
            for ($j = 0; $j < $length2; $j++) {
                if ($string1[$i] === $string2[$j]) {
                    if ($i == 0 || $j == 0) {
                        $longestCommonString[$i][$j] = 1;
                    } else {
                        $longestCommonString[$i][$j] = $longestCommonString[$i - 1][$j - 1] + 1;
                    }

                    if ($longestCommonString[$i][$j] > $largestCommonString) {
                        $largestCommonString = $longestCommonString[$i][$j];
                        $return = '';
                    }

                    if ($longestCommonString[$i][$j] === $largestCommonString) {
                        $return = substr($string1, $i - $largestCommonString + 1, $largestCommonString);
                    }
                }
            }
        }

        return $return;
    }
}

if ( ! function_exists('getApproximateGroups'))
{
    /**
     * 1.6. task
     *
     * Get the approximate sum of all members within the group
     *
     * @param  array  $row
     * @param  int  $groupsCount
     * @return array
     */
    function getApproximateGroups(array $row = [], $groupsCount = 1)
    {
        $groups = [];
        for ($i = 1; $i <= $groupsCount; $i++) {
            $groups[$i] = [
                'row' => [],
                'sum' => 0
            ];
        }

        $rowCount = count($row);

        for ($i = 0; $i < $rowCount; $i++) {
            $maxId = getMaxNumberIdInRow($row);
            $num = $row[$maxId];

            foreach ($groups as $j => &$group) {
                if ($j == 1) {
                    $groupId = $j;
                    $sum = $group['sum'];
                } elseif ($sum > $group['sum']) {
                    $groupId = $j;
                    $sum = $group['sum'];
                }
            }

            $groups[$groupId]['row'][] = $num;
            $groups[$groupId]['sum'] += $num;

            unset($row[$maxId]);
        }

        return $groups;
    }
}

if ( ! function_exists('getLocasticNumbers'))
{
    /**
     * 1.7. task
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

if ( ! function_exists('getRecursive'))
{
    /**
     * 1.8. task
     *
     * Get all folder and files recursively
     *
     * @param  string  $folder
     * @return void
     */
    function getRecursive($folder = '')
    {
        $except = [
            '.',
            '..',
            '.git'
        ];

        $folder = ($folder ? rtrim($folder, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR : '');

        $path = getcwd().DIRECTORY_SEPARATOR.$folder;

        echo '<ul>';

        $files = scandir($path);

        foreach ($files as $key => $value) {
            if (! in_array($value, $except)) {
                echo '<li>'.$value.'</li>';

                if (is_dir($path.$value)) {
                    getRecursive($folder.$value);
                }
            }
        }

        echo '</ul>';

        return;
    }
}

if ( ! function_exists('createRandomArrayWithMissingNumber'))
{
    /**
     * 2.2. task
     *
     * Create random array with one missing number
     *
     * @param  int  $min
     * @param  int  $max
     * @return array
     */
    function createRandomArrayWithMissingNumber($min = 1, $max = 100)
    {
        $array = [];
        $arrayLength = 0;

        do {
            $randomNumber = rand($min, $max);

            if (! in_array($randomNumber, $array)) {
                $array[] = $randomNumber;
                $arrayLength++;
            }
        } while($arrayLength < $max);

        $randomMissingNumber = rand(($min - 1), ($max - 1));

        unset($array[$randomMissingNumber]);

        return $array;
    }
}

if ( ! function_exists('getMissingNumberFromArray'))
{
    /**
     * 2.2. task
     *
     * Get missing number from array
     *
     * @param  int  $n
     * @param  array  $array
     * @return int
     */
    function getMissingNumberFromArray($n = 100, array $array = [])
    {
        // gauss
        $maxSum = ($n * ($n + 1)) / 2;

        $arraySum = 0;

        foreach ($array as $arr) {
            $arraySum += $arr;
        }

        return $maxSum - $arraySum;
    }
}

if ( ! function_exists('getRemoteFilesizeFromUrl'))
{
    /**
     * 2.3. task
     *
     * Get filesize in kB from remote url
     *
     * @param  array  $url
     * @return int
     */
    function getRemoteFilesizeFromUrl($url)
    {
        $data = get_headers($url, true);

        if (isset($data['Content-Length'])) {
            return round($data['Content-Length'] / 1024, 2).' kB';
        }

        return 0;
    }
}
