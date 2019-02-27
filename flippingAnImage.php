<?php
    class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function flipAndInvertImage($A) {
       $j = count($A)-1;
        for($i=0; $i<=count($A)-1; $i++){
            $A[$i] = array_reverse($A[$i]);
            
            for($j=0; $j<=count($A)-1; $j++){
                if($A[$i][$j] == 0){
                    $A[$i][$j] = 1;
                }else{
                    $A[$i][$j] = 0;
                }
            }
        }   
     return $A;  
    }
}
?>