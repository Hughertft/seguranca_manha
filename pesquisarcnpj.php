<?php 

session_start();

include('validarlogin.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
       <h1> Pesquisar CNPJ</h1>
       <form id="pesquisarcnpj" action="autenticacnpj.php" method="POST">
            CNPJ: <input type="text" name="cnpj" required><br>   
            <input type="submit" name="pesquisar" value="Pesquisar"><br>
        </form>
        <a href="pesquisarcnpj.php"> Voltar</a>
    <center>


</body>
</html>