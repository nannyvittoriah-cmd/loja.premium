<?php

include "../conexao.php";


$r=$conn->query(

"SELECT * FROM usuarios"

);


?>


<h1>Usuários</h1>



<?php while($u=$r->fetch_assoc()){ ?>


<div>


Nome:

<?=$u['nome']?>


<br>


Email:

<?=$u['email']?>


<br>


Saldo:

R$ <?=$u['saldo']?>


<br>



<a href="saldo.php?id=<?=$u['id']?>">

Adicionar saldo

</a>


</div>


<hr>



<?php } ?>