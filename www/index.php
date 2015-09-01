<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case "home":
        include "templates/home.inc.php";
        break;
    case "checkout":
        include "templates/checkout.inc.php";
        break;
}