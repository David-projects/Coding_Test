<?

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $roman = [
            'I' => 1,
            'IV' => 4,
            'V' => 5,
            'IX' => 9,
            'X' => 10,
            'XL' => 40,
            'L' => 50,
            'XC' => 90,
            'C' => 100,
            'CD' => 400,
            'D' => 500,
            'CM' => 900,
            'M' => 1000
        ];
        $romanArray = preg_split('//', $s, -1, PREG_SPLIT_NO_EMPTY);
        $sum = 0;
        for ($i = 0; $i < count($romanArray); $i++) {
            if (isset($romanArray[$i])) {
                if ($roman[$romanArray[$i]] == $roman[$romanArray[$i+1]]) {
                    $sum += $roman[$romanArray[$i]];
                } else if ($roman[$romanArray[$i]] < $roman[$romanArray[$i+1]]) {
                    $sum += $roman[$romanArray[$i] . $romanArray[$i+1]];
                    $i++;
                } else {
                    $sum += $roman[$romanArray[$i]];
                }
            }
        }
        return $sum;
    }
}

$nums = 'MCMXCIV';
$nums = 'IV';

$solutaion = new Solution();
print('           ' . $solutaion->romanToInt($nums));