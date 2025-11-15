<?php
$view = $_GET['view'] ?? 'home.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Pandora</title>
  <meta name="description" content="Club Pandora">
  <meta name="keywords" content="tenis, club, pandora, padel, argentina, buenos aires, caba, ciudad autonoma de buenos aires, club de tenis, club de padel, club de tenis caba, club de padel caba">
  <meta name="author" content="Tomas Graziano, Juan Cruz">
  <meta name="robots" content="index, follow">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="stylesheet" href="/assets/fonts/poppins/stylesheet.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="/assets/global.css">
</head>

<body class="bg-gray-100 font-poppins flex flex-col min-h-screen w-full">
  <?php include 'templates/header.php'; ?>
  <?php include 'views/' . $view; ?>
  <?php include 'templates/footer.php'; ?>
  <style type="text/tailwindcss">
    @theme {
      --font-poppins: "Poppins", sans-serif;
      --color-primary: #1173d4;
      --color-secondary: #006400;
    }
  </style>
</body>

</html>