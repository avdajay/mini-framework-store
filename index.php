<?php include 'helpers/functions.php'; ?>
<?php template('header.php'); ?>
<?php

use Aries\MiniFrameworkStore\Models\Product;

$products = new Product();

?>

<div class="container">
    
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="text-center">Welcome to the Online Store</h1>
            <p class="text-center">Your one-stop shop for all your needs!</p>
        </div>
    </div>
    <div class="row">
        <h2>Products</h2>
        <?php foreach($products->getAll() as $product): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo $product['image_path'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product['price'] ?></h6>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <a href="product.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">View Product</a>
                    <a href="cart.php?product-id=<?php echo $product['id'] ?>" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php template('footer.php'); ?>