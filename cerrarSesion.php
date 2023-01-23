<?php

session_start();

function killSession(){
  session_unset();
  session_destroy();
  ?>
  <script>
    window.location.href="index.php";
  </script><?php
}

if (isset($_GET['logout'])) {
  killSession();
  }
?>