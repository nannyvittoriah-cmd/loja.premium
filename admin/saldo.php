<?php


include "../conexao.php";


$id=$_GET['id'];



if(isset($_POST['add'])){


$valor=$_POST['valor'];



$conn->query(

"UPDATE usuarios

SET saldo=saldo+$valor

WHERE id=$id"

);



echo "Saldo adicionado";


}


?>


<h2>Adicionar saldo</h2>



<form method="POST">


<input name="valor" placeholder="Valor">


<button name="add">

Adicionar

</button>


</form>