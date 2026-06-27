<?php


include "config.php";



function api($dados){


$curl=curl_init();



curl_setopt(

$curl,

CURLOPT_URL,

API_URL

);



curl_setopt(

$curl,

CURLOPT_POST,

true

);



curl_setopt(

$curl,

CURLOPT_POSTFIELDS,

$dados

);



curl_setopt(

$curl,

CURLOPT_RETURNTRANSFER,

true

);



$res=curl_exec($curl);



curl_close($curl);



return json_decode($res,true);


}




function pegarServicos(){


return api([

"key"=>API_KEY,

"action"=>"services"

]);


}





function criarPedido(

$servico,

$link,

$qtd

){


return api([


"key"=>API_KEY,


"action"=>"add",


"service"=>$servico,


"link"=>$link,


"quantity"=>$qtd


]);


}



?>