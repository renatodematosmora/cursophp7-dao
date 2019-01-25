<?php
    require_once ("config.php");
/*
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios);
*/

///////////////////////////////////////////

//Carrega apenas um usuário
/*
    $root = new Usuario();
    $root->loadById(1);
    echo $root;
*/

//Carrega uma lista de usuários
/*
    $lista = Usuario::getList();
    echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo login
/*
    $search = Usuario::search("to");
    echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
/*
    $usuario = new Usuario();
    $usuario->login("root", "!@#$%");
    echo $usuario;
*/

//Insere um novo usuário
/*
    $aluno = new Usuario("aluno", "41un0");
    $aluno->insert();
    echo $aluno;
*/

//Alteração dos dados do usuário.
/*
    $usuario = new Usuario();
    $usuario->loadById(7);
    $usuario->update("professor", "prof123");
    echo $usuario;
*/

//Deletar um usuário
    $usuario = new Usuario();
    $usuario->loadById(7);
    $usuario->delete();
    echo $usuario;

?>