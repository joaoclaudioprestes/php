<?php

// http://localhost:8000/23_get_post.php/?id=45&email=joao.prestes@gmail.com

// GET - são variáveis que ficam salvas na URL, e não no servidor
// POST - são variáveis que ficam salvas no servidor, e não na URL

var_dump($_POST);

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

var_dump($name);
var_dump($email);

