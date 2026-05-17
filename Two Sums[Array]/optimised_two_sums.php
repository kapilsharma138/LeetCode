class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];

        for ($i = 0; $i < count($nums); $i++)
        {
            $current = $nums[$i];

            $needed = $target - $current;

             if (isset($arr[$needed])) {
                return [$arr[$needed], $i];
            }

            $arr[$current] = $i;
        }
    }
}