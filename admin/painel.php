<?php

session_start();

if(!$_SESSION['admin']){

header("Location:index.php");

}


?>


<h1>Painel Admin</h1>


<a href="usuarios.php">

Usuários

</a>


<br>


<a href="pedidos.php">

Pedidos

</a>


<br>


<a href="sair.php">

Sair

</a>