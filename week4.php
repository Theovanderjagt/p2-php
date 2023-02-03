<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   /*
   $timeOfDay = date("G");
   echo "het is op dit moment het uur: " .$timeOfDay. "<br><br>";

   echo "het is nu " ;
   if($timeOfDay >= 6 && $timeOfDay < 12)
   {
    echo "ochtend <br>";
   }

   if($timeOfDay >= 12 && $timeOfDay < 18)
   {
    echo "middag <br>";
   }
   
   if($timeOfDay >= 18 && $timeOfDay < 24)
   {
    echo "avond <br>";
   }
   
   if($timeOfDay < 6)
   {
    echo "nacht <br>";
   } */
   ?>
   

<?php
   $timeOfDay = date("G") * 1;
   switch($timeOfDay)
   {
      case 0 : echo "Nacht <br>"; break;
      case 1 : echo "Nacht <br>"; break;
      case 2 : echo "Nacht <br>"; break;
      case 3 : echo "Nacht <br>"; break;
      case 4 : echo "Nacht <br>"; break;
      case 5 : echo "Nacht <br>"; break;
      case 6 : echo "ochtend <br>"; break;
      case 7 : echo "ochtend <br>"; break;
      case 8 : echo "ochtend <br>"; break;
      case 9 : echo "ochtend <br>"; break;
      case 10 : echo "ochtend <br>"; break;
      case 11 : echo "ochtend <br>"; break;
      case 12 :  echo "middag <br>"; break;
      case 13 :  echo "middag <br>"; break;
      case 14 :  echo "middag <br>"; break;
      case 15 :  echo "middag <br>"; break;
      case 16 :  echo "middag <br>"; break;
      case 17 :  echo "middag <br>"; break;
      case 18 :  echo "Avond <br>"; break;
      case 19 :  echo "Avond <br>"; break;
      case 20 :  echo "Avond <br>"; break;
      case 21 :  echo "Avond <br>"; break;
      case 22 :  echo "Avond <br>"; break;
      case 23 :  echo "Avond <br>"; break;
      default : echo "Foutboodschap";

}
 ?>

<?php

$varChar = 10;
$varChar2 = 15;

if( $varChar > $varChar2){

    $varChar = $varChar * 2;

    $uitkomst = $varChar + $varChar2;
    echo $uitkomst;
}
else{
    $varChar2 = $varChar2 * 2;

    $uitkomst = $varChar + $varChar2;
    echo $uitkomst;
    }



?>

<br>

<?php
        $prijs = 153;
        if( $prijs > 150){
                $uitkomst = $prijs * 1.19;
                echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 19%: $uitkomst";
        }

        elseif( $prijs < 55){
                $uitkomst = $prijs * 1.11;
                echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 11%: $uitkomst";
        }
        else {
            $uitkomst = $prijs * 1.16;
            echo "oude prijs is: $prijs.  ";  echo "nieuwe prijs is met 16%: $uitkomst";
           
    }

    ?>



