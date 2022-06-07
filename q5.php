<?php
function findodd(){
    echo "All the odd numbers between 10 to 200 are:";
    for ($i=10; $i <=100; $i++){
       if($i%2!=0){

           echo $i."\r\n  ";
       }
   }
   echo "<br>";


}
findodd();

     ?>