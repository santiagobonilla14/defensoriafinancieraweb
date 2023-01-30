<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];

  // Conexión a la base de datos
  $conn = new mysqli('localhost', 'root', 'root', 'defensoria');

  // Verificar conexión
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO users (username, email, telefono) VALUES ('$name', '$email', '$telefono')";

  if ($conn->query($sql) === TRUE) {
    echo "Datos enviados correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}





