<?php
  $name = htmlspecialchars($_POST['name']);
  $mail  = htmlspecialchars($_POST['mail']);
  $msg  = htmlspecialchars($_POST['msg']);


  echo  $name, ' ';
  echo  $mail, ' ';
  echo  $msg, ' ';
?>