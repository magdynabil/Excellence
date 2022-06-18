<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once("include/connect.php");
$msg='';
$title='1000';
$test_num='1000';
$level='1000';
if(isset($_POST['search'])) {
    $title=$_POST['user'];
    $test_num=$_POST['test_num'];
    $level=$_POST['level'];
    if (empty($title)) {
        $msg='<div class="alert alert-danger text-center" role="alert">برجاء ادخال درجة الطالب  !</div>';
    }
    if (empty($test_num)) {
        $msg='<div class="alert alert-danger text-center" role="alert">برجاء ادخال رقم الامتحان  !</div>';
    }
    if (empty($level)) {
        $msg='<div class="alert alert-danger text-center" role="alert">برجاء ادخال الفرقه الدراسيه     !</div>';
    }

}
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
<body class="text-center">

<?php
include_once("include/header.php");

?>
<div class="container mb-5 "style="padding-top: 100px">

    <?php echo $msg ?>
    <br/>
    <div class="row " style="margin-top: 100px">
   <?php for ($i=1; $i<30; $i++){
       $std_2_count=mysqli_query( $connect ,"SELECT * FROM student_2_degree where stud_level='1' and test_number='$i' ");

       $std_2_num=mysqli_num_rows($std_2_count);
       if ($std_2_num==0){
           $i++;
           continue;
       }
       echo ' <p class="col-lg-4 table-success">'.$std_2_num.' عدد الطلاب الصف الاول  في الاختبار رقم '.$i.'هي </p>';
   }
   for ($i=1; $i<30; $i++){
       $std_2_count=mysqli_query( $connect ,"SELECT * FROM student_2_degree where stud_level='2' and test_number='$i' ");

       $std_2_num=mysqli_num_rows($std_2_count);
       if ($std_2_num==0){
           $i++;
           continue;
       }
       echo ' <p class="col-lg-4  table-primary">'.$std_2_num.' عدد الطلاب الصف الثاني في الاختبار رقم '.$i.'هي </p>';
   }
   for ($i=1; $i<50; $i++){
       $std_2_count=mysqli_query( $connect ,"SELECT * FROM student_2_degree where stud_level='3' and test_number='$i' ");

       $std_2_num=mysqli_num_rows($std_2_count);
       if ($std_2_num==0){
           $i++;
           continue;
       }
       echo ' <p class="col-lg-4 table-danger">'.$std_2_num.' عدد الطلاب الصف الثالث في الاختبار رقم '.$i.'هي </p>';
   }


   ?>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm " method="post">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg  " type="number" name="test_num" id="test_num" placeholder=" رقم الامتحان  ">

                    </div>
                    <div class="col">
                        <input class="form-control form-control-lg  " type="number" name="user" id="user" placeholder="الدرجة">
                    </div>
                    <div class="col">
                        <input class="form-control form-control-lg  " type="number" name="level" id="level" placeholder="الفرقه ">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="text" name="search">بحث</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
        <?php
        $degree=mysqli_query( $connect ,"SELECT * FROM student_2_degree where degree ='$title'and `test_number`='$test_num'and stud_level='$level' ");
        while($s_degree=mysqli_fetch_assoc($degree)){
            $s=$s_degree['stud_id'];
        $posts=mysqli_query( $connect ,"SELECT * FROM sin_up where 	user_id ='$s' ");
        while($post=mysqli_fetch_assoc($posts)){
            echo'
        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12 mt-5">

            <div class="box-part text-center">
                <div class="title">
                    <h4>'.$post['user'].'</h4>
                </div>

                <div class="text">
                    <span>'.$post['address'].'</span>
                </div>

                <p >رقم التلفون '.$post['phone'].' </p>
                <p >رقم تلفون ولي الامر : '.$post['fphone'].' </p>
                <p >السنة الدراسية : '.$post['level'].' </p>
                <p >المجموعة : '.$post['group'].' </p>';
            $std_degree=mysqli_query( $connect ,"SELECT * FROM `student_2_degree` WHERE `stud_id` = '$post[user_id]'") ;
            while ($update_std_degree=mysqli_fetch_assoc($std_degree)){
                echo '<p class="table-success font-weight-bold">درجة الاختبار رقم <span class="text-danger  " >'.$update_std_degree['test_number'].'</span>  هي <span class="text-danger  " >'.$update_std_degree['degree'].'</span> درجات </p>';
            }
            echo '

            </div>
        </div>';


        }
        }
        ?>
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