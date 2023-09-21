<?= $this->include('bootstrap/top') ?>

<body>

    <div class="container mt-4">
        <h1>Insert Item</h1>
        <form action="/save" method="post">

            <div class="form-group">
                <label for="ProductName">Name</label>
                <input type="text" required id="ProductName" name="ProductName" class="form-control">
            </div>

            <div class="form-group">
                <label for="ProductDescription">Description</label>
                <textarea required id="ProductDescription" name="ProductDescription" class="form-control"
                    rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="ProductCategory">Category</label>
                <select class="form-control" id="ProductCategory" name="ProductCategory" required>
                    <option value="" selected disabled>Select a category</option>
                    <?php foreach ($user_categ as $category) : ?>
                    <option value="<?= $category['ProductCategory'] ?>"><?= $category['ProductCategory'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ProductQuantity">Quantity</label>
                <input type="number" required id="ProductQuantity" name="ProductQuantity" class="form-control">
            </div>

            <div class="form-group">
                <label for="ProductPrice">Price</label>
                <input type="number" required id="ProductPrice" name="ProductPrice" class="form-control">
            </div>

            <button type="submit" class="btn btn-outline-light px-3">Save</button>

        </form>
    </div>
</body>