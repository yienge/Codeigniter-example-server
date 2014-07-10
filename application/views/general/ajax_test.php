<?php
  $res = "Hello, ";

  if (!strcmp($_GET['gender'], "Male")) {
    $res .= "Mr. ";
  } else {
    $res .= "Miss ";
  }

  $res .= $_GET['name'];

  echo $_GET['callback']."({msg: '$res'});";
?>
