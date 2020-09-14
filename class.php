<?php 
	class Fruits{
		public $name;
		
		function __construct($var1){
			$this->name=$var1;
		}

		function set_name($var1)
		{
			
			$this->name=$var1;
		}
		function getname()
		{
			return $this->name;
		}
	}
	
	class Staw extends Fruits
	{
		public function say_hi()
		{
			echo "hi";
		}
	}
	$ob1= new Staw("apple");
	//$ob1->set_name("apple");
	$ob1->say_hi();
	echo $ob1->getname();
	

?>