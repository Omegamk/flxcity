<?php include('include/header2.php'); ?>
	<section id="category" class="pt-5">
		<div class="container">
			<div class="row">
                <div class="col-lg-8 d-none d-lg-block mt-4">
                    <img src="./img/banner-hero.jpg" alt="">

                </div>
				<div class="col-lg-4 col-md-4 col-sm-12 d-sm-block">
                    <div id="logreg-forms">
                        <form class="form-signin">
                            <div class="login-header d-flex mb-3">
                                <h1 class="h3 font-weight-bold " >Choose Account type</h1>
                                </div>
                                <h5 class="text-center border-overlay">Are You A ?</h5>
                            <div class="row justify-content-center wrapper login-border p-0 m-0">
                                 <div class="form-check p-0 cursor-login">
                                    <label class=""> 
                                        <input type="radio" class="form-check-input ml-2" name="select" id="Freelaner" value="checkedValue" checked><br>
                                        <label for="Freelaner" class="option option-1">
                                        <div class="dot "></div>
                                        <span>Freelaner</span>
                                     </label> 
                                </div>
                                <span class="mt-3 mx-3">OR</span>
                                <div class="form-check p-0 cursor-login">
                                    <label class="cursor-login"> 
                                        <input type="radio" class="form-check-input ml-2" name="select" id="Recruiter" value="checkedValue" ><br>
                                        <label for="Recruiter" class="option option-2">
                                        <div class="dot"></div>
                                        <span>Recruiter</span>
                                     </label> 
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <img src="./img/svg/freelancer.svg" alt="">
                                </div>
                                <div class="col">
                                <img src="./img/svg/employer.svg" alt="">
                                </div>
                            </div> -->
                            <div class="text-center"> 
                                <h5>Sign In Via</h5>
                            </div>
                            <div class="login-data">
                                <div class="social-login d-flex d-lg-flex justify-content-center py-3"> 
                                    <p class="mobile line cursor-login" type="" id="mobile-signIn"><span>Phone number</span> </p>
                                    <span class="mx-4">|</span>
                                    <p class="email cursor-login" type="button" id="email-signIn"><span>E-Mail</span> </p>
                                </div>
                                <div class="phone-login" >
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Phone" required="" autofocus="">
                                    <button class="btn flxcity-color p-1 m-2" type="button">Request OTP</button>
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">   
                                    <button class="btn flxcity-color btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                                </div>
                                <div class="email-login px-3">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">   
                                    <button class="btn flxcity-color btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                                </div>
                                <div class="links row justify-content-between mb-4 px-3">
                                    <a href="#" id="forgot_pswd" class="px-3">Forgot password?</a>
                                    <a href="#" id="btn-signup" class="px-3">Login in ?</a>
                             </div>
                        </form>
                        </div>
                        <form action="/reset/password/" class="form-reset px-3">
                            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
                        </form>
                        <form action="/signup/" class="form-signup">
                        <div class="sign-up login-border">
                            <h5 class="border-overlay">Sign Up</h5>
                            <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
                            <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
                            <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                            <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

                            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                            </div>
                        </form>
                        <br>
                       
                    </div>
                </div>
				</div>
			</div>
		</div>
	</section>
<?php include('include/footer.php'); ?>

<script>
    $(".email-login").hide();

$("#email-signIn").click(function(){
    $(".email-login").show();
    $(".phone-login").hide();
    $(".email").addClass("line");
    $(".mobile").removeClass("line");
  });

  $("#mobile-signIn").click(function(){
    $(".email-login").hide();
    $(".phone-login").show();
    $(".mobile").addClass("line");
    $(".email").removeClass("line");

  });
  
  
</script>