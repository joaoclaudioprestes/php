<?php

$names = ["João", "Maria", "Pedro", "Ana"];

$i = 0;
$cout = 100;

while($i <= $cout) {
  echo $i . "<br/>";
  $i++;
}

while($name = array_shift($names)) {
  echo $name . "<br/>";
}

// break - stops the loop
// continue - skips the current iteration