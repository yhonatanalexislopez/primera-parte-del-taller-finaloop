<?php

require_once 'valor.php';

class gigabyte extends valor{
   
    public function calculargigabyteabyte(){
        return $this->getvalor()*1;
    }
    public function calculargigabyteakilobyte(){
        return $this->getvalor()*8;
    }
    public function calculargigabyteamegabyte(){
        return $this->getvalor()*1024;
    }
    public function calculargiegabyteaterabyte(){
        return $this->getvalor()*1024;
    }

}


?>