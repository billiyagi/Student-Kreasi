<?php

/**
 * 
 * access modifier
 * public
 * 
 * protected
 */

class Fruit
{
  //property
  public $name = "grape";
  public $color;


  // method
  function getname()
  {
    return $this->name;
  }
  function getcolor()
  {
    return $this->color;
  }
}

$grape = new Fruit();
$banana = new Fruit();

$grape->name = "grape";
$banana->color = "yellow";
$banana->name = "banana";

echo $banana->name;
echo "<br>";
echo $grape->getname();
echo "<br>";
echo $banana->getcolor();
