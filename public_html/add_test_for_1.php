<?php
include_once("include/connect.php");
session_start();
if (!isset($_SESSION["user_id"]))
{
    echo'<meta http-equiv="refresh" content="0;\'index.php\'"/>';
}
$msg='';
$level='';
$test_num='';
$Q_number='';
$question='';
$a1='';
$a2='';
$a3='';
$a4='';
$answer='';



if(isset($_POST['add_exam'])){
    $level=$_POST['level'];
    $test_num=$_POST['test_num'];
    $Q_number=$_POST['Q_number'];
    $question=$_POST['question'];
    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $answer=$_POST['answer'];
    $std_degree=mysqli_query( $connect ,"SELECT * FROM `test` where `level` ='$level' and `test_num`='$test_num' and `question_num`='$Q_number'");
    $update_std_degree=mysqli_fetch_assoc($std_degree);
    if($update_std_degree==true){
        $update_degree=mysqli_query( $connect ,"UPDATE `test` SET `question`='$question',`a_1`='$a1',`a_2`='$a2',`a_3`='$a3',`a_4`='$a4',`right_answer`='$answer' WHERE  `level` = '$level' and `test_num`='$test_num' and `question_num`='$Q_number'");

    }

    else {

        $insert = " INSERT INTO `test`( `level`,
                                        `test_num`, 
                                        `question_num`,
                                         `question`,
                                          `a_1`,
                                           `a_2`,
                                            `a_3`,
                                             `a_4`,
                                              `right_answer`)
                                               VALUES ('$level',
                                               '$test_num',
                                               '$Q_number',
                                               '$question',
                                               '$a1',
                                               '$a2',
                                               '$a3',
                                               '$a4',
                                               '$answer')";
        $insert_code = mysqli_query($connect, $insert);
        $msg = '<div class="alert alert-success" role="alert"> تم اضافة السؤال  بنجاح </div>';
        echo'<meta http-equiv="refresh" content="1;\'add_test_for_1.php\'"/>';


    }

}
?>
<!doctype html>
<html lang="ar" class="first">
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
<?php
include_once("include/header.php");
?>
<body class="text-center " style="background: #eee; ">


<div class="container" style="padding-top: 150px; " >

    <div class="col-md-12 " style=" border: solid #000000 1px ; border-radius: 10px ;">
        <div class="form-area " >
            <h3>اضافة اختبار</h3>
            <div class="col-sm-12 text-center"><?php echo $msg;?></div>
            <form method="post"  class="m-2 p-2" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="input5" class="col-sm-2 col-form-label">level </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"name="level" id="level" placeholder="level" required>

                    </div>
                    <label for="input5" class="col-sm-2 col-form-label mt-2">test number </label>
                    <div class="col-sm-10 mt-2">
                        <input type="text" class="form-control "name="test_num" id="test_num" placeholder="test number" required>

                    </div>

                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-3 col-form-label">Question Number </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control"name="Q_number" id="Q_number" placeholder="Question Number" required>
                    </div>

                </div>
                <hr>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">question  </label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"name="question" id="question" placeholder="question"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'question');</script>


                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-md-1"></div>
                    <label for="inputPassword3" class="col-sm-1 col-form-label">1-</label>
                    <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="a1" id="a1" placeholder="answer_1"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'a1');</script>
                    </div>
                    <label for="inputPassword3" class="col-sm-1 col-form-label">2-</label>
                    <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="a2" id="a2" placeholder="answer_2"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'a2');</script>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-1"></div>
                    <label for="inputPassword3" class="col-sm-1 col-form-label">3-</label>
                    <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="a3" id="a3" placeholder="answer_3"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'a3');</script>
                    </div>
                    <label for="inputPassword3" class="col-sm-1 col-form-label">4-</label>
                    <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="a4" id="a4" placeholder="answer_4"></textarea>
                        <script type="text/javascript"> CKEDITOR.replace( 'a4');</script>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input5" class="col-sm-2 col-form-label">Right answer </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="answer"name="answer">
                            <option >Right answer</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" id="add_exam" name="add_exam" class="btn btn-danger w-100 ">add question </button>
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
<script src="tiny/tinymce.js"></script>
<script src="js/site.js"></script>


</body>
</html>