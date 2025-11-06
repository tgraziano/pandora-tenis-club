<?php

$currentPath = [
    "/" => "Inicio",
    "/?view=reserva.php" => "Reserva",
    "/?view=nosotros.php" => "Nosotros",
    "/?view=contacto.php" => "Contacto"
];
$linkStyle = "font-semibold text-lg opacity-80 hover:opacity-100 transition-opacity px-2";
?>

<header class="flex items-center justify-between px-[190px] py-2.5 h-fit w-full">
    <a href="/" class="flex items-center gap-2 font-semibold text-primary text-xl">
        <img src="/assets/imgs/logo.png" loading="eager" decoding="sync" width="50" height="59" alt="Pandora Logo">
        Club Pandora
    </a>
    <nav id="header-nav" class="flex items-center gap-4 text-black">
        <?php foreach ($currentPath as $path => $name) { ?>
            <a href="<?= $path ?>" class="<?= $linkStyle ?>"><?= $name ?></a>
        <?php } ?>
    </nav>
</header>

<script>
    const links = document.querySelectorAll('#header-nav a');
    links.forEach(link => {
        const path = link.getAttribute("href");
        if (path === window.location.pathname) {
            link.classList.add("text-primary");
            link.classList.add("opacity-100");
            link.classList.add("border-b-4");
            link.classList.add("border-primary");
        }
    });
</script>