<?php

function connection() {
  echo "Connecting to the database...<br/>";
}

function query() {
  echo "Querying the database...<br/>";
}

function close() {
  echo "Closing the connection...<br/>";
}

connection();
query();
close();