<?php
require_once "repositories/products.php";
require_once "utils/pricing.php";

$productsRepository = new Products();
$products = $productsRepository->getAll();
?>

<ul class="flex flex-wrap gap-4 justify-center w-full">
    <?php foreach ($products as $product) : ?>
        <li class="bg-white shadow-[0px_0px_8px_rgba(0,0,0,0.5)] flex flex-col p-4 gap-4 h-auto rounded-md w-[340px]">
            <div class="bg-gray-100 rounded-lg w-full">
                <img src="<?= $product['cover'] ?>" class="object-contain w-[364px] h-[220px]" height="220" width="364" loading="lazy" decoding="async" alt="<?= $product['name'] ?>" />
            </div>
            <p class="font-medium text-pretty text-2xl w-full"><?= $product['name'] ?></p>
            <p class="font-regular text-base w-full">
                <?= $product['description'] ?>
            </p>
            <div class="flex items-center justify-between mt-auto w-full">
                <p class="text-primary text-2xl font-bold w-fit">
                    $ <?= formatPrice($product['price']) ?>
                </p>
                <button type="button" class="bg-secondary text-white font-semibold px-4 py-2 text-md rounded-md flex items-center gap-2">
                    <img src="/assets/svgs/cart-add.svg" alt="Añadir Icono" width="24" height="24" loading="lazy" decoding="async" />
                    Añadir
                </button>
            </div>
        </li>
    <?php endforeach ?>
</ul>