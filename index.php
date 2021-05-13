<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(3, "red");
$cylinder = new Cylinder(5, 7, "blue");


echo "Circle area: " . $circle->calculateARea() . ", perameter: " . $circle->calculatePerameter() . ", color: " . $circle->getColor()."<br>";
echo "Cylinder area: " . $cylinder->calculateARea(). ", volume: " . $cylinder->calculateVolume(). ", color: " . $cylinder->getColor();
