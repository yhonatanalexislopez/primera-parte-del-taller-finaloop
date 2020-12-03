<?php

require_once 'valor.php';

class terabyte extends valor{
   
    public function calcularterabyteabyte(){
        return $this->getvalor()*1;
    }
    public function calcularterabyteakilobyte(){
        return $this->getvalor()*8;
    }
    public function calcularterabyteamegabyte(){
        return $this->getvalor()*1024;
    }
    public function calcularterabyteagigabyte(){
        return $this->getvalor()*1024;
    }

}


?>