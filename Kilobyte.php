<?php

require_once 'Valor.php';

class kilobyte extends valor{
   
    public function calcularkilobyteabyte(){
        return $this->getvalor()*1;
    }
    public function calcularkilobyteamegabyte(){
        return $this->getvalor()*1024;
    }
    public function calcularkilobyteagigabyte(){
        return $this->getvalor()*1024;
    }
    public function calcularkilobyteaterabyte(){
        return $this->getvalor()*1024;
    }

}


?>