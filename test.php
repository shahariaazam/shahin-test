<?php
class test
{
	public $name = "test";
	protected $number = 2;
	protected $secondNumber = 3;

	function test($variable = false)
	{
		$value = $this->name;
		$result = $number + $secondNumber;
		if($result > 2){
			echo "It's is greater than two";
		}else{
			echo "You are a dumb ass!";
		}
	}

	function second($id = null)
	{
		if(!empty($id)){
			echo "ID is not empty";
		}
	}
}
