<?php

require_once("config.php");

$sql = new Sql();

$user = new Usuario();


$user->loadById(5);
echo $user;

?>