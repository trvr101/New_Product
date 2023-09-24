<?= $this->include('bootstrap/top') ?>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1><?= $item['ProductName'] ?></h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><strong>Product ID:</strong> <?= $item['ProductID'] ?></li>
                            <li><strong>Description:</strong> <?= $item['ProductDescription'] ?></li>
                            <li><strong>Category:</strong> <?= $item['ProductCategory'] ?></li>
                            <li><strong>Quantity:</strong> <?= $item['ProductQuantity'] ?></li>
                            <li><strong>Price:</strong> <?= $item['ProductPrice'] ?></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="/edit/<?= $item['ProductID'] ?>" class="btn btn-outline-dark">Edit</a>
                        <a href="/delete/<?= $item['ProductID'] ?>" class="btn btn-outline-dark">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>