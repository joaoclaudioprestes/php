<?php

require 'dados.php';

$id = $_GET['id'];

$filtrado = array_filter(($livros), fn($livro) => $livro['id'] == $id);

$livroSelecionado = array_pop($filtrado);

$view = 'livro';
require 'views/template/app.php';

