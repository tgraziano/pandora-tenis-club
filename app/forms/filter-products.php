<?php
$category = $_GET['category'] ?? "";
$name = $_GET['name'] ?? "";
?>

<form id="form-products" action="/actions/filter-products.php" method="post" class="flex items-center justify-center gap-10 w-full">
    <div class="flex items-center justify-center gap-2 w-fit">
        <label class="cursor-pointer duration-200 transition-all shadow-[1px_1px_4px_rgba(0,0,0,0.4)] font-semibold rounded-full px-4 py-2">
            <input class="hidden" type="radio" name="category" value="" <?= $category == "" ? "checked" : "" ?> />
            <span>Todos</span>
        </label>
        <label class="cursor-pointer duration-200 transition-all shadow-[1px_1px_4px_rgba(0,0,0,0.4)] font-semibold rounded-full px-4 py-2">
            <input class="hidden" type="radio" name="category" value="RAQUETA" <?= $category == "RAQUETA" ? "checked" : "" ?> />
            <span>Raquetas</span>
        </label>
        <label class="cursor-pointer duration-200 transition-all shadow-[1px_1px_4px_rgba(0,0,0,0.4)] font-semibold rounded-full px-4 py-2">
            <input class="hidden" type="radio" name="category" value="ROPA" <?= $category == "ROPA" ? "checked" : "" ?> />
            <span>Ropa</span>
        </label>
        <label class="cursor-pointer duration-200 transition-all shadow-[1px_1px_4px_rgba(0,0,0,0.4)] font-semibold rounded-full px-4 py-2">
            <input class="hidden" type="radio" name="category" value="ACCESORIO" <?= $category == "ACCESORIO" ? "checked" : "" ?> />
            <span>Accesorios</span>
        </label>
    </div>
    <div class="flex items-center justify-center w-fit gap-2">
        <input type="text" name="name" value="<?= $name ?>" minlength="3" maxlength="25" placeholder="Ingrese un nombre" autocomplete="off" class="placeholder:text-gray-500 placeholder:font-medium outline outline-gray-800 focus:outline-2 focus:outline-black text-lg py-1.5 px-4 rounded-sm w-[250px]" />
        <button type="submit" class="bg-primary text-white cursor-pointer py-2 px-6 text-lg rounded-sm">Buscar</button>
    </div>
</form>

<script>
    const formProducts = document.querySelector("#form-products");
    const labels = formProducts.querySelectorAll("label");

    function resetStyles() {
        labels.forEach((label) => {
            label.classList.remove("bg-primary");
            label.classList.remove("text-white");
            label.removeAttribute("checked");
        });
    }

    function activeLabel(name) {
        labels.forEach((label) => {
            const input = label.querySelector("input");
            if (input.value === name) {
                label.classList.add("bg-primary");
                label.classList.add("text-white");
                input.setAttribute("checked", "checked");
            }
        });
    }

    labels.forEach((label) => {
        label.addEventListener("change", () => {
            resetStyles();
            activeLabel(label.querySelector("input").value);
        });
    });

    activeLabel("<?= $category ?>");
</script>