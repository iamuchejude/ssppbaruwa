<?php
  require_once('./src/database.php');

  $query = "CREATE TABLE members (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    family INT(11) NOT NULL,
    surname VARCHAR(225) NOT NULL,
    first_name VARCHAR(225) NOT NULL,
    other_name VARCHAR(225) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    date_of_birth VARCHAR(50) NOT NULL,
    age VARCHAR(4) NOT NULL,
    phone_number VARCHAR(30) NOT NULL,
    baptism VARCHAR(10) NOT NULL,
    holy_eucharist VARCHAR(10) NOT NULL,
    confirmation VARCHAR(10) NOT NULL,
    profession VARCHAR(225) NOT NULL,
    status VARCHAR(225) NOT NULL,
    organization VARCHAR(225) NOT NULL,
    soceities VARCHAR(1000) NOT NULL,
    created_date VARCHAR(225) NOT NULL,
    updated_date VARCHAR(225) NOT NULL
  )";

  try {
    $create = $conn->query($query);

    if ($create) {
      echo "Created";
    } else {
      echo "Not created";
    }
  } catch (\Exception $e) {
    echo $e->getMessage();
  }