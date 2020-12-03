<?php

if(isset($_POST["btncalcular"])){
       
    require_once 'Byte.php';
    require_once 'Kilobyte.php';  
    require_once 'Megabyte.php';
    require_once 'Gigabyte.php';
    require_once 'Terabyte.php';

    $byte=new Byte();
    $kilobyte=new Kilobyte();
    $megabyte=new Megabyte();
    $gigabyte=new Gigabyte();
    $terabyte=new Terabyte();

    $Valor = $_POST["txtvalor"];

    $tipodenumero = $_POST["selnumeros"];
    
    $opcion = $_POST["numeros"];
    

   switch($opcion){
   
   case "byte":
    $byte->setValor($Valor);
   switch($tipodenumero){
      case "kilobyte":
         
         echo "la conbercion a vinario es byte a kilobytes es ".$kilobyte->calcularbyteakilobyte();
   break;

      case  "megabyte":
      
         echo "la conbercion a vinario es byte a megabytes es ".$megabyte->calcularbyteamegabyte();

   break;

      case  "gigabyte":
      
         echo "la conbercion a vinario es byte a gigabytes es ".$gigabyte->calcularbyteagigabyte();



    break;

        case "terabyte":
         
         echo "la conbercion a vinario es byte a terabytes es ".$terabyte->calcularbyteaterabyte();

   break;

   }
  break;



      case "kilobyte":
        $kilobyte->setValor($Valor);
         switch($tipodenumero){
         
           case "byte":
            
               echo "la conbercion a vinario  bytes a kilobyte es ".$byte->cacalcularkilobyteabyte();
         break;
     
            case  "megabyte":
            
               echo "la conbercion a vinario  megabytes a kilobyte es ".$megabyte->calcularkilobyteamegabyte();
     
         break;
     
            case  "gigabyte":
           
               echo "la conbercion a vinario  gigabytes  a kilobyte es ".$gigabyte->calcularkilobyteagigabyte();
     
     
     
          break;
     
              case "terabyte":
                
               echo "la conbercion a vinario   terabytes a kilobyte es ".$terabyte->calcularkilobyteaterabyte();
     
         break;
        }
        break;

     case "megabyte":
      $megabyte->setValor($Valor);
        switch($tipodenumero){
            case "byte":
              
               echo "la conbercion a vinario   bytes a  megabyte es ".$byte->calcularmegabyteabyte();
         break;
     
            case  "kilobyte":
            
               echo "la conbercion a vinario   kilobytes a  megabyte es ".$kilobyte->calcularmegabyteakilobyte();
     
         break;
     
            case  "gigabyte":
            
               echo "la conbercion a vinario   gigabytes a  megabyte es ".$gigabyte->calcularmegabyteagigabyte();
     
     
     
          break;
     
              case "terabyte":
             
               echo "la conbercion a vinario  terabytes a  megabyte es ".$terabyte->calcularmegabyteaterabyte();
     
         break;
       }
        break;

     case "gigabyte":
      $gigabyte->setValor($Valor);
       switch($tipodenumero){
           case "byte":
              
               echo "la conbercion a vinario bytes a gigabyte es ".$byte->calculargigabyteabyte();
         break;
     
            case  "kilobyte":
            
               echo "la conbercion a vinario  kilobytes a gigabyte es ".$kilobyte->calculargigabyteakilobyte();
     
         break;
     
            case  "megabyte":
           
               echo "la conbercion a vinario  megabytes a gigabyte es ".$megabyte->calculargigabyteamegabyte();
     
     
     
          break;
     
              case "terabyte":
                
               echo "la conbercion a vinario  terabytes a gigabyte es ".$terabyte->calculargiegabyteaterabyte();
     
         break;
         }
        break;
        

     case "terabyte":
      $terabyte->setValor($Valor);
       switch($tipodenumero){
           case "byte":
              
               echo "la conbercion a vinario es terabyte a bytes es ".$byte->calcularterabyteabyte();
         break;
     
            case  "kilobyte":
            
               echo "la conbercion a vinario es terabyte a kilobytes es ".$kilobyte->calcularterabyteakilobyte();
     
         break;
     
            case  "megabyte":
             
               echo "la conbercion a vinario es terabyte a megabytes es ".$megabyte->calcularterabyteamegabyte();
     
     
     
          break;
     
              case "terabyte":
              
               echo "la conbercion a vinario es terabyte a gigabytes es ".$gigabyte->calcularterabyteagigabyte();
     
         break;
        }
         
      break;


        }

}else{
  echo "acceso no permitido buelve a intentar otro dia.";
}

     

?>