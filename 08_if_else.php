<?php
// if else - used to make decisions

$age = 18;

if ($age >= 18) {
  echo "You are an adult";
} else {
  echo "You are a minor";
}

$age >= 17 ? $message = "You are almost an adult" : $message = "You are a minor";

$age > 16 && $age < 18 ? $message = "You are almost an adult" : $message = "You are a minor";