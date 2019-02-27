<?php
    class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $uniqueEmails = array();
        foreach($emails as $email){
            if(isset($uniqueEmails[$email])) continue;
            
            $splitEmail = explode('@', $email);
            $localName = $splitEmail[0];
            $splitLocalName = explode('+', $localName);
            $localName= str_replace('.', '', $splitLocalName[0]);
            
            $uniqueEmails[$localName.'@'.$splitEmail[1]] = 0;
        }
        return count($uniqueEmails);
    }
}
?>