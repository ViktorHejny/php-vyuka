<?php

declare(strict_types=1);

/*
==================================================
    PROCVIČOVÁNÍ PHP – LEKCE 3 (pokročilejší)
    Matematika
==================================================
*/

$a = 10;
$b = 8;
$c = 6;

echo "a = {$a} cm <br>";
echo "b = {$b} cm <br>";
echo "c = {$c} cm <br>";

echo "<br>";

// kontrola, zda lze trojúhelník sestrojit
if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
    echo "Trojúhelník nelze sestrojit.";
    exit;
}

// typ podle stran
if ($a == $b && $b == $c) {
    echo "Trojúhelník je rovnostranný.<br>";
} elseif ($a == $b || $a == $c || $b == $c) {
    echo "Trojúhelník je rovnoramenný.<br>";
} else {
    echo "Trojúhelník je obecný.<br>";
}

echo "<br><br>";

// obvod
$perimeter = $a + $b + $c;
echo "Obvod je: {$perimeter} cm <br>";

// Heronův vzorec
$s = $perimeter / 2;
$content = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

echo "Obsah je: " . round($content, 2) . " cm² <br>";

echo "<br>";

// typ podle úhlů
echo "Typ podle úhlů: " . getTriangleAngleType($a, $b, $c) . "<br>";

// výška na stranu a
$heightA = getHeightToA($a, $content);
echo "Výška na stranu a: " . round($heightA, 2) . " cm <br>";

echo "<br>";

// úhly
$angles = getAngles($a, $b, $c);
echo "Úhel α: {$angles['alpha']}° <br>";
echo "Úhel β: {$angles['beta']}° <br>";
echo "Úhel γ: {$angles['gamma']}° <br>";

echo "<br>";

// nejkratší a nejdelší strana
$minMax = getMinMaxSide($a, $b, $c);
echo "Nejkratší strana: {$minMax['min']} cm <br>";
echo "Nejdelší strana: {$minMax['max']} cm <br>";



/*
====================================================
FUNKCE
====================================================
*/

function getTriangleAngleType(float $a, float $b, float $c): string
{
    $sides = [$a, $b, $c];
    sort($sides);

    $a = $sides[0];
    $b = $sides[1];
    $c = $sides[2];

    $left = $c * $c;
    $right = $a * $a + $b * $b;

    if (abs($left - $right) < 0.00001) {
        return "pravoúhlý";
    } elseif ($left < $right) {
        return "ostroúhlý";
    } else {
        return "tupoúhlý";
    }
}


function getHeightToA(float $a, float $content): float
{
    return (2 * $content) / $a;
}


function getAngles(float $a, float $b, float $c): array
{
    $alpha = rad2deg(acos(($b*$b + $c*$c - $a*$a) / (2*$b*$c)));
    $beta  = rad2deg(acos(($a*$a + $c*$c - $b*$b) / (2*$a*$c)));
    $gamma = rad2deg(acos(($a*$a + $b*$b - $c*$c) / (2*$a*$b)));

    return [
        'alpha' => round($alpha, 2),
        'beta' => round($beta, 2),
        'gamma' => round($gamma, 2)
    ];
}


function getMinMaxSide(float $a, float $b, float $c): array
{
    $sides = [$a, $b, $c];

    return [
        'min' => min($sides),
        'max' => max($sides)
    ];
}