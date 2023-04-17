<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- titolo File 2 -->
    <h1>controllo bad words</h1>

    <?php 
    // stampo a schermo il testo inseito nel campo di textarea
    echo "Testo originale: " . $_GET['bad-text'];
    ?>

    <br>

    <?php

    // stampo a schermo la lunghezza del testo inserito nel campo di textarea
    echo "Lunghezza testo originale: " . strlen($_GET['bad-text']);

    ?>

    <hr>

    <?php

    // creo una variabile 'censoredText' uguale al testo originale (testo inserito nel campo della text-area) con le occorrenze (uguali alla parola inserita nel campo di input) sostituite da tre asterischi
    $censoredText = str_replace($_GET['bad-word'], "***", $_GET['bad-text']);

    // stampo a schermo la variabile uguale al nuovo testo
    echo "Testo censurato: " . $censoredText;

    ?>

    <br>

    <?php

    // stampo a schermo la lunghezza della variabile uguale al nuovo testo
    echo "Lunghezza testo censurato: " . strlen($censoredText);

    ?>

</body>
</html>