<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5 indexierte Arrays</h5>

    <?php 
    //Array setzten (Namen - Alter)
    $persons = array(
        "Julian' => 34,
        'Nina' =>,
        'Kyle'=>32"
    );

    //
    $persons["Holger"] = 46;

    //einzelne Werte abrufen
    $age = $persons ["Nina"];
    echo "Nina ist $age Jahre jung. <br>";

    $name = "Kyle";
    $age = $persons[$name];
    echo "$name ist $age Jahre jung. <br>";

    //Array in Seite ausgeben
    echo '<pre';
    print_r($people);
    echo '</pre>';


    //Alle Werte im Array auflisten
    foreach($persons as $name => $age){
        
    }

    ?>
</body>
</html>