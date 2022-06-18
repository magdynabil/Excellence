<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once ('include/connect.php');
$msg='';
if (isset($_POST['add_lesson'])){

    if (isset($_FILES['lesson_video'])){
        $lesson_video=$_FILES['lesson_video'];
        $lesson_name= $lesson_video['name'];
        $lesson_tmp_name= $lesson_video['tmp_name'];
        $lesson_error= $lesson_video['error'];
        $lesson_size= $lesson_video['size'];
        $lesson_type_u=explode('.',$lesson_name);
        $lesson_type=strtolower(end($lesson_type_u));
        $allow=array('jpg','jpeg','png','gif');
        if(in_array($lesson_type,$allow)){
            if( $lesson_error==0){
                if($lesson_size<=41943040){
                    $lesson_dir='images/test/'.$lesson_name;
                    if(move_uploaded_file($lesson_tmp_name,$lesson_dir)){
                            $msg='<div class="alert alert-success" role="alert"> connected </div>';
                            echo'<meta http-equiv="refresh" content="2;\'U_img.php\'"/>';
                    }else{$msg='<div class="alert alert-warning" role="alert">حدث خطااء اثناء نقل الدرس   </div>';}

                }else{$msg='<div class="alert alert-warning" role="alert">حجم الصوره اكبر من المتوقع </div>';}
            }else{$msg='<div class="alert alert-warning" role="alert">خطأ غير متوقع ! </div>';}
        }else{$msg='<div class="alert alert-warning" role="alert">صيغة الملف غير مدعمه ! </div>';}
    }else{$msg='<div class="alert alert-warning" role="alert">لم تقم بتحميل الصوره  ! </div>';}
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
<div class="container mb-5" style="padding-top: 200px">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >
            <h3>تحميل صوره    </h3>
            <div class="col-sm-12 text-center"><?php echo $msg;?></div>
            <form method="post"  class="m-2 p-2" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="FILE" class="col-sm-3 col-form-label">lesson </label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control"name="lesson_video" id="lesson_video" placeholder="Time to answer" required>
                    </div>

                </div>
                <hr>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" id="add_lesson" name="add_lesson" class="btn btn-danger w-100 ">تحميل الصوره  </button>
                    </div>
                </div>
            </form>
        </div>
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