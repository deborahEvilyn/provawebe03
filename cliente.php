<!DOCTYPE html>
<html>
     <head>
     <meta charset="URF-8">
     <title>Cadastro de Clientes></title>
     </head>

     <body>
         <?php
             //recuperação de parametros - entradas 
             $nome = $_GET["nome"];
             $cnpj = $_GET["cnpj"];

             //processamento
             include_once("conexaobd.php");

             $sql = "INSERT INTO CLIENTE(NOME,CNPJ) VALUES('$nome','$cnpj');";

             mysqli_query($connection,$sql) or die("Erro cadastrar cliente");

             //saida

             echo "Cliente cadastrado com sucesso<br>";
             echo "Nome: $nome<br>";
             echo "CNPJ: $cnpj<br>";
             ?>
     </body>
</html>    