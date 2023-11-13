<?php
use classes\Connection;

    require_once __DIR__ ."/classes/User.php";

    $user = new User();

    $users = $user->selecionarTodos();

    require_once __DIR__ ."/resources/main.php";

