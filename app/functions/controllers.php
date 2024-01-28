<?php

// para trabalhar com 'rotas' / usnado como base INC na url
$inc = $_GET['inc'] ?? 'home';
// ?inc='rota'

// dessa forma retorna uma função, logo no controller executa como função
return  match ($inc) {
    'home' => function () {
        var_dump('home');
    },
    'contact' => function () {
        var_dump('contact');
    },
    default => function () {
        var_dump('pagina inexistente');
    },
};
