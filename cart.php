<?php
session_start();
$cart = $_SESSION['cart'] ?? new Cart();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
</head>

<body>
    <h1>Carrello</h1>
    <ul>
        <?php foreach ($cart->getItems() as $item): ?>
        <li>
            <?php echo $item['product']->getTitle(); ?> - Quantità: <?php echo $item['quantity']; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <p>Totale: €<?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></p>
</body>

</html>