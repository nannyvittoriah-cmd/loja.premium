<?php


$conn = new mysqli(

"localhost",

"root",

"",

"smm"

);



if($conn->connect_error){

die("Erro conexão");

}


?>