<?php
  require_once 'config.php';
  echo HEADER;
  include HEADER;

  $p = 'Hello from the other side';
  include 'index.phtml';
  
  include FOOTER;
?>
