<?php

require_once("config.php");
/* CARREGA UM USUARIO SO
$sql = new Sql();
$root = new Usuario();
$root->loadById(5);
echo $root;
*/

// carrega uma lista de usuários 
//$lista = Usuario::getList();

//echo json_encode($lista)


/* carrega uma lista de users buscando pelo login
$search = Usuario::search("us");
echo json_encode($search);
*/
/* CARREGA UM USUARIO AUTENTICADO */

/*$usuario  = new Usuario();
$usuario->login("user","12345");

echo $usuario; */

/* ADICIONANDO USUARIOS PELO INSERT
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno; 

-----
$aluno = new Usuario("Ulisses","G@pC3a");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","!@#$%");

$lista = Usuario::getList();
echo json_encode($lista);
?>