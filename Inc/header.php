<header>
<br>

<nav class="navbar">
<?php

    $menuItems = array(
        array("/homepage.php", "Home"),
        array("/index.php", "Form"),


    );

    foreach ($menuItems as $item) {
        echo "<a href='$item[0]'>$item[1]</a>-";
    }
    ?>

</nav>
    
</header>