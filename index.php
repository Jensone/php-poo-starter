<?php

require_once 'Controller/Router.php'; // Charge le router

include 'Views/header.html.php'; // Inclut le header

$router = new Router();
include_once 'Views/pages' . $router->handleRequest() . '.html.php'; // Inclut la page correspondante


include 'Views/footer.html.php'; // Inclut le footer