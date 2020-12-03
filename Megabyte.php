<?php

require_once 'valor.php';

class megabyte extends valor{
   
    public function calcularmegabyteabyte(){
        return $this->getvalor()*1;
    }
    public function calcularmegabyteakilobyte(){
        return $this->getvalor()*8;
    }
    public function calcularmegabyteagigabyte(){
        return $this->getvalor()*1024;
    }
    public function calcularmegabyteaterabyte(){
        return $this->getvalor()*1024;
    }

}


?>