<?php 

include 'Adherent.php';
include 'Plane.php'; 
 
$exemple = new Adherent("", "", "", "", "raphaelboucheron3@gmail.com", "", "salut13");
$yo = $exemple->connexion(); 
echo $yo; 
echo $exemple->nom . "<br />"; 
$plane = new Plane("Yamaha_B", "Yamaha", "EF9028", "UML"); 
$plane->Add(); 


?> 

