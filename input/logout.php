<?php
session_start();
session_unset();
session_destroy();
header("Location: /toko_native/input/login.php");
exit();
