<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="/toko_native/assets/style/main.css">
  </head>
  <body>
    <?php include($_SERVER["DOCUMENT_ROOT"]."/toko_native/assets/components/judul.php");
    // mesti tambah $_SERVER["DOCUMENT_ROOT"] biar bisa tau letak rootnya ?>
    <main>
      <h1>Selamat Datang di Toko Liong</h1>
      <h2>Silahkan klik yang di navigasi</h2>
    </main>
  </body>
</html>
