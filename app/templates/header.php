<?php
$currentPath = [
    "/app/?view=home.php" => "Inicio",
    "/app/?view=reserva.php" => "Reserva",
    "/app/?view=nosotros.php" => "Nosotros",
    "/app/?view=contacto.php" => "Contacto"
];
$linkStyle = "font-semibold text-lg opacity-80 hover:opacity-100 transition-opacity px-2";
?>

<header class="bg-white shadow-sm hidden items-center justify-between md:flex px-[20px] md:px-[40px] lg:px-[190px] py-2.5 h-fit w-full">
    <a href="/app" class="flex items-center gap-2 font-semibold text-primary text-xl">
        <img src="/app/assets/imgs/logo.png" loading="eager" decoding="sync" width="50" height="59" alt="Pandora Logo">
        Club Pandora
    </a>
    <nav id="header-nav" class="flex items-center gap-4 text-black">
        <?php foreach ($currentPath as $path => $name) { ?>
            <a href="<?= $path ?>" class="<?= $linkStyle ?>"><?= $name ?></a>
        <?php } ?>
    </nav>
</header>

<div class="fixed md:hidden top-0 left-0 z-10 h-screen w-screen">
    <button type="button" name="btn-menu" class="bg-white rounded-xl fixed top-4 left-4 p-1 shadow-[2px_2px_4px_rgba(0,0,0,.4)]">
        <img src="/app/assets/svgs/menu.svg" width="30" height="30" alt="Menu">
    </button>
    <aside id="menu-aside" class="sticky flex flex-col top-0 left-0 h-full w-full bg-white shadow-2xl translate-x-[-100%] transition-transform duration-300">
        <div class="p-4 w-full">
            <button type="button" name="btn-close-menu" class="bg-white rounded-xl p-1 shadow-[2px_2px_4px_rgba(0,0,0,.4)]">
                <img src="/app/assets/svgs/close.svg" width="30" height="30" alt="Close">
            </button>
        </div>
        <div class="flex justify-center w-full">
            <a href="/app" class="flex items-center gap-2 font-semibold text-primary text-xl">
                <img src="/app/assets/imgs/logo.png" loading="eager" decoding="sync" width="50" height="59" alt="Pandora Logo">
                Club Pandora
            </a>
        </div>
            
        <nav id="header-nav-mobile" class="flex flex-col items-center justify-evenly gap-4 text-black h-full">
            <?php foreach ($currentPath as $path => $name) { ?>
                <a href="<?= $path ?>" class="<?= $linkStyle ?>"><?= $name ?></a>
            <?php } ?>
        </nav>
    </aside>
</div>


<script>
    const searchParams = new URLSearchParams(window.location.search);
    const view = searchParams.get("view") ?? "home.php";
    /* Nav Links Desktop */
    const links = document.querySelectorAll('#header-nav a');

    links.forEach(link => {
        const path = link.getAttribute("href");
        if (path.includes(view) || path.includes("home.php") && !view.length) {
            link.classList.add("text-primary");
            link.classList.add("opacity-100");
            link.classList.add("border-b-4");
            link.classList.add("border-primary");
        }
    });

    /* Nav Links Mobile */
    const linksMobile = document.querySelectorAll('#header-nav-mobile a');
    
    linksMobile.forEach(link => {
        const path = link.getAttribute("href");
        if (path.includes(view) || path.includes("home.php") && !view.length) {
            link.classList.add("text-primary");
            link.classList.add("opacity-100");
        }
    });




    /* Menu Mobile */
    const btnMenu = document.querySelector("button[name='btn-menu']");
    const btnCloseMenu = document.querySelector("button[name='btn-close-menu']");
    const menuAside = document.querySelector("#menu-aside");

    btnMenu.addEventListener("click", () => {
        menuAside.classList.remove("translate-x-[-100%]");
        menuAside.classList.add("translate-x-0");
    });

    btnCloseMenu.addEventListener("click", () => {
        menuAside.classList.remove("translate-x-0");
        menuAside.classList.add("translate-x-[-100%]");
    });
</script>