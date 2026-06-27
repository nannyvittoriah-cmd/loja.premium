<?php

session_start();

include "../conexao.php";


if(isset($_POST['login'])){


$u=$_POST['usuario'];

$s=$_POST['senha'];



$q=$conn->query(

"SELECT * FROM admin

WHERE usuario='$u'

AND senha='$s'"

);



if($q->num_rows){


$_SESSION['admin']=true;


header("Location:painel.php");


}else{


echo "Login errado";


}


}

?>


<h1>Admin SMM</h1>


<form method="POST">


<input name="usuario" placeholder="Usuário">


<input name="senha" placeholder="Senha">


<button name="login">

Entrar

</button>


</form>