<?php


    session_start();
    // $_SESSION["logado"] = false;

    unset($_SESSION["usuario"]);
    header("Location: login.php");