<?php
// $filename=realpath(dirname(__FILE__));
// include_once($filename.'\..\classes\Product.php');
include_once('classes/Category.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
$category = new Category();
$resource = $category->getAllCategory();
// echo "<pre>";
// if ($resource->num_rows > 0) {
//     while ($row = mysqli_fetch_assoc($resource)) {

//         echo $row['status'];
//     }
// }
// print_r($resource);
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>製品管理</title>
    <!-- DataTables CSS library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Users List</h2>
                    </div>
                    <table id="usersListTable" class="display table-striped " style="width:100%; border:1px;">
                        <thead>
                            <tr>
                                <th class="bg-info">SL#</th>
                                <th class="bg-info">Category Name</th>
                                <th class="bg-info">Status</th>
                                <th class="bg-info">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($resource->num_rows > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($resource)) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['category_name']; ?></td>
                                        <td><?php if($row['status'] == 1) 
                                        { ?>
                                        <span class="badge badge-pill badge-success">Available</span>
                                        <?php }else{ ?>
                                        <span class="badge badge-pill badge-danger">Danger</span>
</td>
                                        <td><?php }  ?></td>
                                        <td>
                                            <a did=<?php echo $row['catId']; ?> class="btn btn-sm  btn-outline-danger" href="#">Delete</a>
                                            <a class="btn btn-sm btn-outline-primary" href="">Update</a>
                                        </td>

                                    </tr>

                            <?php

                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="bg-info">CL#</th>
                                <th class="bg-info">Category Name</th>
                                <th class="bg-info">Status</th>
                                <th class="bg-info">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#usersListTable').DataTable();
        /* For Delete Button*/
        $('.btn-outline-danger').click(function() {
            var id = $(this).attr('did');
        var x = confirm("Are you sure you want to delete?");
        if (x)
            $.ajax({
                url: "includes/process.php",
                type: "POST",
                data:{delete_id:id},
                cache: false,
                success: function(response) {
                    location.reload();
                },
                error: function() {
                    alert("error");
                }
            });
        });
    });
</script>

</html>