<?php


    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        
        if ($J==="" || $S===""){
            return 0;
        }
        
        $count = 0;
        
        for ($i=0; $i<strlen($J); $i++){
            for ($s=0; $s<strlen($S); $s++){
                if($J[$i] === $S[$s]){
                    $count ++;
                };
                
            }
        
        }
        echo $count;
    }
numJewelsInStones('aA', 'aAAAbbb');


?>
