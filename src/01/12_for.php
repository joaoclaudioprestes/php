<?php

$names = ["João", "Maria", "Pedro", "Ana"];

for($i = 0; $i < count($names); $i++) {
  echo $names[$i] . "<br/>";
}

echo "<br/>";

foreach ($names as $name) {
  echo $name . "<br/>";
}