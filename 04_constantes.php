<?php
// Constants are used to store data that cannot be changed

define("NAME", "João Prestes");

echo NAME;

function getPath()
{
  // __FILE__ is a magic constant that returns the path of the file
  echo __FILE__ . "<br/>";
}


getPath();

if (defined("NAME")) {
  echo "Constant is defined";
} else {
  echo "Constant is not defined";
}
