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
                color: green;
                padding:10px 0;
                font
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
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thông Tin  Khách Hàng </h4>
                                    <?php $rowUser = $db->getUserById($_SESSION['user_id']) ?>
                                    <div class="table-responsive">
                                        <div class="px-4 py-3">
                                            <h5 class="text-center">Thông Tin</h5>
                                            <div class="p-4 rounded shadow-sm bg-light">
                                                <p class="font-italic mb-0">Tên Người Mua:<strong style="color: black"><?= $rowUser ['user_name']?></strong> </p>
                                                <p class="font-italic mb-0">Phone:<strong style="color: black"><?= $rowUser ['user_phone']?> </p>
                                                <p class="font-italic mb-0">Địa Chỉ:<strong style="color: black"><?= $rowUser ['user_address']?> </p>
                                                <p class="font-italic mb-0">Email:<strong style="color: black"><?= $rowUser ['user_email']?> </p>
                                            </div>
                                    </div>
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
    <script>
        $(document).ready(function () {

            $('.table').dataTable({});
        });
    </script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
    </body>

    </html>
<?php } else {
    header("Location: ../client");
}    ?>

