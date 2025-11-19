<?php
$sport = $_POST['sport'];
$hour = $_POST['hour'];
$ground = $_POST['ground'];

try {
    header("Location: /app/?view=booking.php&msg=true");
} catch (Exception $e) {
    header("Location: /app/?view=booking.php&error=No pudimos reservar la cancha, vuelva a intentarlo más tarde");
}
exit();
