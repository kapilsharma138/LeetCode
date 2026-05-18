class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $seen = '';
        $max = 0;

        for ($i = 0; $i < strlen($s); $i++) {

            $current = $s[$i];

            while (strpos($seen, $current) !== false) {
                $seen = substr($seen, 1);
            }

            $seen .= $current;

            if (strlen($seen) > $max) {
                $max = strlen($seen);
            }
        }

        return $max;
    }
}