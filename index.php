<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("e");
//echo json_encode($search);

//carrega uma lista de usuarios usando login e senha
//$usuario = new Usuario();
//$usuario->login("jose", "654321");
//echo $usuario;

//Insere um novo usuario
//$aluno = new Usuario("aluno2", "bobão");
//$aluno->insert();
//echo $aluno;

//Atualizando
$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("mestre", "foda");

echo $usuario;

?>