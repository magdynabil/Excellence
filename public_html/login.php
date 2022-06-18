<?php

include_once('include/connect.php');
session_start();

$msg='';
if (isset($_POST['log_in'])){
    $user=$_POST['user'];

    $password=md5($_POST['pass']);
    if(empty($user)){
        $msg='<div class="alert alert-warning" role="alert">برجاء ادخال اسم المستخدم </div>';
    }
    elseif(empty($_POST['pass'])){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال كلمة المرور </div>';

    }else{
        $sql=mysqli_query($connect,"SELECT * FROM `sin_up` WHERE password ='$password'and user_name='$user'");
        if(mysqli_num_rows($sql) !=1){

            $msg='<div class="alert alert-warning" role="alert"> اسم المستخدم او كلمة المرور غير صحيح </div>';
        }
        else{
            $user_info=mysqli_query($connect,"SELECT* FROM sin_up WHERE user_name='$user'");
            $student=mysqli_fetch_assoc($user_info);
            $_SESSION['user_id']=$student['user_id'];
            $_SESSION['user']=$student['user'];
            $_SESSION['user_name']=$student['user_name'];
            $_SESSION['Password']=$student['Password'];
            $_SESSION['address']=$student['address'];
            $_SESSION['phone']=$student['phone'];
            $_SESSION['fphone']=$student['fphone'];
            $_SESSION['group']=$student['group'];
            $_SESSION['year']=$student['year'];
            $_SESSION['level']=$student['level'];
            $_SESSION['date']=$student['date'];
            $_SESSION['status']=$student['status'];
            $msg='<div class="alert alert-success" role="alert"> جاري تسجيل الدخول  </div>';
            echo'<meta http-equiv="refresh" content="1;\'index.php\'"/>';
        }

    }
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
            <div class="row align-items-end justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-0"><?php if (isset($_SESSION['user_id'])){echo 'الصفحة الشخصية ';} else{echo 'تسجيل الدخول ';} ?></h2>
                    <p><?php if (isset($_SESSION['user_id'])){echo 'تابع مستواك هنا يمكنك معرفة درجاتك في الامتحانات السابقة طوال العام  ';} else{echo 'قم بتسجيل الدخول للتتمكن من الدخول الي الاختبارات';} ?> </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['user_id'])){
        echo '
    <section class="login-block m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 login-sec ">
                    <h3 class="text-center"dir="rtl" align="right" style="margin-top:20px">مرحبا <span class="font-weight-bold text-center text-warning">'.ucfirst( $_SESSION['user']).'</span> </h3>
                    <p class="font-weight-bold text-center text-dark">'.substr($_SESSION['phone'],0,50).'  : رقم التلفون </p>
                    <p class="font-weight-bold text-center text-dark">'.$_SESSION['fphone'].' : رقم تلفون ولي الامر </p>
                    <p class="font-weight-bold text-center text-dark">'.$_SESSION['year'].' : السنة الدراسية </p>
                    <p class="font-weight-bold text-center text-dark">'.$_SESSION['group'].' : المجموعة رقم  </p>
                    <p class="font-weight-bold text-center text-dark">'.$_SESSION['level'].' : الفرقة الدراسية </p> ';
        $std_degree=mysqli_query( $connect ,"SELECT * FROM `student_2_degree` WHERE `stud_id` = '$_SESSION[user_id]'") ;
        while ($update_std_degree=mysqli_fetch_assoc($std_degree)){
            echo '<p class="table-success font-weight-bold text-center">درجة الاختبار رقم <span class="text-danger  " >'.$update_std_degree['test_number'].'</span>  هي <span class="text-danger  " >'.$update_std_degree['degree'].'</span> درجات </p>';
        }
        echo'
                    <div class="form-group text-center ">
                        <a style="margin-bottom: -10px;" href="include/logout.php?id='.$_SESSION['user_id'].'" class="btn float-right login_btn btn-danger ">تسجيل الخروج </a>
                        <a style="margin-bottom: -10px;" href="index.php" class="btn float-left login_btn btn-success">عودة للتصفح </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    ';

    } else{ echo ' <div class="site-section">
        <div class="container">
<div class="col-lg-12 text-center" >'.$msg.'</div>

            <div class="row justify-content-center">
                <form class="col-md-5" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">اسم المستخدم </label>
                            <input type="text" id="user" name="user" placeholder="User Name" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">كلمة المرور </label>
                            <input type="password" id="pass" name="pass" placeholder="password" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="تسجيل الدخول  " id="log_in" name="log_in" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>';}?>




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