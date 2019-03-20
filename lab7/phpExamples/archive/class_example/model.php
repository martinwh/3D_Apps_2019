<?php
 
//Tutorial: Object-Oriented PHP for Beginners
//http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
class Model
{
    // Define class properties
    public $prop1 = "I'm a class property!";

    //Define class methods
    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br/><br/>';
    }

    public function __destruct()
    {
        echo 'The class "', __CLASS__, '" was destroyed.<br/><br/>';
    }

    public function __toString()
    {
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    public function setProperty($newval)
    {
    	$this->prop1 = $newval;
    }

    public function getProperty()
    {
    	return $this->prop1 . "<br/><br/>";
    }
}
 
?>