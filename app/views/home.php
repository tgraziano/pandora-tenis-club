<main class="flex flex-col h-full w-full">
    <section class="bg-[url('/assets/imgs/background.png')] relative w-full aspect-[1900/600] bg-cover bg-center">
        <div class="absolute inset-0 bg-black/50"></div>
        <article class="flex flex-col gap-4 h-full w-full justify-center items-center relative px-[190px]">
            <h1 class="text-4xl text-white font-black text-shadow-[2px_2px_4px_#000000]">Bienvenidos a Club Pandora</h1>
            <p class="text-2xl text-center text-white text-shadow-[2px_2px_2px_#000000]">
                Tu lugar para disfrutar del tenis y pádel al <br /> máximo nivel.
            </p>
        </article>
    </section>

    <section class="flex flex-wrap justify-center gap-8 px-[190px] py-4 h-fit w-full">
        <div class="bg-white flex flex-col items-center gap-2 shadow-[4px_4px_25px_rgba(0,0,0,0.5)] rounded-xl py-4 px-6 w-64 h-64">
            <img src="/assets/svgs/cancha.svg" class="w-[60px] h-[60px]" alt="Cancha de tenis" width="60" height="60" loading="lazy" decoding="async" />
            <p class="text-primary font-semibold text-xl text-center">Nuestras canchas</p>
            <p class="font-regular text-sm text-center text-pretty">
                Disponemos de canchas de tenis de arcilla y cemento para tenis, además de canchas de pádel de cristal. Todas mantenidas a la perfección.
            </p>
        </div>

        <div class="bg-white flex flex-col items-center gap-2 shadow-[4px_4px_25px_rgba(0,0,0,0.5)] rounded-xl py-4 px-6 w-64 h-64">
            <img src="/assets/svgs/store.svg" class="w-[60px] h-[60px]" alt="Cancha de tenis" width="60" height="60" loading="lazy" decoding="async" />
            <p class="text-primary font-semibold text-xl text-center">Tienda deportiva</p>
            <p class="font-regular text-sm text-center text-pretty">
                Encuentra todo lo que necesitas para tu juego: raquetas, palas, ropa, calzado y accesorios de las
                mejores marcas.
            </p>
        </div>

        <div class="bg-white flex flex-col items-center gap-2 shadow-[4px_4px_25px_rgba(0,0,0,0.5)] rounded-xl py-4 px-6 w-64 h-64">
            <img src="/assets/svgs/reserva.svg" class="w-[60px] h-[60px]" alt="Cancha de tenis" width="60" height="60" loading="lazy" decoding="async" />
            <p class="text-primary font-semibold text-xl text-center">Reservas online</p>
            <p class="font-regular text-sm text-center text-pretty">
                Reserva tu cancha de forma rápida y sencilla a través de nuestro sistema online. Disponible 24/7.
            </p>
        </div>
    </section>

    <section id="store-products" class="flex flex-col gap-4 px-[190px] py-4 h-fit w-full">
        <div class="flex flex-col items-center gap-3.5 py-[24px]">
            <h2 class="font-bold text-4xl">Nuestra tienda</h2>
            <p class="font-medium text-xl text-pretty text-gray-700">Equípate con lo mejor para triunfar en la cancha.</p>
        </div>
        <?php include 'templates/list-products.php'; ?>
    </section>
</main>

<script>
    if (window.location.search.includes("page")) {
        document.getElementById("store-products").scrollIntoView();
    }
</script>