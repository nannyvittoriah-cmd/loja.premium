<?php


session_start();


include "conexao.php";



if(isset($_POST['entrar'])){


$email=$_POST['email'];

$senha=$_POST['senha'];



$q=$conn->query(

"SELECT * FROM usuarios

WHERE email='$email'

AND senha='$senha'"

);



if($q->num_rows){


$u=$q->fetch_assoc();


$_SESSION['user']=$u['id'];


header("Location:index.php");


}else{


echo "Login inválido";


}


}


?>


<form method="POST">


<input name="email">


<input name="senha">


<button name="entrar">

Entrar

</button>


</form>