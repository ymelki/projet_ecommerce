<?php
var_dump($_GET);
echo $_GET['id'];

include "header.php";
$products=[
    [
        "id" => 0,
        "title" => "ordinateur",
        "price" => 400,
    ],
    [
        "id" => 1,
        "title" => "telephone",
        "price" => 300,
    ],
    [
        "id" => 2,
        "title" => "repas",
        "price" => 40,
    ],
    [
        "id" => 3,
        "title" => "boisson",
        "price" => 5,
    ]
];


?>
<h1>Affichage du Produit</h1> 
Le produit sur lequel vous avez cliqué est :
<?php
// on affiche le produit correspond à l'identidiant sur lequel on a cliqué

// l'identifiant sur lequel on a cliqué
$id=$_GET['id'];
var_dump($products[$id]);