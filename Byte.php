<?php

require_once 'valor.php';

class byte extends valor{
   
    public function calcularbyteakilobyte(){
        return $this->getvalor()/8;
    }
    public function calcularbyteamegabyte(){
        return $this->getvalor()/1024;
    }
    public function calcularbyteagigabyte(){
        return $this->getvalor()/1024;
    }
    public function calcularbyteaterabyte(){
        return $this->getvalor()/1024;
    }

}


?>