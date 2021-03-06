<?php
include_once("include/connect.php");
session_start();
$msg='';
if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $user_name=$_POST['user_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $fphone=$_POST['fphone'];
    $year=$_POST['year'];
    $level=$_POST['level'];
    $group=$_POST['group'];
    $status='user';
    $date=date("y-m-d");
    if(empty($user)){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال اسم المستخدم كامل بالغة العربية </div>';
    }
    elseif (empty($user_name)){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال اسم المستخدم  </div>';
    }
    elseif (empty($_POST['Password'])){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال كلمة المرور</div>';
    }

    elseif (empty($phone)){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال رقم التلفون</div>';
    }
    elseif(empty($fphone)){
        $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال رقم تلفون ولي الامر </div>';
    }
    else{
        $user_name_check=mysqli_query($connect,"SELECT user_name FROM sin_up WHERE user_name='$user_name'");
        if (mysqli_num_rows($user_name_check) > 0){
            $msg='<div class="alert alert-warning" role="alert">اسم المستخدم موجود بالفعل  </div>';
        }

        else{
            $password=md5($_POST['Password']);
            $insert="INSERT INTO `sin_up`( `user`, `user_name`, `Password`, `address`, `phone`, `fphone`, `year`, `level`, `group`, `status`, `date`) VALUES ('$user','$user_name','$password','$address','$phone','$fphone','$year','$level','$group','$status','$date')";
            $insert_code=mysqli_query($connect,$insert);
            $msg='<div class="alert alert-success" role="alert"> تم انشاء الحساب بنجاح </div>';
            if(isset($insert_mysqli)){

                $user_info=mysqli_query($connect,"SELECT* FROM sin_up WHERE user_name='$user'");
                $student=mysqli_fetch_assoc($user_info);
                $_SESSION['user_id']=$student['user_id'];
                $_SESSION['user']=$student['user'];
                $_SESSION['user_name']=$student['user_name'];
                $_SESSION['Password']=$student['Password'];
                $_SESSION['address']=$student['address'];
                $_SESSION['phone']=$student['phone'];
                $_SESSION['fphone']=$student['fphone'];
                $_SESSION['year']=$student['year'];
                $_SESSION['level']=$student['level'];
                $_SESSION['group']=$student['group'];
                $_SESSION['date']=$student['date'];
                $_SESSION['status']=$student['status'];

            }

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


    <?php include_once('include/header.php')?>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="mb-0">انشاء حساب جديد </h2>
                    <p>قم بانشاء حساب جديد لتتمكن من الدخول للامتحنات </p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="col-sm-12 text-center"><?php echo $msg;?></div>

            <form method="post">
            <div class="row justify-content-center">

                <div class="col-md-5">
                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="username">اسم المستخدم ثلاثي بالعربي </label>
                            <input type="text" id="user" name="user" class="form-control form-control-lg" placeholder="اسم المستخدم ثلاثي بالعربي">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">اسم المستخدم بالانجليزي </label>
                            <input type="text" id="user_name" name="user_name" placeholder="اسم المستخدم بالانجليزي" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">كلمة المرور</label>
                            <input type="password" id="Password" name="Password" placeholder="كلمة المرور " class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">العنوان </label>
                            <input type="text" id="address" name="address" placeholder="العنوان " class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">رقم التلفون </label>
                            <input type="text" id="phone" name="phone" placeholder="رقم التلفون " class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">رقم تلفون ولي الامر  </label>
                            <input type="text" id="fphone" name="fphone" placeholder="رقم تلفون ولي الامر  " class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="input8">السنه الدراسية </label>
                            <select class="form-control form-control-lg" id="year"name="year">
                                <option value="2021" >2020-2021</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="input5" >الفرقة الدراسية </label>
                            <select class="form-control form-control-lg" id="level"name="level">
                                <option value="level1" >الصف الاول الثانوي</option>
                                <option value="level2" >الصف الثاني الثانوي</option>
                                <option value="level3" >الصف الثالث الثانوي</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="input5">المجموعة  </label>
                            <select class="form-control form-control-lg" id="group"name="group">
                                <option value="0" >غير مقيد في مجموعة</option>
                                <option value="1" >  المجموعة الاولي</option>
                                <option value="2" >  المجموعة الثانيه</option>
                                <option value="3" >  المجموعة الثالثة</option>
                                <option value="4" >  المجموعة الرابعة</option>
                                <option value="5" >  المجموعة الخامسة</option>
                                <option value="6" >  المجموعة السادسة</option>
                                <option value="7" >  المجموعة السابعة</option>
                                <option value="8" >  المجموعة الثامنة</option>
                                <option value="9" >  المجموعة التاسعة</option>
                                <option value="10" >  المجموعة العاشرة</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="submit" value="إنشاء حساب جديد " class="btn btn-primary btn-lg px-5 btn-block">
                        </div>
                    </div>
                </div>

            </div>
            </form>



        </div>
    </div>
    <?php include_once('include/footer.php')?>
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