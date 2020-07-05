<?php session_start();
  function decrypt($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if(count($_SESSION) == 0 && $_SERVER["REQUEST_METHOD"]!="POST"){
    header("Location: /toko_native/input/login.php");
    exit();
  }
  elseif($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["user"] = $user = decrypt($_POST["user"]);
    $_SESSION["pass"] = $pass = decrypt($_POST["pass"]);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Pesanan</title>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="/toko_native/assets/style/main.css">
    <link rel="stylesheet" href="/toko_native/assets/style/input.css">
  </head>
  <body>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/toko_native/assets/components/judul.php");?>
    <main>
      <aside>
        <h5>AKUN</h5>
        <h1><?php echo($_SESSION["user"]) ?></h1>
        <a href="/toko_native/input/logout.php">Log Out</a>
      </aside>
      <div class="content parent">
        <div class="input child">
          <h1>Input Barang</h1>
          <form action="/toko_native/input/proses.php" method="post">
            <input type="text" pattern="\d*" name="id" placeholder="Id (angka saja)" maxlength="8" required> <br>
            <input type="text" name="nama" placeholder="Nama" required maxlength="45"> <br>
            <input type="text" pattern="\d*" name="harga" placeholder="Harga" required maxlength="8"> <br>
            <input type="text" pattern="\d*" name="jumlah" placeholder="Jumlah" required maxlength="8"> <br>
            <input type="submit" value="INPUT">
          </form>
        </div>
        <div class="show child">
          <h1>List Barang</h1>
          <table>
            <?php
            $con = new mysqli("localhost", "root", "", "toko_native");
            $sql = "select * from barang";
            $ps = $con->prepare($sql);
            $ps->execute();
            $rs = $ps->get_result();
            if($rs->num_rows > 0){
              echo("
              <tr>
                <th>ID</th>
                <th class=\"namaBarang\">NAMA</th>
                <th>HARGA</th>
                <th class=\"jumlahBarang\">JUMLAH</th>
              </tr>
              ");
              while($h = $rs->fetch_assoc()){
                echo("
                <tr>
                  <td>".$h["id"]."</td>
                  <td class=\"namaBarang\">".$h["nama"]."</td>
                  <td>Rp. ".$h["harga"]."</td>
                  <td class=\"jumlahBarang\">".$h["jumlah"]." pcs</td>
                </tr>
                ");
              }
            }else{echo("Tidak ada yang bisa ditampilkan");}
            ?>
          </table>
        </div>
      </div>
    </main>
  </body>
</html>
