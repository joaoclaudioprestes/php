<?php

$my_array = array("João", "Maria", "José", "Ana");

$my_second_array = ["João", "Maria", "José", "Ana"];

array_push($my_array, "Pedro"); // Adiciona um elemento no final do array
array_unshift($my_array, "Pedro"); // Adiciona um elemento no início do array
array_pop($my_array); // Remove o último elemento do array
array_shift($my_array); // Remove o primeiro elemento do array
array_splice($my_array, 1, 1); // Remove um elemento do array

echo $my_array[0] . "<br/>";
foreach ($my_array as $name) {
  echo $name . "<br/>";
}

$associative_array = [
  "name" => "João Prestes",
  "age" => 19,
  "height" => 1.75,
  "grades" => [10, 9, 8, 7, 8],
  "documents" => [
    "rg" => "123456789",
    "cpf" => "123.456.789-10"
  ]
];

echo $associative_array["name"] . "<br/>";
foreach ($associative_array["documents"] as $document) {
  echo $document . "<br/>";
}