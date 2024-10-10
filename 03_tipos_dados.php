<?php
// String
$name = "João Prestes";

// Integer
$age = 19;

// Float
$height = 1.75;

// Boolean
$student = true;

// Array
$grades = [10, 9, 8, 7, 8];

// Object
class Person
{
  public string $name_person;

  public function __construct($name_person)
  {
    $this->name_person = $name_person;
    $this->getPersonName($this);
  }

  public static function getPersonName($person)
  {
    echo $person->name_person;
  }
}

$person = new Person("João Prestes");

// NULL
$null = null;

echo "<br/>";
echo "<br/>" . gettype($name);
echo "<br/>" . gettype($age);
echo "<br/>" . gettype($height);
echo "<br/>" . gettype($student);
echo "<br/>" . gettype($grades);
echo "<br/>" . gettype($person);
echo "<br/>" . gettype($null);