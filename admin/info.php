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
    <link rel="shortcut icon" href="images/favicon.png"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require 'nav.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php require 'leftMenu.php' ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thêm Thông Tin Shop </h4>

                                <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Logo:</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="infor_logo" class="form-control file-upload-info"
                                                   placeholder="Bấm Tải Lên">
                                            <input type="hidden" name="infor_logo_Old" value="<?= $infor_logo; ?>">
                                            <img src="<?= $infor_logo; ?>" width="120" class="img-thumbnail">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Địa Chỉ Shop: </label>
                                        <input type="text" class="form-control" name="infor_address"
                                               value="<?= $infor_address; ?>" id="exampleInputName1"
                                               placeholder="Nhập Địa Chỉ Shop ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Email Shop: </label>
                                        <input type="text" class="form-control" name="infor_email" value="<?= $infor_email ?>" id="exampleInputName1" placeholder="Nhập Email Shop ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Số Điện Thoại Shop: </label>
                                        <input type="text" class="form-control" name="infor_phone"
                                               value="<?= $infor_phone ?>" id="exampleInputName2"
                                               placeholder="Nhập Số Điện Thoại Shop ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Hỗ Trợ Khách Hàng: </label>
                                        <input type="text" class="form-control" name="infor_suppost"
                                               value="<?= $infor_suppost ?>" id="exampleInputexampleInputName2"
                                               placeholder="Nhập Hỗ Trợ Khách Hàng ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName3">Bản Quyền Shop: </label>
                                        <input type="text" class="form-control" name="infor_copyright"
                                               value="<?= $infor_copyright ?>" id="exampleInputName3"
                                               placeholder="Nhập Bản Quyền ...">
                                    </div>

                                    <?php if ($info_update == true) { ?>
                                        <input type="submit" name="updateinfo" class="btn btn-success btn-block"
                                               value="Xác Nhận Cập Nhật">
                                    <?php } else { ?>
<!--                                        <input type="submit" name="addinfo" class="btn btn-primary btn-block"-->
<!--                                               value="Thêm">-->
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hãng</h4>

                                <div class="table-responsive">

                                    <?php $dataAllInfo= $db->readInfo();
                                    ?>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>

                                            <th>
                                               Logo
                                            </th>
                                            <th>
                                               Địa Chỉ
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Số Điện Thoại
                                            </th>
                                            <th>
                                               Hỗ Trợ Khách Hàng
                                            </th>
                                            <th>
                                              Infor Coppyright
                                            </th>
                                            <th>
                                                Thao Tác
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        foreach ($dataAllInfo as $rowInfo) {
                                            ?>

                                            <tr>
                                                <td class="py-1">
                                                    <img src="<?php echo $rowInfo['infor_logo'] ?>"
                                                         alt="image">
                                                </td>
                                                <td class="py-1">
                                                    <?php echo $rowInfo['infor_address'] ?>
                                                </td>
                                                <td class="py-1">
                                                    <?php echo $rowInfo['infor_email'] ?>
                                                </td>
                                                <td class="py-1">
                                                    <?php echo $rowInfo['infor_phone'] ?>
                                                </td>
                                                <td class="py-1">
                                                    <?php echo $rowInfo['infor_suppost'] ?>
                                                </td>
                                                <td class="py-1">
                                                    <?php echo $rowInfo['infor_copyright'] ?>
                                                </td>


                                                <td>
                                                    <a href="../action/action.php? deleteInfo=<?= $rowInfo['infor_id']; ?>"
                                                       class="badge badge-danger p-2"
                                                       onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
                                                    <a href="info.php?editInfo=<?= $rowInfo['infor_id']; ?>"
                                                       class="badge badge-success p-2">Sửa</a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                    <?php

                                    ?>

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

