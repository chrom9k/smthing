<?php
  require_once 'config.php';
  echo dirname(__FILE__);
  include HEADER;

  $p = 'Another side';
  include 'index.phtml';
  
  include FOOTER;
?>
