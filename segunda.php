<?php

    if (isset($_GET["peli1"]) && ($_GET["peli2"]) && ($_GET["peli3"])) {
        $peli1 = $_GET["peli1"];
        $peli2 = $_GET["peli2"];
        $peli3 = $_GET["peli3"];

        setcookie("peli1", $peli1, time()+3600*24*7);
        setcookie("peli2", $peli2, time()+3600*24*7);
        setcookie("peli3", $peli3, time()+3600*24*7);



        header("location:index.php");
    }
    else if (isset($_COOKIE["peli1"]) && ($_COOKIE["peli2"]) && ($_COOKIE["peli3"])) {
        $peli1 = $_COOKIE["peli1"];
        $peli2 = $_COOKIE["peli2"];
        $peli3 = $_COOKIE["peli3"];

        setcookie("peli1", $peli1, time()+3600*24*7);
        setcookie("peli2", $peli2, time()+3600*24*7);
        setcookie("peli3", $peli3, time()+3600*24*7);

        header("location:index.php");
    }

    if ($peli2=" " || $peli1=" " || $peli3=" "){

        echo "<article id='error'>Error, no puede haber peliculas sin votación</article>";
        header("location:index.php");
    }



?>