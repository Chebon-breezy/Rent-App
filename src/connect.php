<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "property";

$conn = mysqli_connect($servername,$username,$password,$database) or die("Unable to connect with database ".mysqli_connect_error());
echo $conn->error;

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous">

