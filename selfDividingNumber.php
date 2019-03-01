<?php
   

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $A =[];
        for($i=$left; $i<=$right; $i++){
            $isSelfDiv = 0;
            $s = (string)$i;
            for($j=0; $j<=strlen($s); $j++){
                if($s[$j]!=0){
                    if( $i % $i[$j] === 0){
                    $isSelfDiv++;
                    }
                }
                   
            if($isSelfDiv === $s){
                array_push($A, $i);
            }
            
        }
        echo $A;
    }
}

selfDividingNumbers(9, 22);



?>