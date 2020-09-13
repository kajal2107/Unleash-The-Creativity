<?php
session_start();
session_destroy();
header("location:zeel_index.php");
?>