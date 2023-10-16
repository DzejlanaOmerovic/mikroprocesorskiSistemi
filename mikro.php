<?php

class shop {

 public $name;
 public $surName;
 public $price;
 public $title;

 public function __construct($name, $surName, $price, $title)
 {
    $this->name = $name;
    $this->surName = $surName;
    $this->price = $price;
    $this->title = $title;
 }
 public function getAuthor()
 {
    return $this->name . " " .  $this->surName;
 }

 public function getPriceTitle()

 {
   return $this->price . " " . $this->title;
 }


}

$objekat1 = new shop("name", "surname", "title", "rpice");
$objekat2 = new shop("name2", "surname2", "title2", "rpice2");
$objekat1->name = "Edina";
$objekat1->surName = "Prezime";
$objekat1->price = 10;
$objekat1->title = "title";
echo $objekat1->name;
echo $objekat1->getAuthor();
$objekat2->name = "ElmaDzejlana";
echo $objekat2->name;


?>