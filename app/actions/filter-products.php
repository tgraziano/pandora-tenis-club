<?php
require_once "../utils/validate.php";

$category = sanitizeInput($_POST['category'] ?? "");
$name = sanitizeInput($_POST['name'] ?? "");

$searchParams = "?view=home.php&page=1";

if ($category) {
    $searchParams .= "&category=$category";
}
if ($name) {
    $searchParams .= "&name=$name";
}

header("Location: /app$searchParams");

exit();
