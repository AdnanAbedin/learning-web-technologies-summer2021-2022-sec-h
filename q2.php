<?php
$vat;
$amount;

 function vatcalc ($amount){
 return $amount+($amount*15/100);}

 echo "<b>vat=" .vatcalc(100). "\r\n </b><br>";
     ?>