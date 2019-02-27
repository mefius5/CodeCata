<?php
    class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $x = 0;
        $y = 0;
        foreach(str_split($moves) as $move){
            switch($move){
                case ("L"):
                    $x --; 
                    break;
                case ("R"):
                    $x ++; 
                    break;
                case ("U"):
                    $y --; 
                    break;
                case ("D"):
                    $y ++ ; 
                    break;
            }
        }
        return  (x==0 && y==0);
    }
}
?>