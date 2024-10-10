<?php

require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Bed.php';

$dogCategory = new Category("Cani");
$catCategory = new Category("Gatti");

$products = [
    new Food("Croccantini per Cani", 25.99, "https://m.media-amazon.com/images/I/81r7PLQ4msL._AC_UL320_.jpg", $dogCategory),
    new Toy("Palla da Masticare", 15.99, "https://m.media-amazon.com/images/I/71h10GjtEkL._AC_UL320_.jpg", $dogCategory),
    new Bed("Cuccia per Gatti", 45.50, "https://m.media-amazon.com/images/I/61d6+8n0swL._AC_UL320_.jpg", $catCategory),
    new Food("Croccantini per Gatti", 30.00, "https://m.media-amazon.com/images/I/81cq80M6IiS._AC_UL320_.jpg", $catCategory),
    new Toy("Topo Giocattolo", 10.50, "https://m.media-amazon.com/images/I/71QMUF1dc2L._AC_UL320_.jpg", $catCategory),
    new Bed("Letto Ortopedico per Cani", 60.00, "https://m.media-amazon.com/images/I/71UVgdOvzoL._AC_UL320_.jpg", $dogCategory),
    new Food("Biscotti per Cani", 12.50, "https://m.media-amazon.com/images/I/61tOv2MGy5L._AC_UL320_.jpg", $dogCategory),
    new Toy("Gioco a Corda per Cani", 9.99, "https://m.media-amazon.com/images/I/81YkR8ibc+L._AC_SY300_SX300_.jpg", $dogCategory),
    new Bed("Cuccia a Forma di Igloo", 39.99, "https://m.media-amazon.com/images/I/71mUp6byvxL._AC_UL320_.jpg", $catCategory),
    new Food("Snack al Tonno per Gatti", 7.99, "https://m.media-amazon.com/images/I/81PN68NZ0JL.__AC_SX300_SY300_QL70_ML2_.jpg", $catCategory),
    new Toy("Gioco con Piume per Gatti", 6.99, "https://m.media-amazon.com/images/I/61wTtaxstXL._AC_UL320_.jpg", $catCategory)
];