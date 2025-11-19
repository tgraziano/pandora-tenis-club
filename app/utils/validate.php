<?php
function sanitizeInput($input)
{
    return htmlspecialchars(trim(stripslashes($input)));
}
