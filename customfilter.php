<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;




$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$twig->addFilter(new TwigFilter('accFirst', 'accFirst'));

$sentence = 'šumivé víno';



try {
    echo $twig->render('customfilter.html.twig',
        ['sentence' => $sentence]);
} catch (LoaderError|RuntimeError|SyntaxError $e) {
}

function accFirst($value, $encoding = 'UTF8' ): string
{
    $strlen = mb_strlen($value, $encoding);
    $firstChar = mb_substr($value, 0, 1, $encoding);
    $rest = mb_substr($value, 1, $strlen - 1, $encoding);

    return mb_strtoupper($firstChar, $encoding) . $rest;
}