<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Hotels</title>

    <!--
         GOAL:
    Partiamo da questo array di hotel.
    https://www.codepile.net/pile/OEWY7Q1G
    Stampare tutti i nostri hotel con tutti i dati disponibili.
    Avremo un file PHP con il nostro "database" e un file con tutta la logica. -->

    <?php
    require_once 'data.php';


    #var_dump($hotels);

    ?>



    <?php
    foreach ($hotels as $key => $l1) { ?>
        <div class="container">
            <?php
            foreach ($l1 as $key2 => $l2) { ?>




                <h2><?php echo $key2 . ' => ' . $l2 ?></h2>



        <?php     }
        }

        ?>
        </div>

</head>

<body>

</body>

</html>