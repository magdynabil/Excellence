<?php
session_start();
include_once("include/connect.php");
$num=1;
$msg='';
$answer_msg='';
$test_num=$_GET['id'];
$codee=$_GET['code'];
$level=2;
if (isset($_POST['answer'])){

    $posts=mysqli_query( $connect ,"SELECT * FROM test  where  `level`='$level' and test_num='$test_num'");
    while($post=mysqli_fetch_assoc($posts)){
        $answer=mysqli_query($connect,"SELECT * FROM `std_answer_2`where std_id ='$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'");
        $answer=mysqli_fetch_assoc($answer);
        if($answer==true){
            $a = $_POST['a'.$num.''];
            $insert=mysqli_query( $connect ,"UPDATE `std_answer_2` SET `answer_1`='$a' WHERE  std_id = '$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'and answer_number='$num'");
            if ($post['right_answer']==$a){
                $insert=mysqli_query( $connect ,"UPDATE `std_answer_2` SET `degree`='1' WHERE  std_id = '$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'");

            }
            else{
                $insert=mysqli_query( $connect ,"UPDATE `std_answer_2` SET `degree`='0' WHERE  std_id = '$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'");
            }
        }
        else{
            $a=$_POST['a'.$num.''];
            $insert=mysqli_query( $connect ,"INSERT INTO `std_answer_2`( 
                                                                                    `std_id`,
                                                                                     `test_number`,
                                                                                      `question_number`,
                                                                                       `answer_number`, 
                                                                                       `answer_1`,
                                                                                          `degree`) 
                                                                                          VALUES (
                                                                                          '$_SESSION[user_id]',
                                                                                          '$test_num',
                                                                                          '$num',
                                                                                          '$num',
                                                                                          '$a',
                                                                                          '0'
                                                                                          )");

            if ( $post['right_answer']==$a){
                $insert=mysqli_query( $connect ,"UPDATE `std_answer_2` SET `degree`='1' WHERE  std_id = '$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'and answer_number='$num'");
            }else{
                $insert=mysqli_query( $connect ,"UPDATE `std_answer_2` SET `degree`='0' WHERE  std_id = '$_SESSION[user_id]' and test_number='$test_num'and question_number='$num'and answer_number='$num'");

            }


        }
        $num++;

    }
    $answer_msg='<div class="alert alert-success" role="alert"> تم ارسال اجابتك  </div>';
    session_write_close();
    echo'<meta http-equiv="refresh" content="1;\'show_answer_2.php?code='.$codee.'&id='.$test_num.'\'"/>';


}


//نهاية  الاجابة الثانية  عشر
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
<div class="container" style="padding-top: 150px">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >

            <h3 class="font-weight-bold"><?php echo $test_num;?> اختبار للصف الثاني  الثانوي رقم </h3>
            <?php
            echo $answer_msg;
            $get_code=mysqli_query($connect,"SELECT * FROM `code` WHERE 	codee='$codee'");
            $code_data=mysqli_fetch_assoc($get_code);
            if (mysqli_num_rows($get_code) < 1){
                $msg='<div class="alert alert-warning" role="alert"> برجاء ادخال كود صحيح  </div>';
            }
            elseif ($code_data['code_status']=='disable'){
                $msg='<div class="alert alert-warning" role="alert"> هذا الكود مستخدم من قبل  </div>';
            }
            else{
                $posts=mysqli_query( $connect ,"SELECT * FROM test  where  `level`='$level' and test_num='$test_num'");
                while($post=mysqli_fetch_assoc($posts)){
                    echo'
<div class="card"  style="background-color: white; border: none ;"  >

<form dir="rtl" align="right" method="post" class="mr-4 p-0">
<!--بداية السوال الاول -->
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-12 col-form-label text-danger font-weight-bold ">'.$post['question'].'</label>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input mr-4 " type="radio" name="a'.$num.'" id="a'.$num.'" value="1"required>
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">
           '.$post['a_1'].'
          </label>
        </div>
       <div class="form-check">
          <input class="form-check-input mr-4" type="radio" name="a'.$num.'" id="a'.$num.'" value="2">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">
           '.$post['a_2'].'
          </label>
        </div>
       <div class="form-check">
          <input class="form-check-input mr-4" type="radio" name="a'.$num.'" id="a'.$num.'" value="3">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">
           '.$post['a_3'].'
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input mr-4 " type="radio" name="a'.$num.'" id="a'.$num.'" value="4">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">
           '.$post['a_4'].'
          </label>
        </div>
      </div>
    </div>
  </fieldset>';
                    $num=$num+1; }

                echo '
  <div class="form-group  row">

    <div class="col-sm-12">
      <button type="submit" name="answer" id="answer" class="btn btn-success d-block w-100 p-2">حفظ   </button>
    </div>
  </div>
</form>
</div>';



            } ?>



            <div class="col-sm-12 text-center"><?php echo $msg;?></div>
        </div>
    </div>

</div>
<!--end regestration form-->
<!--================ Start footer Area  =================-->
<?php
include_once("include/footer.php");
?>
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
</html>