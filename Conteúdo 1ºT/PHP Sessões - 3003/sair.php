<?php
    session_start(); #Iniciar Sessão
    session_unset();
    session_destroy(); #Desconectar e criar nova sessão

    header("Location: index.php");
    exit;
?>