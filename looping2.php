<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$users = [
    ['name' => 'John Doe', 'active' => true],
    ['name' => 'Tymon Świeczkowski', 'active' => false],
    ['name' => 'Rafal Świeczkowski', 'active' => true],
    ['name' => 'Aga Świeczkowska', 'active' => true],
    ['name' => 'Teo Świeczkowski', 'active' => false],
];


try {
    echo $twig->render('users.html.twig', ['users' => $users]);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
}
