<?php
require_once __DIR__ . './Product.php';
require_once __DIR__ . './Food.php';
require_once __DIR__ . './Toy.php';
require_once __DIR__ . './Categorie.php';
require_once __DIR__ . './Library.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Template PHP</title>
</head>

<body class="bg-warning-subtle py-5">
    <div id="app">
        <div class="container">
            <div class="row row-cols-5">
                <?php foreach ($Products as $product) {?>
                    <div class="col">
                        <div class="card p-2">
                            <div class="mb-3 text">
                                <h4 class="title"><?php echo $product->name ?></h4>
                                <?php /* if ($product get_class(Products) === Food ) */ {?> <!-- Aggiungere testo differente in base al prodotto -->
                                    <div class="details">
                                        <i class="fa-solid fa-dog"></i>
                                        <p> <strong>Marca: </strong> <?php echo $product->brand ?></p>
                                        <p> <strong>Prezzo: </strong> <?php echo $product->price ?> € </p>
                                        <p> <strong>Descrizione: </strong> <?php echo $product->details ?></p>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="img-box">
                                <img src="<?php echo $product->img ?>" alt="Oasi Porl Small">
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- MY JS -->
    <script type="text/javascript" src="./js/scripts.js"></script>

</body>


</html>