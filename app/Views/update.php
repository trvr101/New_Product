<?= $this->include('bootstrap/top') ?>

<body>
    <div class="container mt-4">
        <h1>Update Item</h1>
        <form action="/update_save" method="post">

            <div class="form-group">
                <label for="ProductName">Name</label>
                <input type="text" required id="ProductName" name="ProductName" class="form-control" value="<?= $item['ProductName'] ?>">
            </div>

            <div class="form-group">
                <label for="ProductDescription">Description</label>
                <textarea required id="ProductDescription" name="ProductDescription" class="form-control" rows="5"><?= $item['ProductDescription'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="ProductCategory">Category</label>
                <select class="form-control" id="ProductCategory" name="ProductCategory" required>
                    <option value="" disabled>Select a category</option>
                    <?php foreach ($user_categ as $category) : ?>
                        <option value="<?= $category['ProductCategory'] ?>" <?= ($category['ProductCategory'] == $item['ProductCategory']) ? 'selected' : '' ?>>
                            <?= $category['ProductCategory'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ProductQuantity">Quantity</label>
                <input type="number" required id="ProductQuantity" name="ProductQuantity" class="form-control" value="<?= $item['ProductQuantity'] ?>">
            </div>

            <div class="form-group">
                <label for="ProductPrice">Price</label>
                <input type="number" required id="ProductPrice" name="ProductPrice" class="form-control" value="<?= $item['ProductPrice'] ?>">
            </div>

            <input type="hidden" name="ProductID" value="<?= $item['ProductID'] ?>">

            <button type="submit" class="btn btn-outline-light px-3">Update</button>

        </form>
    </div>
</body>