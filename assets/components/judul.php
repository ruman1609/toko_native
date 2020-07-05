<?php
  echo("
  <style>
    nav{
      background-color: blue;
      color: white;
    }
    nav h1{
      padding-top: 20px;
      padding-left: 10px;
    }
    nav ol{
      text-align: right;
      padding: 0 0 10px 0;
    }
    nav a li{
      text-decoration: none;
      color: #D3D3D3;
      margin-right: 25px;
      display: inline;
    }
  </style>
  <nav>
    <h1>TOKO LIONG</h1>
    <ol>
      <a href=\"/toko_native/index.php\"><li>Beranda</li></a>
      <a href=\"/toko_native/input/input.php\"><li>Input Barang</li></a>
      <a href=\"/toko_native/pesan/pesan.php\"><li>Terima Pesanan</li></a>
    </ol>
  </nav>"
  );
