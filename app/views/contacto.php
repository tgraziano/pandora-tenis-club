<main class="flex flex-col flex-1 px-[190px] gap-12 py-14 h-full w-full">
  <div class="flex flex-col gap-2">
    <h1 class="font-black text-4xl text-center w-full">Ponte en Contacto</h1>
    <p class="text-gray-600 text-xl font-regular text-pretty text-center w-full">Estamos aquí para ayudarte. Rellena el formulario o utiliza nuestros datos de contacto</p>
  </div>
  <section class="flex justify-between h-full gap-4">
    <article class="flex h-full w-full max-w-[500px]">
      <?php include 'forms/contact.php'; ?>
    </article>
    <article class="flex flex-col gap-4 h-full">
      <div class="bg-white rounded-lg shadow-[0_0_4px_rgba(0,0,0,0.4)] flex flex-col gap-4 py-[20px] px-[24px]">
        <p class="text-2xl font-bold">Información de Contacto</p>
        <ul class="flex flex-col gap-4">
          <li class="flex items-center gap-2">
            <img src="/app/assets/svgs/whatsapp.svg" class="w-[22px] h-[22px]" loading="eager" decoding="sync" width="22" height="22" alt="Whatsapp Icon" />
            + 54 11 7777 7777
          </li>
          <li class="flex items-center gap-2">
            <img src="/app/assets/svgs/phone.svg" class="w-[30px] h-[30px]" loading="eager" decoding="sync" width="30" height="30" alt="Phone Icon" />
            + 54 11 7777 7777
          </li>
          <li class="flex items-center gap-2">
            <img src="/app/assets/svgs/location.svg" class="w-[24px] h-[24px]" loading="eager" decoding="sync" width="24" height="24" alt="Location Icon" />
            Calle Falsa 1234, Provincia
          </li>
          <li class="flex items-center gap-2">
            <img src="/app/assets/svgs/correo.svg" class="w-[24px] h-[24px]" loading="eager" decoding="sync" width="24" height="24" alt="Location Icon" />
            contacto@pandora.com
          </li>
        </ul>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34072.81311845898!2d-58.49984899976976!3d-34.59868916566126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7495c12317d%3A0x8cea287955f0596b!2sPepe!5e0!3m2!1ses!2sar!4v1763254245033!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </article>
  </section>
</main>