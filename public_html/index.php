<?php session_start();
include_once('include/connect.php') ?>
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

    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('images/hero.jpg');">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="text-light mb-5">نقدم افضل طرق المتابعة المتميزة عن طريق الاختبارات و تقييم مستوى الطالب للوصول لافضل النتائج </h2>
                        <?php if (isset($_SESSION['user_id'])) {
                            if ($_SESSION['status'] == 'admin') {
                                echo '
                               <a href = "all_test_for_1.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الاول </a >
                        <a href = "all_test_for_2.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثاني </a >
                        <a href = "all_test_for_3.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثالث </a >';
                            }
                            elseif ($_SESSION['level']=='level3'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_3.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثالث </a >
                           ';
                            }
                            elseif ($_SESSION['level']=='level2'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_2.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف التاني </a >
                           ';
                            }
                            elseif ($_SESSION['level']=='level1'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_1.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الاول </a >
                           ';
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_2.jpg');">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="text-light mb-5">نقدم افضل طرق المتابعة المتميزة عن طريق الاختبارات و تقييم مستوى الطالب للوصول لافضل النتائج </h2>
                        <?php if (isset($_SESSION['user_id'])) {
                            if ($_SESSION['status'] == 'admin') {
                                echo '
                               <a href = "all_test_for_1.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الاول </a >
                        <a href = "all_test_for_2.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثاني </a >
                        <a href = "all_test_for_3.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثالث </a >';
                            }
                            elseif ($_SESSION['level']=='level3'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_3.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الثالث </a >
                           ';
                            }
                            elseif ($_SESSION['level']=='level2'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_2.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف التاني </a >
                           ';
                            }
                            elseif ($_SESSION['level']=='level1'){

                                echo '
                           <a href="modify_user.php" type="submit" name="submit" value=" " class="btn btn-info btn-lg px-5 mt-2 font-weight-bold">تعديل البينات الشخصية</a>
                           <a href = "all_test_for_1.php" type = "submit" name = "submit" value = "" class="btn btn-warning btn-lg px-5  mt-2 font-weight-bold" > الدخول الي اختبارات الصف الاول </a >
                           ';
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/asaad.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">Mr.Asaad Sayed</span>
                    <h3 class="heading-92913 text-black">Mr.Asaad Sayed</h3>
                    <p class="text-dark font-weight-bold ">أول موقع متخصص فى شرح مادة الرياضيات  للمرحلة الثانوية و تطبيق اعلى معايير الجودة فى التعلم عن بعد و تقديم مادة علمية مبسطة و شرح متميز للوصول لاعلى استفادة و توفير الوقت و الجهد هدفنا هو وصول الطالب لاعلى درجات الاستفادة و التميز من خلال التعلم عن بعد و تقديم افضل الخدمات التعليمية</h4></p>

                    <?php if (isset($_SESSION['user_id'])) {
                        if ($_SESSION['level']=='level1'){
                            echo '  
                                         <p><a href="all_test_for_1.php" class="btn btn-primary py-3 px-4">اختبارات الصف الاول </a></p>
                                    ';
                        }
                        elseif ($_SESSION['level']=='level2'){
                            echo '                                     
                                         <p><a href="all_test_for_2.php" class="btn btn-primary py-3 px-4">اختبارات الصف الثاني </a></p>
                                    ';
                        }
                        elseif ($_SESSION['level']=='level3'){
                            echo '
                                         <p><a href="all_test_for_3.php" class="btn btn-primary py-3 px-4">اختبارات الصف الثالث </a></p>
                                      
                                    ';
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="service-39381">
                        <img src="images/asaad2.jpg" alt="Image" class="img-fluid">
                        <div class="p-4">
                            <h3><a href="#"><span class="icon-book mr-1 text-primary"></span> أول موقع متخصص فى شرح مادة الرياضيات  للمرحلة الثانوية و تطبيق اعلى معايير الجودة فى التعلم عن بعد و تقديم مادة علمية مبسطة و شرح متميز للوصول لاعلى استفادة و توفير الوقت و الجهد هدفنا هو وصول الطالب لاعلى درجات الاستفادة و التميز من خلال التعلم عن بعد و تقديم افضل الخدمات التعليمي
                                </a></h3>
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <span class="icon-calculator"></span>
                                   التميز في الرياضيات
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 mb-4">
                    <div class="service-39381">
                        <img src="images/asaad.jpg" alt="Image" class="img-fluid">
                        <div class="p-4">
                            <h3><a href="#"><span class="icon-calculator mr-1 text-primary"></span> نوفر لك افضل واحدث طرق الشرح عن طريق مجموعة من الفديوهات و ملفات الشرح النظرى نقدم لك المادة العلمية الصحيحة بطريقة سلسة بعيدا عن التعقيد و بكل الاختصار و الدقة  نقدم افضل طرق المتابعة المتميزة عن طريق حل الواجبات و تقديم الاختبارات و تقييم مستوى الطالب للوصول لافضل النتائج</a></h3>
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <span class="icon-user"></span>
                                  Mr.asaad sayed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <?php

    $add_1=mysqli_query( $connect ,"SELECT * FROM adds where adds_id='1'");
    $adds_1=mysqli_fetch_assoc($add_1);
    $add_2=mysqli_query( $connect ,"SELECT * FROM adds where adds_id='2'");
    $adds_2=mysqli_fetch_assoc($add_2);
    ?>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">التميز</span>
                    <h3 class="heading-92913 text-black text-center">تنبيهات واعلانات هامه </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="text-serif text-primary">Mr.Asaad</span>
                    <h3 class="heading-92913 text-black"><?php echo $adds_1['adds_title']; ?></h3>
                    <p><?php echo $adds_1['adds_content']; ?></p>
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">Mr.Asaad</span>
                    <h3 class="heading-92913 text-black"><?php echo $adds_2['adds_title']; ?></h3>
                    <p><?php echo $adds_2['adds_content']; ?></p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">التميز </span>
                    <h3 class="heading-92913 text-black text-center">نصايح تهمك </h3>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>النجاح هو حصيلة مجهودات صغيرة نكررها كل يوم .</p>
                        </blockquote>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>أنتظار النجاح بدون العمل الشاق لتحقيقة يعادل أنتظار الحصاد بدون بذر البذور.</p>
                        </blockquote>

                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p> الفشل هومجموعة تجارب تسبق النجاح
                                </br> .</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="text-white">تواصل مع المدرس </h2>
                    <p class="lead text-white"> يمكنك ارسال الاسئله والاستفسارات</p>

                    <?php if (isset($_SESSION['user_id'])) {
                        if ($_SESSION['level']=='level1'){
                            echo '  
                                     <p class="mb-0"><a href="comment_1.php" class="btn btn-warning py-3 px-5 text-white">تواصل مع المدرس </a></p>
                                    ';
                        }
                        elseif ($_SESSION['level']=='level2'){
                            echo '                                     
                                     <p class="mb-0"><a href="comment_2.php" class="btn btn-warning py-3 px-5 text-white">تواصل مع المدرس </a></p>
                                    ';
                        }
                        elseif ($_SESSION['level']=='level3'){
                            echo '
                                     <p class="mb-0"><a href="comment_3.php" class="btn btn-warning py-3 px-5 text-white">تواصل مع المدرس </a></p>
                                      
                                    ';
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>


<?php include_once ('include/footer.php')?>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

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