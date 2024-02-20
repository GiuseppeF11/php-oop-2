<?php
require_once __DIR__ . './Product.php';
require_once __DIR__ . './Food.php';
require_once __DIR__ . './Toy.php';
require_once __DIR__ . './Pets_Bed.php';
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
            <h1>Pet's Food</h1>
            <div class="row row-cols-4">
                <?php foreach ($Foods as $food) {?>
                    <div class="col">
                        <div class="card p-2 mb-5">
                            <div class="mb-3 text">
                                <h4 class="title"><?php echo $food->name ?></h4>
                                <?php {?>
                                    <div class="details">
                                        <i class="fa-solid <?php echo $food->category?>"></i>
                                        <p> <strong>Marca: </strong> <?php echo $food->brand ?></p>
                                        <p> <strong>Prezzo: </strong> <?php echo $food->price ?> € </p>
                                        <p> <strong>Descrizione: </strong> <?php echo $food->details ?></p>
                                        <p> <strong>Scadenza: </strong> <?php echo $food->expirationDate ?></p>
                                        <p> <strong>Gusto: </strong> <?php echo $food->composition ?></p>
                                        <p> <strong>Peso: </strong> <?php echo $food->weight ?> Kg</p>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="img-box">
                                <img src="<?php echo $food->img ?>" alt="Oasi Porl Small">
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

            <hr>

            <h1>Toys's Food</h1>
            <div class="row row-cols-4">
                <?php foreach ($Toys as $toy) {?>
                    <div class="col">
                        <div class="card p-2">
                            <div class="mb-3 text">
                                <h4 class="title"><?php echo $toy->name ?></h4>
                                <?php {?>
                                    <div class="details">
                                    <i class="fa-solid <?php echo $toy->category?>"></i>
                                        <p> <strong>Marca: </strong> <?php echo $toy->brand ?></p>
                                        <p> <strong>Prezzo: </strong> <?php echo $toy->price ?> € </p>
                                        <p> <strong>Descrizione: </strong> <?php echo $toy->details ?></p>
                                        <p> <strong>Materiali: </strong> <?php echo $toy->materials ?></p>
                                        <p> <strong>Taglia: </strong> <?php echo $toy->pet_size ?></p>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="img-box">
                                <img src="<?php echo $toy->img ?>" alt="Oasi Porl Small">
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>

            <hr>

            <h1>Pets's Beds</h1>
            <div class="row row-cols-4">
                <?php foreach ($Pets_Bed as $bed) {?>
                    <div class="col">
                        <div class="card p-2">
                            <div class="mb-3 text">
                                <h4 class="title"><?php echo $bed->name ?></h4>
                                <?php {?>
                                    <div class="details">
                                        <i class="fa-solid <?php echo $bed->category?>"></i>
                                        <p> <strong>Marca: </strong> <?php echo $bed->brand ?></p>
                                        <p> <strong>Prezzo: </strong> <?php echo $bed->price ?> € </p>
                                        <p> <strong>Descrizione: </strong> <?php echo $bed->details ?></p>
                                        <p> <strong>Materiali: </strong> <?php echo $bed->materials ?></p>
                                        <p> <strong>Taglia: </strong> <?php echo $bed->size ?></p>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="img-box">
                                <img src="<?php echo $bed->img ?>" alt="Oasi Porl Small">
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