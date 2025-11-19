<?php

$error = $_GET['error'] ?? null;
$msg = $_GET['msg'] ?? null;


$success = $msg == "true";

$fecha = new DateTime();

$formatter = new IntlDateFormatter(
    'es_AR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'America/Argentina/Buenos_Aires',
    IntlDateFormatter::GREGORIAN,
    "EEEE, d 'de' MMMM yyyy"
);

$hours = ["09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00"];

$groundTenis = [
    "1" => "Cancha 1",
    "2" => "Cancha 2",
];

$groundPadel = [
    "3" => "Cancha 3",
    "4" => "Cancha 4",
];
?>


<form action="/app/actions/booking.php" method="POST" class="bg-white rounded-lg shadow-[0_0_4px_rgba(0,0,0,0.4)] flex flex-col gap-6 py-[20px] px-[24px] w-full">
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
            <p class="text-white font-medium text-lg">Su reserva se realizo correctamente</p>
        </div>
    <?php
    }
    ?>
    <p class="font-bold text-2xl">Deportes</p>
    <div class="bg-gray-200 rounded-sm w-full p-1 flex select-none">
        <label name="label-tennis" class="bg-primary cursor-pointer text-white rounded-sm py-2 px-6 w-1/2">
            <input class="hidden" type="radio" name="sport" value="TENNIS" checked required>
            <span class="font-medium text-xl">Tenis</span>
        </label>
        <label name="label-padel" class="bg-transparent cursor-pointer text-gray-800 rounded-sm py-2 px-6 w-1/2">
            <input class="hidden" type="radio" name="sport" value="PADEL" required>
            <span class="font-medium text-xl">Pádel</span>
        </label>
    </div>
    <p class="font-bold text-2xl">Horarios disponibles</p>
    <div class="gap-2 flex flex-col w-full">
        <p class="font-medium text-xl text-gray-500 w-full"><?php echo $formatter->format($fecha); ?></p>
        <ul class="flex flex-wrap gap-3 w-full">
            <?php foreach ($hours as $index => $hour) : ?>
                <li class="select-none">
                    <label name="label-hour" class="<?php echo $index == 0 ? 'bg-primary/20 text-primary outline-primary' : 'bg-white outline-gray-500 text-black'; ?> outline-3 font-medium px-4 py-2 flex items-center justify-center rounded-sm cursor-pointer transition-all duration-150 w-18">
                        <input class="hidden" type="radio" name="hour" value="<?php echo $hour; ?>" <?php echo $index == 0 ? 'checked' : ''; ?> required>
                        <span><?php echo $hour; ?></span>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="flex flex-col gap-3 w-full">
        <p class="font-bold text-2xl">Canchas</p>
        <div class="relative w-full">
            <select class="outline outline-gray-900 rounded-xs px-4 font-medium py-3 w-full" name="ground" required>
                <option value="" disabled selected>Seleccione una cancha</option>
                <?php foreach ($groundTenis as $index => $ground) : ?>
                    <option value="<?php echo $index; ?>"><?php echo $ground; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <button type="submit" class="bg-primary text-xl text-white text-center font-medium px-6 py-2 rounded-md w-full uppercase hover:scale-[102%] transition-transform duration-300 cursor-pointer">Reservar</button>
</form>

<script>
    const messageAlert = document.getElementById("message-alert");
    let interval = null;

    const clearMessage = () => {
        if (interval) {
            clearInterval(interval);
        }
        interval = setInterval(() => {
            messageAlert.remove();
        }, 5000);
    }

    if (messageAlert) clearMessage();

    const ground = document.querySelector('select[name="ground"]');
    // Labels Sports
    const sports = document.querySelectorAll('input[name="sport"]');

    const resetLabels = () => {
        const labels = [document.querySelector('label[name="label-tennis"]'), document.querySelector('label[name="label-padel"]')];
        labels.forEach(label => {
            label.classList.remove('bg-primary');
            label.classList.remove('text-white');
            label.classList.add('bg-transparent');
            label.classList.add('text-gray-800');
        });
    }

    sports.forEach(sport => {
        sport.addEventListener('change', () => {
            resetLabels();
            sport.parentNode.classList.remove('bg-transparent');
            sport.parentNode.classList.remove('text-gray-800');
            sport.parentNode.classList.add('bg-primary');
            sport.parentNode.classList.add('text-white');
            ground.innerHTML = '';
            ground.innerHTML += `<option value="" disabled selected>Seleccione una cancha</option>`;
            if (sport.value == 'TENNIS') {
                <?php foreach ($groundTenis as $index => $ground) : ?>
                    ground.innerHTML += `<option value="<?php echo $index; ?>"><?php echo $ground; ?></option>`;
                <?php endforeach; ?>
            } else {
                <?php foreach ($groundPadel as $index => $ground) : ?>
                    ground.innerHTML += `<option value="<?php echo $index; ?>"><?php echo $ground; ?></option>`;
                <?php endforeach; ?>
            }
        });
    });

    // Labels Hours
    const hours = document.querySelectorAll('input[name="hour"]');

    const resetHours = () => {
        const labels = document.querySelectorAll('label[name="label-hour"]');
        labels.forEach(label => {
            label.classList.remove('bg-primary/20');
            label.classList.remove('text-primary');
            label.classList.remove('outline-primary');
            label.classList.add('bg-white');
            label.classList.add('text-black');
            label.classList.add('outline-gray-500');
        });
    }

    hours.forEach(hour => {
        hour.addEventListener('change', () => {
            resetHours();
            hour.parentNode.classList.remove('bg-white');
            hour.parentNode.classList.remove('text-black');
            hour.parentNode.classList.remove('outline-gray-500');
            hour.parentNode.classList.add('bg-primary/20');
            hour.parentNode.classList.add('text-primary');
            hour.parentNode.classList.add('outline-primary');
        });
    });
</script>