<?php
function connect_bd(){

$user = "root";
$pass = "";
$dnspdo = 'mysql:dbname=projetbts;host=localhost;charset=utf8';

$PDO = new PDO($dnspdo, $user, $pass);
return $PDO ;
}
?>