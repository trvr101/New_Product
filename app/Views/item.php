<?= $this->include('bootstrap/top') ?>

<body>
    <h1><?= $item['ProductName'] ?><br></h1>
    <ul>
        <li><?= $item['ProductID'] ?><br></li>
        <li><?= $item['ProductDescription'] ?><br></li>
        <li><?= $item['ProductCategory'] ?><br></li>
        <li><?= $item['ProductQuantity'] ?><br></li>
        <li><?= $item['ProductPrice'] ?><br></li>
        <a href="/update/<?= $item['ProductID'] ?>" class="btn btn-outline-light ">Edit</a>
        <a href="/delete/<?= $item['ProductID'] ?>" class="btn btn-outline-light">Delete</a>
    </ul>
</body>