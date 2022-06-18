
<div class="container">
    <div class="row align-items-center p-5 " >
        <div class="col-lg-6 d-none d-lg-block">
            <?php
            if (isset($_SESSION['user_id'])){
                echo '
                   </div>
            <div class="col-lg-6 text-right">
                <a href="login.php" class="small mr-3"><span class="icon-address-card"></span> الصفحة الشخصية </a>
                <a href="include/logout.php?id='.$_SESSION['user_id'].'" class="small btn btn-primary px-4 py-2 rounded-0"><span class=" icon-sign-out"></span> تسجيل الخروج  </a>
            </div>
            ';
            } else{echo '</div>
            <div class="col-lg-6 text-right">
                <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> تسجيل الدخول </a>
                <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> إنشاء حساب جديد </a>
            </div>';}
            ?>

        </div>
    </div>
</div>
                <div class="mx-auto">
                    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                        <a class="navbar-brand font-weight-bold text-light" href="index.php">Mr.Asaad</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
<div class="container">
                        <div class="  collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link font-weight-bold" href="index.php">الرئيسيه  <span class="sr-only">(current)</span></a>
                                </li>
                                <?php
                                if (isset($_SESSION['user_id'])){
                                    if ($_SESSION['status']=='admin'){
                                        echo ' 
                            <li class="nav-item dropdown font-weight-bold">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    الطلاب
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="level1_std.php">طلاب الفرقة الاولي </a>
                                    <a class="dropdown-item" href="level2_std.php">طلاب الفرقة الثانيه </a>
                                    <a class="dropdown-item" href="level3_std.php">طلاب الفرقة الثالثه </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="search.php"> بحث عن الطلاب بالاسم  </a>
                                    <a class="dropdown-item" href="search_by_degree.php"> بحث عن الطلاب بالدرجات  </a>
                                </div>
                            </li>  <li class="nav-item dropdown font-weight-bold">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    الاختبارات
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="add_test_for_1.php">اضافة اختبار   </a>
                                  
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="add_test_data_for_1.php">اضافة بيانات اختبار </a>
                                    <a class="dropdown-item" href="U_img.php">تحميل صوره </a>
                                    <a class="dropdown-item" href="http://www.asaad-sayed.com/images/test/">عرض ملف الصور  </a>
                         
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="code.php">الاكواد </a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="add_ads.php">التنبيهات  </a>
                            </li>
                            </li>  <li class="nav-item dropdown font-weight-bold">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    تواصل مع الطلاب
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="comment_1.php">تواصل مع طلاب الفرقه الاولي </a>
                                    <a class="dropdown-item" href="comment_2.php">تواصل مع طلاب الفرقه الثانيه </a>
                                    <a class="dropdown-item" href="comment_3.php">تواصل مع طلاب الفرقه الثالثه </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="login.php">الصفحة الشخصيه  </a>
                            </li>
                            <li class="nav-item">
                                <a  href="include/logout.php?id='.$_SESSION['user_id'].'" class="small btn btn-primary px-4 py-2 rounded-0 font-weight-bold"><span class=" icon-sign-out"></span> تسجيل الخروج  </a>
                            </li>'; }
                                    elseif ($_SESSION['level']=='level1'){
                                        echo '    <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="all_test_for_1.php">اختبارات الصف الاول  </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="comment_1.php">تواصل مع المدرس   </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link font-weight-bold" href="login.php">الصفحة الشخصيه  </a>
                                  </li>
                                  <li class="nav-item">
                                     <a  href="include/logout.php?id='.$_SESSION['user_id'].'" class="small btn btn-primary px-4 py-2 rounded-0 font-weight-bold"><span class=" icon-sign-out"></span> تسجيل الخروج  </a>
                                  </li>
                                  ';
                                    }
                                    elseif ($_SESSION['level']=='level2'){
                                        echo '    <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="all_test_for_2.php">اختبارات الصف الثاني   </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="comment_2.php">تواصل مع المدرس   </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link font-weight-bold" href="login.php">الصفحة الشخصيه  </a>
                                  </li>
                                  <li class="nav-item">
                                     <a  href="include/logout.php?id='.$_SESSION['user_id'].'" class="small btn btn-primary px-4 py-2 rounded-0 font-weight-bold"><span class=" icon-sign-out"></span> تسجيل الخروج  </a>
                                  </li>
                                  ';
                                    }
                                    elseif ($_SESSION['level']=='level3'){
                                        echo '    <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="all_test_for_3.php">اختبارات الصف الثالث   </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="comment_3.php">تواصل مع المدرس   </a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link font-weight-bold" href="login.php">الصفحة الشخصيه  </a>
                                  </li>
                                  <li class="nav-item">
                                     <a  href="include/logout.php?id='.$_SESSION['user_id'].'" class="small btn btn-primary px-4 py-2 rounded-0 font-weight-bold"><span class=" icon-sign-out"></span> تسجيل الخروج  </a>
                                  </li>
                                  ';
                                    }}

                                ?>
                            </ul>
                        </div>
                        </div>
                    </nav>

                </div>

