<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>  
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kape Zebra</title>
    <!-- Favicon-->
    <link rel="icon" href="includes/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="includes/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="includes/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="includes/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="includes/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Export Css -->
    <link href="includes/plugins/jquery-datatable/extensions/export/buttons.dataTables.min.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="includes/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="includes/css/themes/all-themes.css" rel="stylesheet" />

   
</head>

<body class="theme-blue">
    <?php include ("nav.php");   ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Ingredient Inventory
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                                <a href="create.php" class="btn btn-primary float-right">Add New item</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <?php
                                include_once 'db.php';
                                $result = mysqli_query($conn,"SELECT * FROM ingredient_inventory");
                                ?>

                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>                       
                                    <th>Item ID</th>
        <th>Item Qty</th>
        <th>Item Price</th>
        <th>Item Name</th>
       
    </tr>
                                    </tr>
                                </thead>

                                <tfoot>
                                        <tr>
                                        <th>Item ID</th>
        <th>Item Qty</th>
        <th>Item Price</th>
        <th>Item Name</th>
                                            </tr>
                                </tfoot>

                                <tbody>
                                        <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["Item_ID"]; ?></td>
                                            <td><?php echo $row["Item_qty"]; ?></td>
                                            <td><?php echo $row["Item_price"]; ?></td>
                                            <td><?php echo $row["Item_name"]; ?></td>
                                            <td>
                                                <a href="view.php?id=<?php echo $row["Item_ID"]; ?>" class="btn btn-primary" title='View Record'>View</a>
                                                <a href="update.php?id=<?php echo $row["Item_ID"]; ?>" class="btn btn-success" title='Update Record'>Update</a>
                                                <a href="delete.php?id=<?php echo $row["Item_ID"]; ?>" class="btn btn-danger" title='Delete Record'>Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                                    </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <!-- Exportable Students DataTable -->
     <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        <div class="header">
                            <h2>
                            Order
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                                <a href="order_create.php" class="btn btn-primary float-right">Add New Order</a>
                            </ul>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                            <div class="table-responsive">
                                <?php
                                include_once 'db.php';
                                $result = mysqli_query($conn,"SELECT * FROM `order`");
                                ?>

                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                    <th>Order details</th>
        <th>Item ID</th>
        <th>Cashier ID</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                <th>Order ID</th>
                                    <th>Order details</th>
        <th>Item ID</th>
        <th>Cashier ID</th>

                                            </tr>
                                </tfoot>

                                <tbody>
                                        <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["Order_ID"]; ?></td>
                                            <td><?php echo $row["Order_details"]; ?></td>
                                            <td><?php echo $row["Item_ID"]; ?></td>
                                            <td><?php echo $row["Cashier_ID"]; ?></td>
                                            <td>
                                                <a href="order_view.php?id=<?php echo $row["Order_ID"]; ?>" class="btn btn-primary" title='View Record'>View</a>
                                                <a href="order_update.php?id=<?php echo $row["Order_ID"]; ?>" class="btn btn-success" title='Update Record'>Update</a>
                                                <a href="order_delete.php?id=<?php echo $row["Order_ID"]; ?>" class="btn btn-danger" title='Delete Record'>Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                                    </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Jquery Core Js -->
<script src="includes/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="includes/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="includes/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="includes/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="includes/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
    <!-- Jquery DataTable Plugin Js -->
    <script src="includes/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="includes/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="includes/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="includes/js/admin.js"></script>
<script src="includes/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="includes/js/demo.js"></script>
</body>

</html>
