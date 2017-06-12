<?php

session_start();
$connect = mysqli_connect("localhost","root","luisponce123","login2");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT NOMBRE_USUARIO FROM usuarios WHERE (NOMBRE_USUARIO='$user' OR TIPO='$user') AND PASS='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["user"] = $user;
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>