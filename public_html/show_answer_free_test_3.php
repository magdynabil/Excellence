<?php
session_start();
include_once("include/connect.php");
$num=1;
$msg='';
$test_num=$_GET['id'];
$degree=0;
for ($i=1; $i<=40 ; $i++ ){

    $insert=mysqli_query( $connect ,"SELECT * FROM std_answer_3 where std_id ='$_SESSION[user_id]' and test_number='$test_num'and question_number='$i' ");
    while ( $answer=mysqli_fetch_assoc($insert)){
        $degree=$degree + $answer['degree'];

    }
}
$std_degree=mysqli_query( $connect ,"SELECT * FROM `student_2_degree` where stud_id ='$_SESSION[user_id]' and test_number='$test_num' and stud_level='3'");
$update_std_degree=mysqli_fetch_assoc($std_degree);
if($update_std_degree==true){
    $update_degree=mysqli_query( $connect ,"UPDATE `student_2_degree` SET `degree`='$degree' WHERE  stud_id = '$_SESSION[user_id]' and test_number='$test_num' and stud_level='3'");
}
else{
    $insert=mysqli_query( $connect ,"INSERT INTO `student_2_degree`( `stud_id`,`stud_level`, `test_number`, `degree`) VALUES ('$_SESSION[user_id]','3','$test_num','$degree')");
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
    echo ' <div class="alert alert-warning" role="alert" style="padding-top:100px ">?????????? ?????????? ????????????  </div>';

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
<div class="container mb-5" style="padding-top: 150px">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >
            <h3 class="font-weight-bold"><?php echo $test_num;?> ?????????? ???????????? ???????? ???????????? ?????????????? ?????? </h3>
            <h3 class="font-weight-bold text-danger text-center"style="dir="rtl" align="right"> ???????????? ???? ?????? ???????????????? =<?php echo $degree;?>  </h3>
            <?php
            $posts=mysqli_query( $connect ,"SELECT * FROM test  where `level`='3'and `test_num` = '$test_num' ");
            while($post=mysqli_fetch_assoc($posts)){
                $insert=mysqli_query( $connect ,"SELECT * FROM std_answer_3 where std_id ='$_SESSION[user_id]' and test_number='$test_num'and question_number='$num' ");
                $answer=mysqli_fetch_assoc($insert);
                if ($post['right_answer']==$answer['answer_1']){
                    $border_1='border: 3px  solid #1c7430 ;';
                    $Back_ground_1='background-color: #1c7430;';
                }else{
                    $border_1='border: 3px  solid red ;';
                    $Back_ground_1='background-color: red;';
                }

                echo'
<div class="card" >

<form dir="rtl" align="right" method="post" class="mr-4 p-0">
<!--?????????? ???????????? ?????????? -->
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-12 col-form-label text-danger font-weight-bold ">'.$post['question'].'</label>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">1-
           '.$post['a_1'].'
          </label>
        </div>
       <div class="form-check">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">2-
           '.$post['a_2'].'
          </label>
        </div>
       <div class="form-check">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">3-
           '.$post['a_3'].'
          </label>
        </div>
         <div class="form-check">
          <label class="form-check-label pr-5 text-dark font-weight-bold " for="gridRadios1">4-
           '.$post['a_4'].'
          </label>
        </div>
        <div class="font-weight-bold text-light " style="'.$border_1.''.$Back_ground_1.'"> ?????????????? ?????????????? ??????  : 
      '.$post['right_answer'].'
      </div>
      <div class="font-weight-bold text-light " style="'.$border_1.''.$Back_ground_1.'"> ???????????? ?????? : 
      '.$answer['answer_1'].'
      </div>
      </div>
    </div>
  </fieldset>
  <!--?????????? ???????????? ?????????? -->
  <!--?????????? ???????????? ???????????? -->
 

  <!--?????????? ???????????? ???????????? -->
     <!--?????????? ???????????? ???????????? -->
  
   <!--?????????? ???????????? ???????????? -->
        <!--?????????? ???????????? ???????????? -->
   <!--?????????? ???????????? ???????????? -->
</form>
</div>';


                $num=$num+1; }
            ?>



            <div class="col-sm-12 text-center"><?php echo $msg;?></div>
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