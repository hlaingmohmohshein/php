<?php


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>新しい注文を作成する。</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">ご注文お願いします。</h5>
                    </div>
                    <form id="">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3" align="right">Order Date</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm" readonly value="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Customer Name*</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="card mt-2 shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <p class="font-weight-bold">Make A Order List</p>

                                    <table class="table " id="childTable">
                                        <thead class="">
                                            <tr>
                                                <th>#.</th>
                                                <th>Item Name</th>
                                                <th>Total Quantity</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="item_invoice">

                                            <!-- <tr>
                                                <td scope="row">1</td>
                                                <td >
                                                <input type="text" name="school" class="form-control" />

                                                </td>
                                                <td>
                                                    <input type="text" name="school" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" name="year" class="form-control" />
                                                </td>
                                                <td class="col-sm-2">
                                                    <input type="text" name="age" class="form-control" />
                                                </td>
                                            </tr> -->

                                        </tbody>
                                    </table>
                                    <center>
                                        <input type="button" style="width: 150px;" class="btn btn-success" id="addrow" onclick="childrenRow()" value="+ADD" />
                                        <input type="button" style="width: 150px;" class="btn  btn-danger" id="removerow" onclick="childrenRow()" value="-Remove" />
                                    </center>
                                </div>

                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Sub Total*</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">GST(18%)*</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Discount</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Net Total</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Paid</label>
                                <div class="col-sm-6">
                                    <input type="text"   class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Due</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="col-sm-3" align="right">Paymethod</label>
                                <div class="col-sm-6">
                                    <select type="text" class="form-control form-control-sm">
                                        <option value="">Choose Payment</option>
                                        <option value="card">Card </option>
                                        <option value="cash">Cash </option>
                                        <option value="draft">Draft </option>
                                        <option value="cheque">cheque </option>
                                    </select>
                                </div>
                            </div>
                            <center class="mt-2">
                                <input type="submit" value="Order" class="btn btn-success">
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="js/order.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>