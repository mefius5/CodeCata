<?php
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function peakIndexInMountainArray($A) {
       for($i=0; $i<count($A)-1; $i++){
           if($A[$i]>$A[$i+1]){
               return $i;
           }
       }
    }
}
?>