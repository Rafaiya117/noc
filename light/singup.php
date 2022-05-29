<?php
include 'pages/header.php';
?>
  <!--====== ERROR PART START ======-->
    
    <section class="error-area">
        <div class="container center">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="login-box">
                        <div class="login-title text-center">
                            <img src="assets/images/logo-2.png" alt="logo">
                            <h3 class="title">Create an Account!</h3>
                        </div>
                        <div class="login-input">
                            <form action="#">
                                <div class="input-box mt-10">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="password" placeholder="Password">
                                    <ul class="checkbox_common checkbox_style5">
                                        <li>
                                            <input type="checkbox" name="checkbox5" id="checkbox13">
                                            <label for="checkbox13"><span></span>I agree to the Terms of Service and Privacy Policy</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-btn mt-10">
                                    <button class="main-btn" type="submit">login  <i class="fal fa-arrow-right"></i></button>
                                    <span>Already have an account? <a href="login.html">Singin</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="error-color">
            <img src="assets/images/error-color.png" alt="color">
        </div>
        <!-- <div class="error-thumb">
            <img src="assets/images/734.jpg" alt="">
        </div> -->
    </section>
    
    <!--====== ERROR PART ENDS ======-->
    
    
    <?php
include 'pages/footer.php';
?>