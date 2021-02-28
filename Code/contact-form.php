<?php
if (isset($_POST['submit'])) {
    $message_sent= True;
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
    $c= 1;
    $mailto = "roadtocnc@gmail.com";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt);
    header("Location: contact.php?message_sent=".$message_sent);
}
