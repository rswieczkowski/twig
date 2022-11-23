<?php

require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;



$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$words = ['sky', 'mountain', 'falcon', 'forest', 'rock', 'blue'];
$sentence = 'today is a windy day';

try {
    echo $twig->render('filters.html.twig', ['words' => $words, 'sentence' => $sentence]);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
}
