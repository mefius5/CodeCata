<?php


    /**
     * @param String $S
     * @return Integer[]
     */
    function diStringMatch($S) {
        $n = strlen($S);
        $A = range(0, $n);
        $min = 0;
        $max = $n;
        
        for($i = 0; $i<$n; $i++){
            if($S[$i] == "I"){
                $A[$i] = $min++;
            }else{
                $A[$i] = $max--;
            }
        }
        
         return $A;
    }
        
    diStringMatch("IIIDD");


?>
