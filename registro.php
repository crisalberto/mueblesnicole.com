 <?php
$servername = "localhost";
$table = "consultas";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
if (mysqli_connect_errno()){

// Check connection
echo"fallo al conectar con la bbdd";

exit();
}

mysqli_select_db($conn, $table) or die ("No se encuentra la base de datos");

mysqli_set_charset($conn, "utf8");

$consulta = "insert into consulta_muebles (apellido, compañia, email, nombre, telefono) values ('martinez', 'casa', orla@gmail.com', 'cristhiam', '70049226')";

$resultados = mysqli_query($conn, $consulta);


mysqli_close($conn);


?> 