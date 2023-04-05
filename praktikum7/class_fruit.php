<?php

class fruit {
    // membuat property
    public $name;
    public $color;
    public $flavor;

    // membuat method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Nama Buah = " . $this->name . "<br>Warna Buah = " . $this->color . "<br>Rasa = " . $this->flover;
    }
}

//membuat objek / instance
$fruit1 = new fruit ();
$fruit1->name = "Apel";
$fruit1->color = "merah";
$fruit1->flover = "manis";

echo "Nama Buah = " . $fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();

$fruit1 = new fruit ();
$fruit1->name = "pisang";
$fruit1->color = "kuning";
$fruit1->flover = "manis";

echo "<br>";
echo $fruit1->getInfo();


$fruit1 = new fruit ();
$fruit1->name = "semangka";
$fruit1->color = "merah";
$fruit1->flover = "manis";

echo "<br>";
echo $fruit1->getInfo();