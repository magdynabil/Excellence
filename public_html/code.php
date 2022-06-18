<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once("include/connect.php");
$msg='';
$status='disable';
$code_status='active';
if(isset($_POST['add_code'])) {
    for ( $i=1; $i<=100; $i++){
        $rundom_1=random(14);
        $user_name_check=mysqli_query($connect,"SELECT * FROM `code` WHERE `codee`='$rundom_1'");
        if (mysqli_num_rows($user_name_check) > 0){
            continue;
        }
        else{
            $insert="INSERT INTO `code`( `codee`, `code_status`) VALUES ('$rundom_1','$code_status')";
            $insert_code=mysqli_query($connect,$insert);
            echo'<meta http-equiv="refresh" content="2;\'code.php\'"/>';
        }

    }
    $msg='<div class="alert alert-success" role="alert"> تم اضافة الكود بنجاح </div>';
}
elseif (isset($_POST['delete'])){
    $delete= "DELETE  FROM `code` WHERE code_status ='$status'";
    $delete_code=mysqli_query($connect,$delete);
    $msg='<div class="alert alert-success" role="alert"> تم حذف الاكواد الغير نشطة بنجاح  الكود بنجاح </div>';
    echo'<meta http-equiv="refresh" content="2;\'code.php\'"/>';
}
elseif (isset($_POST['ac'])){
    $up= "UPDATE `code` SET `code_status`='active'";
    $up_code=mysqli_query($connect,$up);
    $msg='<div class="alert alert-success" role="alert"> تم تفعيل الاكواد بنجاح </div>';
    echo'<meta http-equiv="refresh" content="2;\'code.php\'"/>';
}
?>
<!doctype html>
<html lang="en" class="first">
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
<body class="text-center">

<?php
include_once("include/header.php");

?>
<div class="container "style="padding-top: 200px">
    <?php echo $msg ?>
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm " method="post">
                <div class="card-body row no-gutters align-items-center">
                    <!--end of col-->
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success " type="add_code" name="add_code">اضافة 100 كود  </button>
                        <a href="show_all_code.php" class="btn btn-lg btn-info"  >عرض الاكواد   </a>
                        <button class="btn btn-lg btn-danger" type="delete" name="delete" id="delete">مسح الاكواد الغير نشطة </button>
                        <button class="btn btn-lg btn-dark"  name="ac" id="ac">تفعيل الاكواد </button>
                    </div>
                    <!--end of col-->
                </div>


            </form>
        </div>
        <form method="post">


        </form>
        <!--end of col-->
        <?php



        function random($length){
            return substr(str_shuffle('1234567890asaadsayed'),0,$length);
        }
        echo"<div class='col-lg-6 border font-weight-bold mt-5 p-2'>";

        echo '</br>';
        echo"</div>";

        ?>
    </div>
</div>
<?php
include_once("include/footer.php");
?>
<!--end regestration form-->
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