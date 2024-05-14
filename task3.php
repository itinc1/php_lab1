<?php


$month = 8;

switch ($month) {
    case 2:
        echo "В феврале 28 дней.";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "В этом месяце 30 дней.";
        break;
    default:
        echo "В этом месяце 31 день.";
}

