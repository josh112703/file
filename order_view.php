<?php
// Include database connection file
require_once "db.php";

    $result = mysqli_query($conn,"SELECT * FROM `order` WHERE Order_ID='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  
?>
 
 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Examples | Bootstrap Based Admin Template - Material Design</title>
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

    <!-- Sweet Alert Css -->
    <link href="includes/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="includes/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="includes/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <?php include("nav.php");   ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>FORM EXAMPLES</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                VIEW ORDER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                            <label for="Order_ID">Order ID</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php
echo $row["Order_ID"];
?>                                    </div>
                                </div>
                                <label for="Order_details">Order details</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php
echo $row["Order_details"];
?>                                    </div>
                                </div>
                                <label for="Item_ID">Item ID</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php
echo $row["Item_ID"];
?>                                    </div>
                                </div>
                                <label for="Cashier_ID">Cashier ID</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php
echo $row["Cashier_ID"];
?>                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $row["Item_ID"]; ?>" />
                                <a href="index.php" class="btn btn-danger m-t-15 waves-effect">back</a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
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

    <!-- Custom Js -->
    <script src="includes/js/admin.js"></script>

</body>

</html>






