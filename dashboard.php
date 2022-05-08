<?php
include('classes/Product.php');
$product = new Product();
$product_result = $product->getAllProduct();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Category Create Page</title>


</head>

<body>
    <div class="container mt-2" style="background-color: gray;">
        <div class="row">
            <div class="col-md-4 mx-auto mt-4">
                <div class="card mx-auto">
                    <img src="images/user.png" style="width: 60%;" class="card-img-top mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Profile Info</h5>
                        <p class="card-text"><i class="fa-solid fa-user">&nbsp; Hlaing Moh Moh Shen</i></p>
                        <p class="card-text"><i class="fa-solid fa-user">&nbsp;Admin</i></p>
                        <p class="card-text"><i class="fa-solid fa-clock">&nbsp; Last Login Time </i></p>
                        <div class="p-1">
                            <a href="setting.php" class="card-button btn btn-success btn-sm"><i class="far fa-edit"> &nbsp;Setting</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4 ">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-info text-white">
                                <a href="manage_product.php" class="card-header" style="text-decoration:none;color:white;">Total Product <span class="badge badge-light ml-3"><?php echo $product_result->num_rows; ?></span> </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-primary text-white">
                                <a href="manage_order.php" class="card-header" style="text-decoration:none;color:white;">Total Order</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-danger text-white">
                                <a href="manage_stock.php" class="card-header" style="text-decoration:none;color:white;">Low Stock</a>
                            </div>
                            <div class="card mt-1">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>
                                <p class="card-text">Here you can manage your orders and add new orders.</p>
                                <a href="new_order.php"  class="card-btn btn btn-outline-success" name="add_product">Add</a>
                                <a href="manage_order.php" id="" class="card-btn btn btn-outline-primary">Manage</a>
                            </div>
                            </div>
                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Here you can manage your categories and add new categories.</p>
                    <a href="#" data-toggle="modal" data-target="#ModelCategory" class="card-btn btn btn-outline-success">Add</a>
                    <a href="manage_category.php" id="" class="card-btn btn btn-outline-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Brands</h5>
                    <p class="card-text">Here you can manage your brands and add new brands.</p>
                    <a href="#"data-toggle="modal" data-target="#brandModel" id="add_brand"class="card-btn btn btn-outline-success">Add</a>
                    <a href="#" id="" class="card-btn btn btn-outline-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Here you can manage your products and add new products.</p>
                    <a href="#" data-toggle="modal" data-target="#productModal" id="add_product" class="card-btn btn btn-outline-success"  data-whatever="@product">Add</a>
                    <a href="manage_product.php" id="manage_product" class="card-btn btn btn-outline-primary">Manage</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>

</html>

<?php
include_once('templates/product.php');
?>
<?php
include_once('templates/brand.php');
?>
<?php
include_once('templates/category.php');
?>
