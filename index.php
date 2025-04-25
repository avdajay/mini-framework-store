<?php include 'helpers/functions.php'; ?>
<?php template('header.php'); ?>

<div class="container">
    <div class="row align-items-center">
        <div class="col mt-5 mb-5">
            <h1 class="text-center">Welcome to the Online Store</h1>
            <p class="text-center">Your one-stop shop for all your needs!</p>
        </div>
    </div>
</div>

<div class="container">
    <h2>Products</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
            </div>
        </div> 
    </div>
</div>

<?php template('footer.php'); ?>