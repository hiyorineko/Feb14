<?php
 
 function div($a,$b){
 	try{
 	 if($a == 0 || $b == 0){
 	 	throw new Exception("だめだよ");
 	 }
 		echo $a/$b;
 	}catch(Exception $e){
 		echo $e->getMessage();
 	}
 }
 div(7,2);
 div(5,0);
 div(0,5);