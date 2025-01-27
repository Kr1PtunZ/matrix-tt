<?php

require 'Matrix.php';

try {
    $matrix1 = new Matrix([
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]);

    $matrix2 = new Matrix([
        [9, 8, 7],
        [6, 5, 4],
        [3, 2, 1]
    ]);


    $resultSubtract = $matrix1->subtract($matrix2);
    echo "Вычитание матриц:\n";
    echo $resultSubtract;

    $resultAdd = $matrix1->add($matrix2);
    echo "Сложение матриц:\n";
    echo $resultAdd;

} catch (InvalidArgumentException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}