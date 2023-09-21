<?= $this->include('bootstrap/top') ?>

<head>
    <!-- Add Bootstrap CSS (make sure to use the dark mode version if available) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-dark.min.css" rel="stylesheet">
    <!-- Add your custom dark mode CSS -->
    <style>
    body {
        background-color: #333;
        color: #fff;
    }

    .dropdown-menu {
        background-color: #444;
    }

    .dropdown-menu a {
        color: #fff;
    }

    .dropdown-header {
        color: #ccc;
    }

    .my-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }
    </style>
</head>

<body class="my-3">

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

    <h1 class=" my-3"></h1>
    <ul>

    </ul>
</body>