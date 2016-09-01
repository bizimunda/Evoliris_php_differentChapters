<?php

//
/*
 *  variable commence toujours par un $
 *  un String est entouré de "" ou ''
 *  un int, simplement un nombre
 *  un float, de la manieere que un par contere le spéarateur est un point
 *  un boolean, soit true soit false
 *
 */

$nom = "Hamid";
$int = 5;
$float = 5.4;
$bool = true;

//tableau permissible
$tab = array();
$tab=array("a","b","c");
/*[
 *0=>"a",
 *1=>"b",
 *2=>"c",
 *3=>"d"
 * ]
 * */
$tab[] = "un string";
$tab[5] = "";

//tab associative
$tabAsso= array();
$tabAsso['Prenom']="Julien";

foreach ($tab as $key => $item){
    $item
}

foreach ($tab as $key => $item){
    echo $key . ":" . $item;  //prenom : julier
}

//add element at the end
array_push($tab, "prenom");

//for, for each, while, do while
//for on peut ajouter et supprimer
for($i =0; $i<count($tab); $i++){

}

//for each ne peut ni ajouter ne supprimer
foreach ($tab as $item){

}

//while

$i=0;
while ($iw10){
    $i++;
}

do {
    $i++;

}while ($i<10);

//if, else if, else, switch, ternaire

if ($int < 5) {
    echo "ok";

} elseif ($int > 10) {
    echo "KO";
} else {
    echo "10";
}

switch ($int) {
    case 10:

        break;

    case 0:

    case 20:
}

$autorise = true;
$message = "";
if ($autorise) {
    $message = "autorisé";
} else {
    $message = "Refusé";
}
// condition ? si vrai : si faux
$message = $autorise ? "autorisé" : "refusé";
$reussi= ($int >10)? "OK": "Ko";

function somme ($nb1, $nb2){

    $result=$nb1+$nb2;
    return $result;

}

$returned_value= somme(2,3);









