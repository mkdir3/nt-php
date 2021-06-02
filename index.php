<?php
require_once("includes/config.php");

// If not registered, redirect
if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}
