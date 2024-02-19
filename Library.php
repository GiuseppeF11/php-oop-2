<?php 
require_once __DIR__ . './Product.php';
require_once __DIR__ . './Food.php';
require_once __DIR__ . './Categorie.php';

$Products = [
    $oasi_pork_small = new Food(
        'Bocconcini di maiale',
        'Oasi',
        '16,00',
        'Gustosi e nutrienti',
        'https://www.ipelosi.it/cache/oasy-dog-adult-small-mini-maiale-25-kg-crocchette-monoproteiche-cane_5467_it.png-750-750.jpg',
        '2024-06-19',
        'pork',
        'no allergies',
        5
    ),
    $oasi_pork_large = new Food(
        'Bocconcini di maiale',
        'Oasi',
        '21,00',
        'Gustosi e nutrienti',
        'https://www.ipelosi.it/cache/oasy-dog-adult-all-breed-maiale-12-kg-monoproteico_1827_it-750-750.jpg',
        '2024-06-19',
        'pork',
        'no allergies',
        8
    ),
    $dog_bed = new Toy(
        'Cuccia cane morbida',
        'Sleepy pets',
        '40,00',
        'Lavabile',
        'https://cuccioletti.it/cdn/shop/products/cuccia-cani-interno-hobbit-cuccioletti_800x.jpg?v=1652807632',
        'Spugna',
        'Morbida cuccia adatta al tuo cucciolo',
        'Medio/Grande',
    ),
    $squirrle = new Toy(
        'Scoiattolo Peluche',
        'Trixie',
        '4,90',
        'Lavabile',
        'https://arcaplanet.vtexassets.com/arquivos/ids/217805/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-scoiattolo-striato-in-peluche-tric85.jpg?v=637454593279430000',
        'Spugna, pelo',
        'Simpatico peluche di spugna che suona',
        'Tutte le taglie',
    ),
];