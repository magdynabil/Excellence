<div class="container" style="padding-top: 150px">
    <div class="col-md-12" style=" border: solid #000000 1px ; border-radius: 10px">
        <div class="form-area " >

            <h3 class="font-weight-bold"><?php echo $test_num;?> اختبار للصف الاول  الثانوي رقم </h3>
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

<div class=" card  " style="background-color: white; border: none ;" >

<form dir="rtl" align="right" method="post" class="mr-4 p-0" style=" border:0px ">
<!--بداية السوال الاول -->
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-12 col-form-label text-danger font-weight-bold   ">'.$post['question'].'</label>
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
  </fieldset>
  <hr>';
                    $num=$num+1; }

                echo '
  <div class="form-group  ">
  
    <div class="col-sm-12 mb-5">
      <button type="submit" name="answer" id="answer" class="btn btn-success d-block w-100 p-2 ">  حفظ    </button>
    </div>
  </div>
</form>
</div>
';


            } ?>



            <div class="col-sm-12 text-center"><?php echo $msg;?></div>
        </div>
    </div>

</div>