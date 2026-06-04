<?php

$pdo = new PDO('mysql:host=localhost;dbname=shop', 'root', '');

$stmt = $pdo->___(
    'SELECT * FROM products WHERE price > :min_price ORDER BY price ___'
);

$stmt->___(___: 50, type: PDO::PARAM_INT);
$stmt->execute();

$products = $stmt->___(PDO::FETCH_ASSOC);

foreach ($products as $product) {
    echo $product['name'] . ': $' . $product['price'] . PHP_EOL;
}
