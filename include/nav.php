<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--  <link rel="stylesheet" href="bootstrap.min.css">  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

 <link rel="stylesheet" href="hover-min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse container">
  <div class="container-fluid" style="float:left;">
    <div class="navbar-header">
      <a class="navbar-brand  hvr-buzz" href="#">ملاحاظاتي</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active "><a href="MyNotes/../index.php"><i class='fa fa-home'></i>الرئيسيه</a></li>
       <!--../index.php -->
      
          <li><a href="#"> الشرح</a> </li>   
         <li><a href=#>معلومات عنا</a></li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">المزيد 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">الاتصال</a></li>
          <li><a href="#">ملاحاظات مقترحه</a></li>
          <li><a href="#">كيفيه انشاء ملاحظة</a></li>
        </ul>
      </li>
    </ul> 

  </div>

<div class="logs">
 
 <ul>
<!-- isset($_SESSION['adminid']) --> 
   <?php 
if(isset($_SESSION['userid']) ||isset($_SESSION['adminrole'])||isset($_SESSION['adminid'])  )
                              {
                                            
#print_r($_SESSION);
                         echo "<li >";
                   echo "<button class='btn  btn-primary' ><a href='../logs/logout.php'>


                   تسجيل الخروج</a></button>";
                            echo "</li>";

                             }


                              else
                              {
                         echo "<li>";#MyNotes/
  echo  "<button class='btn  btn-primary' > <a href='MyNotes/../logs/login.php'>تسجيل الدخول</a></button>";
                     echo "</li>";

                        echo "<li>";
  echo "<button class='btn btn-primary'><a href='MyNotes/../logs/regist.php'>اضافه عضويه</a></button>";
                           echo "</li>";

                              }

            ?>
 </ul>

</div>
</nav>

<style>
  .logs{
    float: right;
    margin-right: 30px;
  
  }
  .logs ul li
  {
    list-style: none;
    display: inline-block;
    margin: 2px;
  }
  .logs ul li a { 
    color: white;
    text-decoration: none;
   }
.hvr-buzz : hover{color:blue;}
</style>



 <!--    www.cars.com  -->