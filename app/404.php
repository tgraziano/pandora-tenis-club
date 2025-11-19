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
  <link rel="icon" type="image/svg+xml" href="/app/favicon.svg">
  <link rel="stylesheet" href="/app/assets/fonts/poppins/stylesheet.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="/app/assets/global.css">
</head>

<body class="bg-gray-100 font-poppins flex flex-col min-h-screen w-full">
  <?php include 'templates/header.php'; ?>
  <main class="flex flex-col items-center justify-center flex-1 px-[20px] md:px-[40px] lg:px-[190px] py-14 h-full w-full">
    <section class="bg-white shadow-[0_0_4px_rgba(0,0,0,0.4)] rounded-lg flex flex-col items-center gap-4 py-4 px-6 max-w-[500px] w-full">
      <img src="/app/assets/imgs/sticker.png" class="rounded-lg object-contain" width="150" height="150" alt="Tenis Sticker" />
      <h1 class="font-bold text-2xl text-center break-words">¡UPS! ¿Estás perdido?</h1>
      <p class="font-regular text-gray-600 text-lg w-3/4 text-center text-pretty">
        No pudimos encontrar la página solicitada
      </p>
      <a href="/app/" class="bg-primary font-semibold text-xl rounded-md px-6 py-2 text-white hover:scale-105 transition-transform duration-300 cursor-pointer">
        Volver al inicio
      </a>
    </section>
  </main>
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