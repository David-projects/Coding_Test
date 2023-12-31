<?

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if (strlen($x) < 0) return false;
        if (strlen($x) == 2 && ((int)$x[0] !== (int)$x[1])) return false;
        if (strlen($x) == 2 && ((int)$x[0] == (int)$x[1])) return true;
        for ($i = 0; $i <= strlen($x) / 2; $i++) {
            if ($x[$i] !== $x[strlen($x) - ($i + 1)]) {
                return false;
            }
        }
        return true;
    }
}

$nums = '-121';

$solutaion = new Solution();
var_dump($solutaion->isPalindrome($nums));