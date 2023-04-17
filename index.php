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

<!-- titolo File 1 -->
<h1>bad words</h1>

<!-- collego la pagina a cui invieremo i dati tramite 'action' -->
<form action="control.php" method="GET">
    <!-- campo di testo che tramite il metodo 'GET' (dichiarato nel form) e il 'name'(bad-text) invieremo al server -->
    <textarea name="bad-text" id="" cols="50" rows="10" placeholder="inserisci un testo" required></textarea>
    <!-- campo di testo che tramite il metodo 'GET' (dichiarato nel form) e il 'name'(bad-word) invieremo al server -->
    <input name="bad-word" type="text" placeholder="inserisci il termine da censurare" required>
    <!-- cliccando questo input l'utente invia i testi contenuti nei precedenti due campi al server -->
    <input type="submit">
</form>

</body>
</html>