<?php

if(!isset($_SESSION)) {
    Session_start();
}

IF($_SESSION['logado'] == false){
    header('Location: index.php');
}
?>
