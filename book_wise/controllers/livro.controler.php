<?php
// Model
require 'dados.php';

$id = $_GET['id'];

$view = str_replace('/', '', $_SERVER['REQUEST_URI']);

if (empty($view)) {
  $view = 'index';
}

require 'views/template/app.php';
