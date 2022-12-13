<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Category.php';

$dogCategory = new Category('Cane');
$catCategory = new Category('Gatto');
$crocchette = new Food('Fresh Natural', 'Barkyn', '800789097439', $dogCategory, '3.99€', 'Crocchette', 'Salmone', '12/05/2024');
$pallina = new Game('Palla da Gioco', 'Eukanuba', '956749234859', $catCategory, '2.49€', 'Gomma', 'No');
$cucciaGrande = new Kennel('Cuccia Comfort', 'Luxpets', '673858395', $dogCategory, '59.99€', 'Grande');
$osso = new Game('Osso da Masticare', 'Vitakraft', '8867099459', $dogCategory, '3.49€', 'Osso di Cervo', 'Si');
$cucciaPiccola = new Kennel('Cuccia Small Luxury', 'Luxpets', '0074623583', $catCategory, '39.95€', 'Piccolo');
$scatolettaPate = new Food('Pranzetti Whiskas 72x50g', 'Whiskas', '0048692785990', $catCategory, '25.99€', 'Umido per Gatti', 'Pesce e Carni Bianche', '12/05/2024');
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
        <h1 class="text-center my-4">Php Pet Store</h1>
        <div class="row gap-3 justify-content-center pt-3">
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $crocchette->name ?>
                </h4>
                <p>
                    Produttore: <?= $crocchette->producer ?>
                </p>
                <p>
                    Categoria animale: <?= $dogCategory->petType ?>
                </p>
                <p>
                    Tipologia di cibo:
                    <?= $crocchette->foodType ?>
                </p>
                <p>
                    Gusto:
                    <?= $crocchette->taste ?>
                </p>
                <p>
                    Prezzo:
                    <?= $crocchette->price ?>
                </p>
            </div>
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $pallina->name ?>
                </h4>
                <p>
                    Produttore: <?= $pallina->producer ?>
                </p>
                <p>
                    Categoria animale: <?= $catCategory->petType ?>
                </p>
                <p>
                    Meteriale: <?= $pallina->material ?>
                </p>
                <p>
                    Commestibile: <?= $pallina->isEdible ?>
                </p>
                <p>
                    Prezzo: <?= $pallina->price ?>
                </p>
            </div>
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $cucciaGrande->name ?>
                </h4>
                <p>
                    Produttore: <?= $cucciaGrande->producer ?>
                </p>
                <p>
                    Categoria animale: <?= $dogCategory->petType ?>
                </p>
                <p>
                    Dimensione: <?= $cucciaGrande->size ?>
                </p>
                <p>
                    Prezzo: <?= $cucciaGrande->price ?>
                </p>
            </div>
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $osso->name ?>
                </h4>
                <p>
                    Produttore: <?= $osso->producer ?>
                </p>
                <p>
                    Categoria animale: <?= $dogCategory->petType ?>
                </p>
                <p>
                    Materiale: <?= $osso->material ?>
                </p>
                <p>
                    Commestibile: <?= $osso->isEdible ?>
                </p>
                <p>
                    Prezzo: <?= $osso->price ?>
                </p>
            </div>
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $cucciaPiccola->name ?>
                </h4>
                <p>
                    Produttore: <?= $cucciaPiccola->producer ?>
                </p>
                <p>
                    Categoria animale: <?= $catCategory->petType ?>
                </p>
                <p>
                    Dimensione: <?= $cucciaPiccola->size ?>
                </p>
                <p>
                    Prezzo: <?= $cucciaPiccola->price ?>
                </p>
            </div>
            <div class="col-lg-3 item_card">
                <h4>
                    <?= $scatolettaPate->name ?>
                </h4>
                <p>
                    Produttore: <?= $scatolettaPate->producer ?>
                </p>
                <p>
                    Categoria animale:<?= $catCategory->petType ?>
                </p>
                <p>
                    Tipologia di cibo: <?= $scatolettaPate->foodType ?>
                </p>
                <p>
                    Gusto: <?= $scatolettaPate->taste ?>
                </p>
                <p>
                    Prezzo: <?= $scatolettaPate->price ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>