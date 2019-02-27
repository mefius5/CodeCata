<?php
    class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
       $B = [];
        $j = count($A);
        for($i = 0; $i<=$j-1; $i++){
            if($A[$i] %2 == 0){
                array_unshift($B, $A[$i]);
            }
            if($A[$i] %2 != 0){
                array_push($B, $A[$i]);
            }
        }
        return $B;
    }
}
?>
         