<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Hotels</title>

    <! GOAL: Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G Stampare tutti i nostri hotel con tutti i dati disponibili. Avremo un file PHP con il nostro "database" e un file con tutta la logica. -->

        <?php
        require_once 'data.php';


        #var_dump($hotels);

        ?>

        </div>

</head>

<body>


    <?php
    foreach ($hotels as $hotel) { ?>
        <div class="container">
            <?php
            echo "Nome: " . $hotel["name"];
            echo "<br>";
            echo "Descrizione: " . $hotel["description"];
            echo "<br>";
            echo "Parcheggio: ";
            if ($hotel["parking"]) {
                echo "Si";
            } else {
                echo "No";
            };
            echo "<br>";
            echo "Voto: " . $hotel["vote"];
            echo "<br>";
            echo "Distanza dal centro: " . $hotel["distance_to_center"] . " km";
            echo "<br>";
            ?>
        </div>
    <?php
    }
    ?>


</body>

</html>