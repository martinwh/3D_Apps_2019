<?php
 
//Tutorial: Object-Oriented PHP for Beginners
//http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762

require 'model.php';

//Start to instantiate methods (functions) form the model class
echo 'Let us instantiate a new Model object: ';
$obj1 = new Model;

echo 'Let us instantiate another new Model object: ';
$obj2 = new Model; 

// Get the value of $prop1 from both objects
//echo $obj1->getProperty();
//echo $obj2->getProperty(); 

// Output the object as a string
//echo $obj1;

// Set new values for both objects
$obj1->setProperty("I'm a new property value from the first instance of Model!");
$obj2->setProperty("I belong to the second instance of Model!");
 
// Output both objects' $prop1 value
echo $obj1->getProperty();
echo $obj2->getProperty();

// Destroy the object
unset($obj1);
unset($obj2);

// Output a message at the end of the file
echo "End of file. <br/>";
 
?>