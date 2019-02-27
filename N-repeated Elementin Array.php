<?php
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function repeatedNTimes($A) {
     $countOfA = count($A);
        for ($i = 0; $i < $countOfA; $i++) {
            for ($j = 0; $j < $countOfA; $j++) {
                if (($A[$i] == $A[$j]) && $i != $j)
                    return $A[$i];
            }
        }
    }
        
}
?>