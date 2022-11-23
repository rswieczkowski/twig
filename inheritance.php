<?php


use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

try {
    echo $twig->render('derived.html.twig');
} catch (LoaderError|RuntimeError|SyntaxError $e) {
    echo $e->getMessage();
}

