<?php
session_start();
if($_SERVER["REQUEST_METHOD"]  == "POST"){
  $con = new mysqli("localhost", "root", "", "toko_native");
  $error = false;
  if(preg_match("/^[a-zA-Z ]*$/",$_POST["nama"])){
    $sql = "insert into barang(id, nama, jumlah, harga, input) values(?,?,?,?,?)";
    $ps = $con->prepare($sql);  // prepare statement
    $ps->bind_param("ssiis", $_POST["id"],$_POST["nama"],$_POST["jumlah"],$_POST["harga"],$_SESSION["user"]);  // ps.set... di PHP
    // s itu String, i itu integer (https://www.w3schools.com/php/php_mysql_prepared_statements.asp)
    $ps->execute() || $error = true;  // biar bisa nampilin error
    if($error){$info = "ID sudah digunakan\nHarap gunakan ID yang lain";}
    else{$info = "Input Berhasil!";}
    echo("<script>alert(\"$info\")</script>");
    echo("<a href=\"/toko_native/input/input.php\">Kembali</a>");
  }else{
    $info = "Terjadi kesalahan";
    echo("<script>alert(\"$info\")</script>");
    echo("<a href=\"/toko_native/input/input.php\">Kembali</a>");
  }
}
