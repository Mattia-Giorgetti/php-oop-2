<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Category.php';

$dogCategory = new Category('Cane');
$Crocchette = new Food('Fresh Natural', 'Barkyn', '800789097439', $dogCategory, 'Crocchette', 'Salmone', '12/05/2024');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php oop Store</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Php Pet Store</h1>
        <div class="row pt-3">
            <div class="col-4 item_card">
                <h4>
                    Titolo
                </h4>
                <p>Venditore</p>
                <p>Categoria</p>
                <p>tipo di prodotto</p>
                <p>prezzo</p>
            </div>
        </div>
    </div>

</body>

</html>