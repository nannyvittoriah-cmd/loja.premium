<?php


session_start();


include "api.php";

include "conexao.php";



$user=$_SESSION['user'];



$dados=$conn->query(

"SELECT * FROM usuarios WHERE id=$user"

)->fetch_assoc();



$servico=$_POST['servico'];

$link=$_POST['link'];

$qtd=$_POST['qtd'];





// valor do serviço (exemplo)

$valor=5;



if($dados['saldo'] < $valor){


die("Saldo insuficiente");


}




$res=criarPedido(

$servico,

$link,

$qtd

);





if(isset($res['order'])){



$conn->query(

"UPDATE usuarios

SET saldo=saldo-$valor

WHERE id=$user"

);



$conn->query(

"INSERT INTO pedidos

(usuario,servico,link,quantidade,status)

VALUES

('$user','$servico','$link','$qtd','Em andamento')"

);



echo "Pedido enviado ID: ".$res['order'];



}else{


echo "Erro ao enviar";


}



?>