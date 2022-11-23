<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

try {
    echo $twig->render('first.html.twig', ['name' => 'John Doe', 'occupation' => 'gardener']);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
}