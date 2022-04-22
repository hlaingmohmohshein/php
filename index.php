<?php

use Databases\DB;

require_once "DB.php";
$db = new DB();
$connection = $db->openConnection();
$resource =$db->select();
if (isset($_POST['import'])) {
    $fileName = $_FILES['csv']['tmp_name'];
    if (($open = fopen($fileName, "r")) !== FALSE) {

        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $userId = $data[0];
            $userName = $data[1];
            $password = $data[2];
            $firstName = $data[3];
            $lastName = $data[4];
            $sql = "Insert Into import_csv(userId,userName,password,firstName,lastName) values('$userId','$userName','$password','$firstName','$lastName')";
            $connection->query($sql);
        }

        fclose($open);
    }
}

?>


<!DOCTYPE html>
<html>
<title>

</title>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .card-header {
            background-color: beige;            
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
        <form method="POST" enctype="multipart/form-data" action="">
            <input type="file" value="CSV" accept=".csv" name="csv">
            <input type="submit" value="import" name="import">
        </form>
        </div>
        
        <div class="card-body">
            <table class="table">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">UserName</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                echo "<pre>";
                $i=1;
                if($resource->num_rows>0){
                    while($row= $resource->fetch_assoc()){
                ?>
                <tr>
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['userName']?></td>
                        <td><?php echo $row['firstName']?></td>
                        <td><?php echo $row['lastName']?></td>
                    </tr>
                <?php     
                $i++; 
                    }
                }
                ?>
                    

                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>

</html>