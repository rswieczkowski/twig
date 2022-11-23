<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

require_once __DIR__ . '/bootstrap.php';

$products = [
    [
        'name' => 'Notebook',
        'description' => 'Core i7',
        'value' => 800.00,
        'date_register' => '2017-06-22'
    ],
    [
        'name' => 'Mouse',
        'description' => 'Razer',
        'value' => 125.00,
        'date_register' => '2017-10-25'
    ],
    [
        'name' => 'Keyboard',
        'description' => 'Mechanical Keyboard',
        'value' => 250.00,
        'date_register' => '2017-06-23'
    ]
];

/** @var Environment $twig */
try {
//    echo $twig->render('products.html.twig', ['products' => $products]);
//    echo $twig->render('filters.html.twig', ['products' => $products]);
//    echo $twig->render('functions.html.twig', ['products' => $products]);
    echo $twig->render('controlStructure.html.twig', ['products' => $products]);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
}