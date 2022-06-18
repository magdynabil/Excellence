<?php
session_start();
include_once("include/connect.php");
if (!isset($_SESSION["user_id"]))
{
    echo ' <div class="alert alert-warning" role="alert" style="padding-top:100px ">برجاء تسجيل الدخول  </div>';

    include_once("include/footer.php");
    echo '
<!--================ End footer Area  =================-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>';
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WaterBoat &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <?php include_once ('include/header.php')?>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-0 font-weight-bold ">اختبارات الصف الاول </h2>
                    <p>2020/2021</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">

    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php
                $posts=mysqli_query( $connect ,"SELECT * FROM add_test_data where `level`='1'");
                while($post=mysqli_fetch_assoc($posts)) {
                    echo '

                <div class="col-lg-4 mt-2" >
                    <div class="course-1-item" style="border: solid #0b0b0b 1px ; border-radius: 10px ">
                        <figure class="thumnail">
                          <img src="images/as.jpg" alt="Image" class="img-fluid" style="border-radius: 10px" >
                            <div class="category text-center" ><h3>'.$post['test_1_name'].'</h3></div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <h2>'.$post['test_1_content'].'</h2>
                            
                            <p class="desc mb-4">'.$post['test_1_time'].'</p>
                            <form method="get" action="test_1.php">
                            <input type="text" class=" col-lg-12 mb-4 form-control-lg" id="code" name="code"  placeholder="ادخل كود الامتحان  ">
                            <button name="id" id="id" class="col-lg-6 btn btn-primary   float-right mt-2" value="'.$post['test_1_number'].'">الدخول للاختبار </button>
                            </form>
                               <form method="get" action="view_last_answer_1.php">
                             <button name="id" id="id" class=" col-lg-6 btn btn-warning mt-2" value="'.$post['test_1_number'].'"> اجابتك السابقة</button>
                        </form>
                        </div>
                    </div>
                </div>';
                }?>











            </div>
        </div>
    </div>

<?php include_once ('include/footer.php')?>

    


</div>
<!-- .site-wrap -->

<!-- loader -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>