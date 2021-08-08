<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-5 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
<!--                     /footer logo-->
<!---->
<!--                    <p>A-SHOP Chuyên Bán Điện Thoại Di Động Rẻ Nhất. Phục Vụ 24/7</p>-->
                     footer social
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
<!--            <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                <div class="footer">-->
<!--                    <h3 class="footer-header">Tài Khoản</h3>-->
<!--                    <ul class="list-links">-->
<!--                        <li><a href="#">Tài Khoản Của Tôi</a></li>-->
<!--                        <li><a href="#">Thanh Toán</a></li>-->
<!--                        <li><a href="#">Đăng Nhập</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>


            <!-- footer subscribe -->
            <?php $dataAllInfo = $db->readInfo();
            ?>


            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">Liên Hệ</h3>
                    <ul class="header-top-links">
                        <?php
                        foreach ($dataAllInfo as $rowInfo) {
                            ?>
                            <p>
                            <li><a href="#"><i class="fa fa-phone"></i> <?= $rowInfo['infor_phone'] ?></a></li></p>
                            <p>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> <?= $rowInfo['infor_email'] ?></a></li></p>
                            <p>
                            <li><a href="#"><i class="fa fa-map-marker"></i> <?= $rowInfo['infor_address'] ?></a>
                            </li></p>
                            <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
            <!-- footer widget -->
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">  Hỗ Trợ  Thư Email Tư Vấn Miễn Phí</h3>
                   <?php
                    foreach ($dataAllInfo as $rowInfo) {?>
                        <ul class="list-links">
                            <li><a href="./sendmail/contact.php"><?=  $rowInfo['infor_suppost'] ?></a></li>
                        </ul>
                    <?php
                    }
                   ?>


                </div>
            </div>
            <!-- /footer widget -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    <h5 style="color: red;">Coppyright - Trần Mạnh Hùng - PH13160</h5>
                    <?php foreach ($dataAllInfo as $rowInfo) { ?>
                    <p style="font-size:12px;"> <?= $rowInfo ['infor_copyright'] ?></p>
                    <?php }
                    ?>
                </div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>