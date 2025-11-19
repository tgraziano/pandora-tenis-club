<?php
require_once "../repositories/messages.php";
require_once "../utils/validate.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$fieldIsMissing = !isset($name) || !isset($email) || !isset($subject) || !isset($message);

if ($fieldIsMissing) {
  header("Location: /app/?view=contacto.php&error=Todos los campos son obligatorios");
  exit();
}

if (strlen($name) < 3 || strlen($name) > 50) {
  header("Location: /app/?view=contacto.php&error=El nombre debe tener al menos 3 caracteres y menos de 50");
  exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: /app/?view=contacto.php&error=El email debe ser válido");
  exit();
}

if (strlen($email) > 255) {
  header("Location: /app/?view=contacto.php&error=El email debe tener menos de 255 caracteres");
  exit();
}

if (strlen($subject) < 3 || strlen($subject) > 15) {
  header("Location: /app/?view=contacto.php&error=El asunto debe tener al menos 3 caracteres y menos de 15");
  exit();
}

if (strlen($message) < 3 || strlen($message) > 120) {
  header("Location: /app/?view=contacto.php&error=El mensaje debe tener al menos 3 caracteres y menos de 120");
  exit();
}

$messagesRepository = new Messages();
try {
  $messagesRepository->insertOne(sanitizeInput($name), sanitizeInput($email), sanitizeInput($subject), sanitizeInput($message));
  header("Location: /app/?view=contacto.php&msg=true");
} catch (Exception $e) {
  header("Location: /app/?view=contacto.php&error=No pudimos enviar el mensaje, vuelva a intentarlo más tarde");
}

exit();
