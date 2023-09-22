<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Product Management</h2>
                <ul>
                    <li>
                        <form action="/save" method="post">
                            <label for="ProductName">Product Name:</label>
                            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                            <input type="text" class="form-control" name="ProductName"
                                placeholder="Enter Product Name"
                                value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                            <label for="ProductDescription">Description:</label>
                            <input type="text" class="form-control" name="ProductDescription"
                                placeholder="Enter Description"
                                value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
                            <label for="ProductCategory">Category:</label>
                            <select class="form-control" name="ProductCategory">
                                <option value="Clothes"
                                    <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Clothes') ? 'selected' : '' ?>>
                                    Clothes</option>
                                <option value="Food"
                                    <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Food') ? 'selected' : '' ?>>
                                    Food</option>
                                <option value="Drink"
                                    <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drink') ? 'selected' : '' ?>>
                                    Drink</option>
                                <option value="Jewelry"
                                    <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Jewelry') ? 'selected' : '' ?>>
                                    Jewelry</option>
                                <option value="Other"
                                    <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Other') ? 'selected' : '' ?>>
                                    Other</option>
                            </select>
                            <label for="ProductQuantity">Quantity:</label>
                            <input type="text" class="form-control" name="ProductQuantity"
                                placeholder="Enter Quantity"
                                value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                            <label for="ProductPrice">Price:</label>
                            <input type="text" class="form-control" name="ProductPrice" placeholder="Enter Price"
                                value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Product List</h2>
                <ul>
                    <?php foreach ($product as $pr): ?>
                        <li>
                            <strong>Product Name:</strong> <?= $pr['ProductName'] ?><br>
                            <strong>Description:</strong> <?= $pr['ProductDescription'] ?><br>
                            <strong>Category:</strong> <?= $pr['ProductCategory'] ?><br>
                            <strong>Quantity:</strong> <?= $pr['ProductQuantity'] ?><br>
                            <strong>Price:</strong> <?= $pr['ProductPrice'] ?><br>
                            <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
