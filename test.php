<?php


use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);


$words = [
    'one',
    'two',
    'three',
    'four',
    'five',
    'six'
];

$words2 = ['', null, 'rock', '   ', 'forest'];

$name = 'John';
$age = 34;

$user = ['name' => 'John Doe', 'created_at' => '2011/09/27'];

$data = "''";

try {
//    echo $twig->render('set.html.twig', ['words' => $words]);
//    echo $twig->render('date.html.twig', ['user' => $user]);
//    echo $twig->render('autoescape.html.twig', ['data' => $data]);
//    echo $twig->render('tests.html.twig', ['words2' => $words2]);
//    echo $twig->render('derived.html.twig')
} catch (LoaderError|RuntimeError|SyntaxError $e) {
    echo $e->getMessage();
}
