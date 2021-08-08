<?php
require '../action/action.php';
?>

<?php if (isset($_SESSION['loged']) && isset($_SESSION['admin'])) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Majestic Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <style>
            p.font-italic.mb-0 {
                padding: 10px 0;
                font-size:15px;
                color: green;
            }
        </style>
    </head>
    <body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require 'nav.php'?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php require 'leftMenu.php'?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper"><div class="col-md-6 offset-3">

                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm Sản Phẩm </h4>
                                    <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Trạng Thái Sản Phẩm: </label>
                                            <select class="form-control" name="order_orderStatus" id="exampleSelectGender">
                                                <option value="0">Đang Chờ Duyệt</option>
                                                <option value="1">Đã Duyệt</option>
                                            </select>
                                            <div class="form-group">
                                                <input type="submit" name="updateOrderById" class="btn btn-danger btn-block"
                                                       value="Thêm">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php require 'footer.php' ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->
    </body>
    <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

    <script type="text/javascript">
        CKEDITOR.replace('product_detail', {
                width: "1165px",
                height: "300px"
            }
        );</script>
    <script type="text/javascript">
        CKEDITOR.replace('product_describe', {
                width: "1165px",
                height: "200px"
            }
        );</script>
    </html>

<?php } else {
    header("Location: ../client");
}    ?>

