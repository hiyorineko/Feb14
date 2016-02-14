<?php

 spl_autoload_register(function($class){
 	require $class .".class.php";
 });

 $hiyoneko = new Cat("すごくながい");
 $hiyoneko -> getlength();