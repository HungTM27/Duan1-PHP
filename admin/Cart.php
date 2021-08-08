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
                        <div class="clo-md-6">

                        <div class="table-responsive">
                          <div class="row py-12 px-4">
                    </div>
                </div>
                          </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách Đơn Hàng</h4>

                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                   UserOrder
                                                </th>

                                                <th>
                                                    Giá Sản Phẩm
                                                </th>

                                                <th>
                                                    Số Lượng
                                                </th>
                                                <th>
                                                    Màu Sắc
                                                </th>
                                                <th>
                                                    Dung Lượng
                                                </th>
                                                <th>
                                                   Ngày Mua Hàng
                                                </th>
                                                <th>
                                                    Trạng Thái
                                                </th>
                                                <th>
                                                    Thao Tác
                                                </th>
                                            </tr>
                                            </thead>
                                            <?php
                                            $i =1;
                                            $oder = $db->readOrder();
                                            foreach ($oder as $rowOder){
                                                ?>
                                            <tbody>
                                                    <td class="py-1">
                                                        <?= $i++ ?>
                                                    </td>

                                                    <td class="py-1">
                                                        <?= $rowOder['user_id'] ?>
                                                    </td>

                                                    <td class="py-1">
                                                        <?= number_format($rowOder['order_totalProduct']) ?>
                                                    </td>
                                                    <td class="py-1">
                                                        <?= $rowOder['order_qtyProduct'] ?>
                                                    </td>
                                                    <td class="py-1">
                                                        <?= $rowOder['order_colorProduct_name'] ?>
                                                    </td>

                                                    <td class="py-1">
                                                        <?= $rowOder['order_memoryProduct_name'] ?>
                                                    </td>
                                                    <td class="py-1">
                                                        <?= $rowOder['dateBuy'] ?>
                                                    </td>
                                                    <td class="py-1" bgcolor="#adff2f">
                                                        <?= ($rowOder['order_orderStatus'] == 0) ? 'Đang Chờ Duyệt' : 'Đã Duyệt' ?>
                                                    </td>
                                                    <td>
                                                        <a href="../admin/cartUserDetails.php?detailCart=<?= $rowOder['user_id']; ?>"
                                                           class="badge badge-success p-2">Chi Tiết</a>
                                                        <a href="../admin/cartDetails.php?detailCart=<?= $rowOder['order_id']; ?>"
                                                           class="badge badge-primary p-2">Duyệt</a>
                                                        <a href="../action/action.php?deleteOrderById=<?= $rowOder['order_id']; ?>"
                                                           class="badge badge-danger p-2"
                                                           onclick="return confirm('Bạn Có Muốn Xóa Không?');">Hủy</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                            <?php  }
                                            ?>
                                        </table>


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
