<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
include("conexao.php");

if(empty($_POST['Email']) || empty($_POST['Senha'])){
    header('Location: index.php');
    exit();
}

$Email = mysqli_real_escape_string($conexao,$_POST['Email']);
$Senha = mysqli_real_escape_string($conexao,$_POST['Senha']);

$query = "select Email from usuarios where Email = '{$Email}' and Senha = '{$Senha}'";

$result = mysqli_query($conexao, $query);
$row= mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['Email'] = $Email;
    header('Location: index.php');
    exit();      
} else {
    $_SESSION['nao_autenticado']=TRUE;
    header('Location: index.php');
    exit();    
    }
        ?>
    </body>
</html>
