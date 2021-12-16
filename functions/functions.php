<?php
session_start();
ob_start();

function redirect($location) {
    return header("Location: $location");
    exit();
}
?>