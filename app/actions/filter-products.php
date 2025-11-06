<?php

$category = $_POST['category'] ?? "";
$name = $_POST['name'] ?? "";

$searchParams = "?view=home.php&page=1";
if ($category) {
    $searchParams .= "&category=$category";
}
if ($name) {
    $searchParams .= "&name=$name";
}
header("Location: /$searchParams");
exit();
