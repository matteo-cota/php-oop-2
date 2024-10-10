<?php
spl_autoload_register(function ($class) {
    require_once __DIR__ . "/classes/$class.php";
});
require_once 'data/products.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'Cibo':
        $productsToShow = array_filter($products, function ($product) {
            return $product instanceof Food;
        });
        break;
    case 'Giochi':
        $productsToShow = array_filter($products, function ($product) {
            return $product instanceof Toy;
        });
        break;
    case 'Cuccia':
        $productsToShow = array_filter($products, function ($product) {
            return $product instanceof Bed;
        });
        break;
    default:
        $productsToShow = $products;
        break;
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Shop Online per Animali</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#">Shop Animali</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $page == 'home' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php echo $page == 'Cibo' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?page=Cibo">Cibo</a>
                </li>
                <li class="nav-item <?php echo $page == 'Giochi' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?page=Giochi">Giochi</a>
                </li>
                <li class="nav-item <?php echo $page == 'Cuccia' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?page=Cuccia">Cuccia</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Prodotti Disponibili</h1>
        <div class="row">
            <?php foreach ($productsToShow as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="<?php echo $product->getImage(); ?>" class="card-img-top"
                        alt="<?php echo $product->getTitle(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getTitle(); ?></h5>
                        <p class="card-text">Prezzo: €<?php echo number_format($product->getPrice(), 2, ',', '.'); ?>
                        </p>
                        <p class="card-text">Categoria: <?php echo $product->getCategory()->getName(); ?></p>
                        <p class="card-text">Tipo: <?php echo get_class($product); ?></p>
                        <a href="#" class="btn btn-primary">Aggiungi al Carrello</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-center bg-primary py-4">
        <p>&copy; 2024 Shop Animali. Tutti i diritti riservati.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>