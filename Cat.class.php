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