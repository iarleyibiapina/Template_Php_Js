<?php
session_start();

// pegando até raiz do projeto
require '../app/constants/constants.php';

$controller = require '../app/functions/controllers.php';
$controller();

var_dump(BASE);
