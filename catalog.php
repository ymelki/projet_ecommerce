<?php
include("header.php");

// variable qui va contenir les differents articles
// cette variable elle va prendre des données de
// la B.D.

/**
 * variables
 * concatenation
 * les tableaux
 * les boucles / conditions
 */

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
echo "<pre>";
// var_dump($products);
echo "</pre>";
/*
foreach ($products as $product){
    echo "<br>ID : ". $product['id'];
    echo "<br>TITRE : ". $product['title'];
    echo "<br>PRIX : ". $product['price'];
}
*/

?>
    <h1>Catalog</h1>




    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php
        foreach ($products as $product){
            ?>
        
        
        <div class="col">
            <div class="card" width="40px">
            <img src="" class="card-img-top img-thumbnail rounded mx-auto d-block">
            <div class="card-body">
                <h5 class="card-title"><?=$product['id']; ?> <?=$product['title']; ?></h5>
                <p class="card-text"><?=$product['price']; ?> €</p>
                <a href="detail.php?id=<?=$product['id'];?>">Voir plus ...</a>
            </div>
            </div>
        </div>

        <?php 
        } 
        ?>

    </div>

   
   
   
   
    


    
</body>
</html>