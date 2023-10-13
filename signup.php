<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbarb.php'; ?>

    <div class="sign-body">
        <section class="sign-container container">
            <div class="container-box">
                <div class="row">
                    <div class="col-lg-5 bg">
                        <h6 class="card-title">Welcome to <br>
                            <!-- <span>WSU UPI</span> -->
                            <img class="logo" src="/images/upi.png" alt="">
                        </h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio tempora tenetur architecto et
                            quasi totam recusandae animi tempore voluptatem fugiat earum corporis dolorum quae eveniet,
                            atque expedita provident velit illo?
                    </div>
                    <div class="col-lg-7">
                        <div class="card-box">
                            <div class="card-body">
                                <h6 class="card-title">Register</h6>

                                <form action="" class="row no-gutters" style="max-width: 100%;">

                                    <div class="form-group col-lg-6 pr-lg-3">
                                        <label for="email">First Name</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="First Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="password">Last Name</label>
                                        <input type="text" name="password" id="password" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="regemail">Email</label>
                                        <input type="email" name="regemail" id="regemail" class="form-control"
                                            placeholder="Email address">
                                    </div>
                                    <div class="form-group col-lg-6 pr-lg-3">
                                        <label for="regstuid">Student ID</label>
                                        <input type="number" name="regstuid" id="regstuid" class="form-control"
                                        placeholder="Enter USW Student ID">
                                    </div>
                                    <div class="form-group col-lg-6 pr-lg-3">
                                        <label for="regnum">Contact number</label>
                                        <input type="number" name="regnum" id="regnum" class="form-control"
                                            placeholder="Enter Phone Number">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Re-Enter Password">
                                    </div>

                                    <div class="col-md-8 m-auto">
                                        <a class="btn btn-block login-btn mb-4 mx-auto" href="./profile.php">Sign Up</a>
                                    </div>

                                </form>

                                <a href="./forgotpassword.php" class="forgot-password-link">Forgot password?</a>

                                <p class="already-text">Already have an account?
                                    <a href="./signin.php">Sign In</a>
                                </p>

                                <nav class="login-card-footer-nav">
                                    <a href="">Terms of use.</a>
                                    <a href="">Privacy policy</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php include './aafooter.php'; ?>


    <!-- page specific js -->

    <script>

    </script>


</body>

</html>