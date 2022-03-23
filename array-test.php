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
    //Array setzten
    $people = array('Babeth', 'Remi', 'Angi');


    //einzelne Werte abrufen
    $name0 = $people[2]; //Angi
    echo "An dritter Position ist $name.<br>";

    $i=0;
    $name =$people[$i]; //Babeth
    echo 'An erster Position ist $name1.<br>'; 


    //Array in Seite ausgeben
    echo '<pre';
    print_r($people);
    echo '</pre>';

    //Alle Werte im Array auflisten
    for ($i = 0; $i < count($people); $i++){ //$i++ ist dasselbe wie $i = $i + 1
        $name =$people[$i]; 
        echo "An $i-ten Position ist $name. <br>";

    }



    ?>
</body>
</html>