<?= $this->include('bootstrap/top') ?>

<body class="my-3">

    <body class="my-3">
        <h1 class=" my-3">Category : <?= $category ?></h1>
        <ul class="list-group">
            <?php foreach ($products as $item) : ?>
                <li class="list-group-item">
                    <h5><a href="/item/<?= $item['ProductID'] ?>"><?= $item['ProductName'] ?></a></h5>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</body>