<?php
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/food.php';
require_once __DIR__ . '/models/toys.php';
require_once __DIR__ . '/models/category.php';

$dogs = new Category('Dogs', 'fa-solid fa dog');
$cats = new Category('Cats', 'fa-solid fa cat');



$product = new product(
    "collare",
    08.00,
    "https://images.unsplash.com/photo-1546687813-3fcc1c363a07?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&    ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    true, 
    14, 
    $dogs,
);

$food = new product(
    "crocchette",
    
    05.00,"https://images.unsplash.com/photo-1655210913315-e8147faf7600?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    true,
    
    20, 
    $cats,
);

$toys = new product(
    "palla giocattolo",
    03.00,"https://images.unsplash.com/photo-1522763000554-ea7f9637d44c?q=80&w=2966&auto=format&fit=crop&ixlib=rb-4.0.3&    ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    true,
    8,
    $dogs,
);


//$food->setCalories(320);
//$toys->setGenre("ball");


$product = [
    $product,
    $food,
    $toys
];


?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- link css di bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container p-3">
    <h1 class="text-center">Animal shop</h1>
    <div class="row justify-content-center p-4">
        <?php foreach( $product as $element ): ?>
        <div class="col-3">
            <div class="card bg-light text-dark" style="width: 18rem;">
              <img src="<?= $element->image?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $element->name ?></h5>
                <p class="card-text"><?= $element->getProductDetails()?></p>
              </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>







<!-- link js di bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>