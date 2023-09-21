<?= $this->include('bootstrap/top') ?>




<body class="my-3">
    <a href="/add" class="btn btn-outline-light">Add item</a>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Categories
    </button>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <h3 class="dropdown-header">Categories</h3><br>
        <?php foreach ($user_categ as $categ) : ?>
        <a href="/prod/<?= urlencode($categ['ProductCategory']) ?>"
            class="dropdown-item"><?= $categ['ProductCategory'] ?></a><br>
        <?php endforeach; ?>
    </div>

    <h1 class="my-3">Recently Inserted Products</h1>
    <ul class="list-group">
        <?php foreach ($user_prod as $prod) : ?>
        <li class="list-group-item col-6">
            <a href="/item/<?= $prod['ProductID'] ?>"><?= $prod['ProductName'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>