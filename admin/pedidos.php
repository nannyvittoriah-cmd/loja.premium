<?php


include "../conexao.php";


$p=$conn->query(

"SELECT * FROM pedidos ORDER BY id DESC"

);


?>


<h1>Pedidos</h1>



<?php while($x=$p->fetch_assoc()){ ?>


<div>


Pedido:

<?=$x['id']?>

<br>


Serviço:

<?=$x['servico']?>

<br>


Link:

<?=$x['link']?>

<br>


Quantidade:

<?=$x['quantidade']?>

<br>


Status:

<?=$x['status']?>



</div>


<hr>



<?php } ?>