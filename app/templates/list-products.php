<?php
require_once "utils/validate.php";
require_once "repositories/products.php";
require_once "utils/pricing.php";

$page = sanitizeInput($_GET['page'] ?? 1);
$name = sanitizeInput($_GET['name'] ?? "");
$category = sanitizeInput($_GET['category'] ?? "");

$productsRepository = new Products();
$response = $productsRepository->search($page, $name, $category);
$products   = $response["products"];
$totalPage  = $response["totalPages"];
?>

<div class="flex flex-col gap-6 w-full">
    <?php include "forms/filter-products.php" ?>
    <?php if (count($products) == 0) : ?>
        <div class="flex items-center justify-center py-8 w-full">
            <p class="text-4xl font-bold w-3/4 text-center text-pretty">No se encontraron productos, vuelva a intentarlo con otros filtros</p>
        </div>
    <?php else : ?>
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
                    <div class="flex items-center justify-between flex-wrap mt-auto w-full">
                        <p class="text-primary text-2xl font-bold w-fit">
                            $ <?= formatPrice($product['price']) ?>
                        </p>
                        <button type="button" class="bg-secondary cursor-pointer text-white font-semibold px-4 py-2 text-md rounded-md flex items-center gap-2 transition-all duration-200 will-change-transform hover:scale-105">
                            <img src="/app/assets/svgs/cart-add.svg" alt="Añadir Icono" width="24" height="24" loading="lazy" decoding="async" />
                            Añadir
                        </button>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    <div class="flex overflow-x-auto w-full">
        <?php if ($totalPage > 1) : ?>
            <ul class="flex gap-2 py-2 px-4 mx-auto w-fit">
                <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                    <li>
                        <a href="/app/?view=home.php&page=<?= $i ?><?= $name ? '&name=' . $name : '' ?><?= $category ? '&category=' . $category : '' ?>" class="flex items-center justify-center p-2 aspect-square h-10 rounded-md outline-2 outline-primary transition-all duration-200 will-change-transform <?= $i == $page ? 'bg-primary text-white' : 'bg-white text-primary hover:scale-105' ?>"><?= $i ?></a>
                    </li>
                <?php endfor ?>
            </ul>
        <?php endif ?>
    </div>
</div>