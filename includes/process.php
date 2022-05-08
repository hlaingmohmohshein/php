<?php
$filename = realpath(dirname(__FILE__));

include_once($filename . '/../classes/Product.php');
include_once($filename . '/../classes/Category.php');
include_once($filename . '/../classes/Brand.php');

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    $product = new Product();
    // $query="DELETE FROM `product` WHERE pId=$delete_id";
    $result = $product->delete($delete_id);
    echo $result;
    exit();
}

if (isset($_POST['category_name'])) {
    $category = new Category();
    $result = $category->addCategory($_POST['category_name']);
    echo  $result;
    exit();
}

if (isset($_POST['getPriceAndQty']) && isset($_POST['id'])) {
    $product = new Product();
    $product_detail = $product->getSelectProduct($_POST['id']);

    echo json_encode($product_detail);
}

if (isset($_POST['date']) && isset($_POST['product_name'])) {
    $product = new Product();
    $product_name = $_POST['product_name'];
    $date = $_POST['date'];
    $select_brand = $_POST['select_brand'];
    $select_category = $_POST['select_category'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $status = 1;
    $result = $product->insert($select_category, $select_brand, $product_name, $product_price, $quantity, $date, $status);
    echo $result;
    exit();
}

if (isset($_POST['getBrand'])) {
    $brand = new Brand();
    $resource = $brand->selectAllBrands();
    while ($row = mysqli_fetch_assoc($resource)) {
        echo "<option value='" . $row['bId'] . "'>" . $row['brand_name'] . "</option>";
    }
}
if (isset($_POST['getCategory'])) {
    $getCategory = new Category();
    $resource = $getCategory->getAllCategory();
    while ($row = mysqli_fetch_assoc($resource)) {
        echo "<option value='" . $row['cId'] . "'>" . $row['category_name'] . "</option>";
    }
}
if (isset($_POST['getItemName'])) {

    $product = new Product();
    $result = $product->getAllProduct();
?>
    <tr>
        <td class="number"></td>
        <td>
            <select class="form-control form-control-sm item_option">
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <option name="pId" value="<?php echo $row['pId']; ?>"><?php echo $row['product_name']; ?></option>
                <?php
                }
                ?>
            </select>
        </td>

        <td><input type="text" readonly class="form-control form-control-sm total_quantity" id="total_quantity" name="total_quantity"></td>
        <td><input type="text" class="form-control form-control-sm quantity" id="quantity" name="quantity"></td>
        <td><input type="text" readonly class="form-control form-control-sm price" id="price" name="price"></td>
        <td><span class="total_price">$ <span></td>
    </tr>
<?php
}
?>