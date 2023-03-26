<?php

    if (isset($_GET["peli1"]) && ($_GET["peli2"]) && ($_GET["peli3"])) {
        $peli1 = $_GET["peli1"];
        $peli2 = $_GET["peli2"];
        $peli3 = $_GET["peli3"];

        setcookie("nombre", $peli1, time()+3600*24*7);
        setcookie("password", $peli2, time()+3600*24*7);
        setcookie("password", $peli3, time()+3600*24*7);
    }
    else if (isset($_COOKIE["peli1"]) && ($_COOKIE["peli2"]) && ($_COOKIE["peli3"])) {
        $peli1 = $_COOKIE["peli1"];
        $peli2 = $_COOKIE["peli2"];
        $peli3 = $_COOKIE["peli3"];

        setcookie("nombre", $peli1, time()+3600*24*7);
        setcookie("password", $peli2, time()+3600*24*7);
        setcookie("password", $peli3, time()+3600*24*7);
    }

?>