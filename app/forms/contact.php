<?php

$error = $_GET['error'] ?? null;
$msg = $_GET['msg'] ?? null;


$success = $msg == "true";
?>

<form class="bg-white rounded-lg shadow-[0_0_4px_rgba(0,0,0,0.4)] flex flex-col gap-4 py-[20px] px-[24px] w-full" action="/app/actions/contact.php" method="post">
    <p class="font-bold text-2xl">Envíanos un mensaje</p>
    <?php
    if ($error) {
    ?>
    <div id="message-alert" class="bg-red-700 border-4 border-red-950 rounded-md py-2 px-4 w-full">
        <p class="text-white font-medium text-lg"><?= $error ?></p>
    </div>
    <?php
    }
    ?>

    <?php
    if ($success) {
    ?>
    <div id="message-alert" class="bg-green-600 border-4 border-green-800 rounded-md py-2 px-4 w-full">
        <p class="text-white font-medium text-lg">El mensaje se envio correctamente</p>
    </div>
    <?php
    }
    ?>
    <div class="flex flex-col gap-2 w-full">
        <label for="name" class="regular text-lg">Nombre</label>
        <input id="name" value="Tomas" type="text" name="name" placeholder="Lionel Messi" required class="outline outline-gray-300 focus:outline-2 focus:outline-gray-950 rounded-sm py-2 px-4 placeholder:font-medium placeholder:text-gray-400">
    </div>
    <div class="flex flex-col gap-2 w-full">
        <label for="email" class="regular text-lg">Email</label>
        <input id="email" value="example@correo.com" type="email" name="email" placeholder="example@correo.com" required class="outline outline-gray-300 focus:outline-2 focus:outline-gray-950 rounded-sm py-2 px-4 placeholder:font-medium placeholder:text-gray-400">
    </div>
    <div class="flex flex-col gap-2 w-full">
        <label for="subject" class="regular text-lg">Asunto</label>
        <input id="subject" value="dasldasdsadasd" type="text" name="subject" placeholder="¿Por qué nos contacta?" required class="outline outline-gray-300 focus:outline-2 focus:outline-gray-950 rounded-sm py-2 px-4 placeholder:font-medium placeholder:text-gray-400">
    </div>
    <div class="flex flex-col gap-2 w-full">
        <label for="message" class="regular text-lg">Mensaje</label>
        <textarea id="message" name="message" placeholder="Describa su duda o problema" required class="outline outline-gray-300 focus:outline-2 focus:outline-gray-950 rounded-sm py-2 px-4 placeholder:font-medium placeholder:text-gray-400 min-h-24" style="resize: none;">
            AJDFlfasfasfas
        </textarea>
    </div>
    <button type="submit" class="bg-primary text-white font-semibold py-2 px-4 rounded-sm hover:scale-105 transition-transform duration-300 will-change-transform w-full">Enviar</button>
</form>


<script>
    const messageAlert = document.getElementById("message-alert");
    if (messageAlert) {
        setTimeout(() => {
            messageAlert.remove();
        }, 5000);
    }
</script>