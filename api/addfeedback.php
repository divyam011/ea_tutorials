<?php

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "ddsingh011@gmail/.....";
    $header = "From: ".$mailFrom;
    $txt = "you have recived an e-mail from ".$name."\n\n".$message;

    mail($mailTo, $subject,$txt,$header);
    header("Location: index.php?mailSend");
  }
?>
