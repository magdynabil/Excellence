<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once("include/connect.php");
$posts=mysqli_query($connect,"SELECT * from sin_up where `level` ='level1'");
$post=mysqli_num_rows($posts);

?>
<!doctype html>
<html lang="en" class="first">
<head>
    <!-- Required meta tags -->
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
<body class="">
<?php
include_once("include/header.php");


?>


<div class="container mb-5" style="padding-top: 200px">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12 table-success p-3 text-center text-warning mt-5" ><span class="text-danger font-weight-bold"  "><?php echo  $post;?></span>  عدد طلاب الصف الاول علي الموقع  </div>
        <?php
        $posts=mysqli_query( $connect ,"SELECT * FROM sin_up where level='level1' ");
        while($post=mysqli_fetch_assoc($posts)){
            echo'
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">
                <div class="title">
                    <h4>'.$post['user'].'</h4>
                </div>

                <div class="text">
                    
                    <span>'.$post['address'].'</span>
                </div>     
                <p >رقم التلفون '.$post['phone'].' </p>
                <p >رقم تلفون ولي الامر : '.$post['fphone'].' </p>
                <p >المجموعة : '.$post['group'].' </p>';
            $std_degree=mysqli_query( $connect ,"SELECT * FROM `student_2_degree` WHERE `stud_id` = '$post[user_id]'") ;
            while ($update_std_degree=mysqli_fetch_assoc($std_degree)){
                echo '<p class="table-success font-weight-bold">درجة الاختبار رقم <span class="text-danger  " >'.$update_std_degree['test_number'].'</span>  هي <span class="text-danger  " >'.$update_std_degree['degree'].'</span> درجات </p>';
            }


            echo '
            </div>
        </div>
';}?>

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