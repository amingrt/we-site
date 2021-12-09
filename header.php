<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Chenar</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
<!--start-top-nav-->
<header>
 <div class="top-header">
     <div class="container">
       <div class="row">
           <div class="col-md-3 d-flex custom-top-nav">
               <div class="icon">
                 <div class="d-flex">
                   <a href="index.php"><img src="img/web_logo_chenar2.png" alt=""></a>
                 </div>
                 </div>
                 <p class="title-img d-none d-lg-block">آموزش و طراحی سایت در وب چنار</p>
              </div>
               <div class="col-md-5 d-flex custom-top-nav d-flex align-items-center justify-content-center">
                 <p class="Slogan d-none d-lg-block">بهتر دیده شدن را از ما بخواهید</p> </div>
               <div class="col-md-4 d-flex custom-top-nav d-flex align-items-center justify-content-center">
               
               <div class="sefaresh ">
                 <button type="button" class=" mx-4 d-none d-lg-block"><a href="./sefaresh.php">سفارش طراحی سایت</a></button>
                </div>
        
               
                <div class="moshavereh ">
                  <button type="button" class="d-none d-lg-block" ><a href="moshavereh.php"> مشاوره رایگان</a></button>
                </div>
              </div>
              <div class="icon-hide d-flex justify-content-end">
        <div class="moshavere-icon mx-3 ">
         <a href="#"> <img src="img/user-friends-solid.svg" alt="moshavere" class="d-none "></a>
        </div>
        <div class="sefaresh-icon">
<a href="#"><img src="img/desktop-solid.svg" alt="sefaresh" class="d-none"></a>
        </div>
       </div>
      </div>
   </div>   
  </div>      


<!--end-top-nav-->
<!--start-nav-->
<div class="main-header">
  <div class="container">
    <div class="row ">
                <div class="col-sm-12 col-lg-10 navbar-light  custom-nav">
                  <nav class="navbar navbar-expand-lg">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">صفحه اصلی</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">طراحی سایت</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">طراحی سایت وردپرس</a></li>
                              <li><a class="dropdown-item" href="#">طراحی سایت شرکتی</a></li>
                              <li><a class="dropdown-item" href="#">طراحی سایت شخصی</a></li>
                              <li><a class="dropdown-item" href="#">طراحی سایت پزشکی</a></li>
                              <li><a class="dropdown-item" href="#">پشتیبانی</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="period.php" class="nav-link ">آموزش ها</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link ">وبلاگ</a>
                          </li>
                      
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">مقالات</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">طراحی سایت </a></li>
                            <li><a class="dropdown-item" href="#">برنامه نویسی</a></li>
                            <li><a class="dropdown-item" href="#">هاست</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.php">درباره ما</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="contact-us.php">ارتباط با ما</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="moshavereh.php">مشاوره</a>
                        </li>




                        
                        <li class="nav-item">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <img src="img/sign-in-alt-solid.svg" alt="" title="ثبت نام/ورود"> 
                          </button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span>ثبت نام / ورود به سایت</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">ایمیل </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">رمز عبور</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="رمز عبور خود را وارد کنید" required>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
            مرا به خاطر بسپار
          </label>
        </div>
        <button type="submit" class="btn btn-login w-100 ">ورود</button>
        <button type="submit" class="btn btn-login-google w-100 mb-3">ورود با گوگل</button>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" >
          <label class="form-check-label mb-3" for="flexCheckChecked1">
            من ربات نیستم
          </label>
        </div>
        <div class="modal-footer justify-content-center">
          <a href="#"><p>ثبت نام نکرده اید؟ کلیک کنید</p></a>
          <a href="#"><p>رمز عبور خود را فراموش کرده اید؟</p></a>
        </div>
      </div>
    </div>
  </div>
</div>

</li>

  


                          <li class="nav-item px-3 ">

                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              <img src="img/search-solid (1).svg" style="height: 15px;width: 15px;" alt="" title="جست و جو">
                            </a>
                       
                        
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                            <form action="https://google.com">
                              <input type="search" class="form-control" id="collapseExample2" placeholder="عنوان مد نظر خود را جست و جو کنید">
                            </form>
                            </div>
                          </div>
                  
                          </li>

                        </ul>

                      </div>
                    </nav>
                    </div>
                  </div>
  
  </div>
</div>
</header>
<!--end-nav-->