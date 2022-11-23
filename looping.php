<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$words = ['one', 'two', 'three', 'four', 'five', 'six'];

echo $twig->render('words.html.twig', ['words'=> $words]);
