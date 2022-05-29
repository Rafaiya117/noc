<?php
include 'pages/header.php';
?>

<body>

    
    <!--====== BANNER PART START ======-->
<section class="banner-area bg_cover d-block d-md-flex align-items-center error-area"
        style="background-image: url();">

         
            <div class="container">
                 <div class="row ">
                <div class="col-lg-10 col-md-12">
                <form class="card-body">
                          <div class="banner-content">
                        <h3 class="title" style="color: #000000">Verify NOC</h3>
                        <lable>Enter Memo No.</lable>
                        <div class="form-group">
                            <input type="text" name="search" class="form-control inner-textfield" placeholder="22.01.0000.101.23.113.2021.1977">
                        </div>
                        <ul>
                            <li><a class="main-btn" href="./report.php">Varify</a></li>
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>  
        <!-- <div class="banner-thumb">
            <img src="assets/images/banner-thumb.png" alt="thumb">
        </div> -->
        <div class="error-color">
            <img src="assets/images/error-color.png" alt="color">
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                   
                    <div class="login-box">
                        <div class="login-title text-center">
                            <img src="assets/images/logo-2.png" alt="logo">
                            <h3 class="title">Admin Login</h3>
                        </div>
                        <div class="login-input">
                            <form action="#" class="form-group">
                                <div class="input-box mt-10">
                                    <input type="email" placeholder="admin@wlor.org">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="password" placeholder="*******">
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="input-btn mt-10">
                                    <button class="main-btn" type="submit">login  <i class="fal fa-arrow-right"></i></button>
                                    <span>Need an account? <a href="singup.php">Signup</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </section>

    <!--====== BANNER PART ENDS ======-->

    <!--====== scroll_up PART START ======-->

    <a id="scroll_up"><i class="far fa-angle-up"></i></a>

    <!--====== scroll_up PART ENDS ======-->


<?php
include 'pages/footer.php';
?>







   