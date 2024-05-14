<?php

$side1 = 3;
$side2 = 4;
$side3 = 5;

if ($side1 == $side2 && $side2 == $side3) {
    echo "Треугольник со сторонами $side1, $side2, $side3 - это равносторонний треугольник.";
} elseif ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
    echo "Треугольник со сторонами $side1, $side2, $side3 - это равнобедренный треугольник.";
} else {
    echo "Треугольник со сторонами $side1, $side2, $side3 - это разносторонний треугольник.";
}

