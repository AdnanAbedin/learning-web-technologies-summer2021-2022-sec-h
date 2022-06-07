<?php

$length;
$width;

function area($length,$width){
	return $length*$width;

}
   
   function perimeter ($length, $width){
	   return (2*($length+$width));
   }
 	echo "<b>area=" .area(20,10). "\r\n </b><br>";
	 echo "<b>perimeter=" .perimeter(10,20). "\r\n </b><br>";
     ?>