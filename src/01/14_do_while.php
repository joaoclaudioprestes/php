<?php

$names = ["João", "Maria", "Pedro", "Ana"];

do {
  $name = array_shift($names);
  echo $name . "<br/>";
} while($name);