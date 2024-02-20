<?php 
require_once __DIR__ . './Product.php';

$Foods = [
    $oasi_pork_small = new Food(
        'Bocconcini di maiale',
        'fa-dog',
        'Oasi',
        '16,00',
        'Gustosi e nutrienti',
        'https://www.ipelosi.it/cache/oasy-dog-adult-small-mini-maiale-25-kg-crocchette-monoproteiche-cane_5467_it.png-750-750.jpg',
        '2024-06-19',
        'Maiale',
        'no allergies',
        5
    ),
    $oasi_pork_large = new Food(
        'Bocconcini di maiale',
        'fa-dog',
        'Oasi',
        '21,00',
        'Gustosi e nutrienti',
        'https://www.ipelosi.it/cache/oasy-dog-adult-all-breed-maiale-12-kg-monoproteico_1827_it-750-750.jpg',
        '2024-06-19',
        'Maiale',
        'no allergies',
        8
    ),
    $oasi_chicken_large = new Food(
        'Bocconcini di pollo',
        'fa-dog',
        'Oasi',
        '42,50',
        'Appetitosi',
        'https://www.ipelosi.it/cache/oasy-dog-adult-performance-pollo-12-kg_1822_it-750-750.jpg',
        '2024-08-11',
        'Pollo',
        'no allergies',
        12
    ),
    $oasi_chicken_large = new Food(
        'Bocconcini di pollo',
        'fa-cat',
        'Oasi',
        '42,50',
        'Appetitosi',
        'https://www.ipelosi.it/cache/oasy-dog-puppy-junior-medium-pollo-12-kg_1819_it-750-750.jpg',
        '2024-05-11',
        'Pollo',
        'no allergies',
        12
    ),
    $hills_gatto = new Food(
        'Hill\'s Diet Thyroid Care Umido',
        'fa-cat',
        'Hill\'s',
        '2,30',
        'Dietetico',
        'https://www.ipelosi.it/cache/hills-diet-yd-thyroid-care-156-gr-umido-gatto_604_it-750-750.jpg',
        '2024-05-18',
        'Pollo',
        'no allergies',
        1
    ),
];

$Toys = [
    $squirrle = new Toy(
        'Scoiattolo Peluche',
        'fa-dog',
        'Trixie',
        '4,90',
        'Simpatico peluche di spugna che suona',
        'https://arcaplanet.vtexassets.com/arquivos/ids/217805/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-scoiattolo-striato-in-peluche-tric85.jpg?v=637454593279430000',
        'Spugna - Pelo',
        'Simpatico peluche di spugna che suona',
        'S - M - L',
    ),
    $kong_extreme = new Toy(
        'Kong Extreme Nero',
        'fa-dog',
        'Kong',
        '9,80',
        'Rimbalza e può essere riempito con del cibo',
        'https://www.ipelosi.it/cache/kong-extreme-nero-small-per-cani-da-1-a-10-kg_2520_it-750-750.jpg',
        'Gomma',
        'Simpatico peluche di spugna che suona',
        'S - M - L',
    ),
];

$Pets_Bed = [
    $dog_bed = new Pets_Bed(
        'Cuccia cane morbida',
        'fa-dog',
        'Sleepy pets',
        '40,00',
        'Lavabile',
        'https://cuccioletti.it/cdn/shop/products/cuccia-cani-interno-hobbit-cuccioletti_800x.jpg?v=1652807632',
        'Spugna',
        'Medio/Grande',
    ),
];