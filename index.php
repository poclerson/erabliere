<?php
if (isset($_POST['nouveau-client'])) {
    $type = $_POST['type'];
    $date = $_POST['dates-' . $type];
    $taille = $_POST['taille'];

    $places = json_decode(file_get_contents('places.json'), true);
    $places[$type][$date] -= $taille;

    print_r("Nombre de places restantes pour le " . $date . " : " . $places[$type][$date]);
    file_put_contents('places.json', json_encode($places));
}
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="cacher.js"></script>
</head>
<body>
    <h1>Formulaire de réservation</h1>
    <form method="POST" action="index.php">
        <select name="type" id="type" onchange=cacher()>
            <option value="brunch">Brunch</option>
            <option value="souper">Souper</option>
        </select>

        <select name="dates-brunch" id="dates-brunch">
            <option value="12032022">12 mars</option>
            <option value="13032022">13 mars</option>
            <option value="19032022">19 mars</option>
            <option value="20032022">20 mars</option>
        </select>

        <select name="dates-souper" id="dates-souper" class="cacher">
            <option value="11032022">11 mars</option>
            <option value="12032022">12 mars</option>
            <option value="18032022">18 mars</option>
            <option value="29032022">19 mars</option>
        </select>

        <input type="number" name="taille">
        <input type="submit" value="Envoyer" name="nouveau-client">
    </form>
</body>
</html>