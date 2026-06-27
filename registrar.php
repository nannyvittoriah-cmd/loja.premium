<?php

include "conexao.php";


if(isset($_POST['cadastrar'])){


$nome=$_POST['nome'];

$email=$_POST['email'];

$senha=$_POST['senha'];



$conn->query(

"INSERT INTO usuarios(nome,email,senha)

VALUES

('$nome','$email','$senha')"

);



echo "Conta criada";


}


?>


<form method="POST">


<input name="nome" placeholder="Nome">


<input name="email" placeholder="Email">


<input name="senha" placeholder="Senha">


<button name="cadastrar">

Cadastrar

</button>


</form>