<!DOCTYPE html>
<html>

<head>
    <title> Personal Health Survey</title>
    
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>

    <?php include 'Inc/header.php' ?>

    <div class="title-hp">
        <h2>Personal Health Survey</h2>

        <img src="background.jpg"/>

    </div>
    <div class="text-hp">
        <h3> Take <a href="index.php">this</a> Survey to find out how fit and healthy you are.</h3>
    </div>


    <?php include 'Inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>

</html> 