<?php namespace App\Controllers;

class Helloworld extends BaseController
{
	public function index($name, $npm)
	{
        //echo $this -> name."<br>";
        //echo $this -> npm;
        echo "Hello, ".$name;
        echo "<br> Your NPM is ".$npm;
    }
    
    public function show () {
        echo "Hello, Firaztori <br>";
        echo "1857051005";
    }
}
	//--------------------------------------------------------------------
