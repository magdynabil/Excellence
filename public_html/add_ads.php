<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
include_once("include/connect.php");
$msg_1='';
$msg_2='';
if(isset($_POST['add_ads_1'])){
    $title_1=$_POST['title_1'];
    $content_1=$_POST['content_1'];

    if(empty($title_1)){
        $msg_1='<div class="alert alert-warning" role="alert"> برجاء ادخال عنوان الاعلان </div>';
    }
    elseif(empty($content_1)){
        $msg_1='<div class="alert alert-warning" role="alert"> برجاء ادخال محتوي الاعلان  </div>';
    }
    else{
        $insert = "UPDATE `adds` SET `adds_title`='$title_1',`adds_content`='$content_1' WHERE `adds_id`='1' ";
        $insert_code = mysqli_query($connect, $insert);
        $msg_1= '<div class="alert alert-success" role="alert"> تم اضافة الاعلان بنجاح </div>';
    }
}
if(isset($_POST['add_ads_2'])){
    $title_2=$_POST['title_2'];
    $content_2=$_POST['content_2'];

    if(empty($title_2)){
        $msg_2='<div class="alert alert-warning" role="alert"> برجاء ادخال عنوان الاعلان </div>';
    }
    elseif(empty($content_2)){
        $msg_2='<div class="alert alert-warning" role="alert"> برجاء ادخال محتوي الاعلان  </div>';
    }
    else{
        $insert = "UPDATE `adds` SET `adds_title`='$title_2',`adds_content`='$content_2' WHERE `adds_id`='2' ";
        $insert_code = mysqli_query($connect, $insert);
        $msg_1= '<div class="alert alert-success" role="alert"> تم اضافة الاعلان بنجاح </div>';
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
    <script src="ckeditor/ckeditor.js"></script>
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
<div class="container mb-5" style="padding-top: 200px ">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >
            <h3>اضافة الاعلان الاول </h3>
            <div class="col-sm-12 text-center"><?php echo $msg_1;?></div>
            <form method="post"  class="m-2 p-2">

                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">title </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"name="title_1" id="title_1" placeholder="title">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">content</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control"name="content_1" id="content_1" placeholder="content"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'content_1');</script>
                    </div>

                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" id="add_ads_1" name="add_ads_1" class="btn btn-danger w-100 ">اضافة الاعلان الاول </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end regestration form-->
<div class="container mb-5" style="padding-top: 150px ">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >
            <h3>اضافة الاعلان الثاني </h3>
            <div class="col-sm-12 text-center"><?php echo $msg_2;?></div>
            <form method="post"  class="m-2 p-2">

                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"name="title_2" id="title_2" placeholder="title">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">content </label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control"name="content_2" id="content_2" placeholder="content"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'content_2');</script>
                    </div>

                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" id="add_ads_2" name="add_ads_2" class="btn btn-danger w-100 ">اضافة الاعلان الثاني  </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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