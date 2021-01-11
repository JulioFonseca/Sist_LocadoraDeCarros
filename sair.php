<?php

session_start();
unset( $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: login.php");