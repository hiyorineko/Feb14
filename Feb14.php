<?php

	class Cat{
		public $nagasa;
	
		public function __construct($nagasa){
			$this->nagasa = $nagasa;
		}
	
		public function getlength(){
			echo "$this->nagasa<br>";
		}
	}
	
	$hiyorineko = new Cat(4);
	$hiyorineko->getlength();
	
	class Hiyoneko extends Cat{
	
		//@Override
		public function getlength(){
			echo "$this->nagasa<br>";
			echo "meow meow";
		}
	
	}
	
	$hiyocat = new Hiyoneko(5);
	$hiyocat->getlength();
