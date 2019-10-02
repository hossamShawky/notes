<?php
include '../include/nav.php';
?>

 <form class="form" action="chechlogin.php" method="post" >
    
        <div class="fields">
        <div class="container"> 
            <!-- Strat Form-->
          <form class="" role="form" >
                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                        
             <input type="text" class="form-control input-lg" placeholder="اسم المستخدم" id="un" name="username">
                                </div>
                         </div> 
                            <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <input type="password" class="form-control input-lg" placeholder="كلمه المرور" name="password">
                                </div>
                            </div>

                            <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <input type="submit" class="form-control input-lg btn-primary"  value="تسجيل الدخول">
                                </div>
                            </div>
                             <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <button onclick="alert ('تفقد رسائل البريد');" class="form-control input-lg btn-primary" >نسيت كلمه المرور</button>
                                </div>
                            </div>
                          </div>
         
                </form>
            <!-- End Form-->


<?php
include '../include/footer.php';
?>