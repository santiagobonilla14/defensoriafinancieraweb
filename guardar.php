
<?php
// Recuperar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "form_data";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Insertar datos en la base de datos
$sql = "INSERT INTO form_submissions (name, email, phone)
VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
  echo "Datos insertados correctamente.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
?>




