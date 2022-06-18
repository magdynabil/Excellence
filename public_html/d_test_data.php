<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once("include/connect.php");
$msg='';
$test_num='';
$q_num='';
if(isset($_POST['delete'])) {
    $l_num=$_POST['l_num'];
    $level=$_POST['level'];
    if (empty($l_num)) {
        $msg='<div class="alert alert-danger text-center" role="alert">برجاء ادخال رقم االاختبار  !</div>';
    }
    elseif (empty($level)) {
        $msg='<div class="alert alert-danger text-center" role="alert">برجاء ادخال رقم الفرقه الدراسيه  !</div>';
    }

    else{
        $delete_exam =mysqli_query($connect,"DELETE FROM `add_test_data` WHERE`level`='$level'AND`test_1_number`='$l_num' ");
        if (isset( $delete_exam)){
            $msg='<div class="alert alert-success" role="alert"> تم حذف الامتحان بنجاح </div>';
            echo'<meta http-equiv="refresh" content="1;\'d_video.php\'"/>';

        }

    }


}
?>
<!doctype html>
<html lang="en" class="first">
<head>
    <!-- Required meta tags -->
    <title>asaad sayed</title>
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
    <style>
        body{
            background: #eee;
        }
        span{
            font-size:15px;
        }
        .box{
            padding:60px 0px;
        }

        .box-part{
            background:#FFF;
            border-radius:0;
            padding:60px 10px;
            margin:30px 0px;
        }
        .text{
            margin:20px 0px;
        }

        .fa{
            color:#4183D7;
        }
    </style>
    <title>peter magdy</title>
</head>
<body class="text-center"  >

<?php
include_once("include/header.php");

?>
<div class="container mb-5 "style="padding-top: 400px ;padding-bottom: 140px ">
    <?php echo $msg ?>
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-8">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <input type="number" id="level" name="level" class="form-control" placeholder="الفرقه الدراسيه ">
                    </div>
                    <div class="col">
                        <input type="number" id="l_num" name="l_num" class="form-control" placeholder="رقم الاختبار  ">
                    </div>
                </div>
                <button type="delete" name="delete" id="delete" class="btn btn-danger mt-2">delete</button>

            </form>
        </div>
        <!--end of col-->
    </div>
</div>
<!--end regestration form-->
<?php
include_once("include/footer.php");
?>
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
</html>