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
       include ("conexao.php");

$CPF = $_POST['CPF'];
$Nome_Cliente =$_POST['Nome_Cliente'];
$Email_Cliente= $_POST['Email_Cliente'];
$Senha=$_POST['Senha'];
$Sexo=$_POST ['Sexo'];
$DataNasc = $_POST['DataNasc'];
$Endereco_Cliente = $_POST['Endereco_Cliente'];
$Estado_Cliente =  $_POST['Estado_Cliente'];
$Cidade_Cliente = $_POST['Contato'];

$sql= "insert into usuarios (CPF,Nome_Cliente,Email_Cliente,Senha,Sexo,DataNasc,Endereco_Cliente,Estado_Cliente,Cidade_Cliente)values('$CPF','$Nome_Cliente','$Email_Cliente','$Senha','$Sexo','$DataNasc','$Endereco_Cliente','$Estado_Cliente','$Cidade_Cliente')";
$salvar = mysqli_query($conexao,$sql);

header('Location: index.php');
        ?>
    </body>
</html>
