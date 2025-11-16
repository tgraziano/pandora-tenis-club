<?php
require_once "../repositories/messages.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$messagesRepository = new Messages();
try {
  $messagesRepository->insertOne($name, $email, $subject, $message);
  header("Location: /app/?view=contacto.php&msg=true");
  exit();
} catch (Exception $e) {
  echo $e->getMessage();
  header("Location: /app/?view=contacto.php&error=Hubo un error");
  exit();
}

?>