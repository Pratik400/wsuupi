<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbar.php'; ?>

    <section class="profile-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="profile-top-layout">
                        <div class="profile-info">
                            <div class="profile-picture"><img
                                    src="https://66.media.tumblr.com/de62698dc1b7eab4e505358bf0414f13/tumblr_prmny2ZaBb1uua0sto5_540.png"
                                    alt="ananddavis" />
                            </div>
                            <div class="profile-header">
                                <div class="profile-account">
                                    <h4 class="profile-username">Pratik Bajracharya</h4>
                                    <h6 class="profile-email">20******@student@westernsydney.edu.com</h6>
                                </div>
                                <div class="profile-edit"><a class="profile-button" href="#">Edit Profile</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar-container">
                        <?php include 'profile-sidebar.php'; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">

                        <!-- method -->
                        <div id="method">
                            <div class="content-title">
                                <h2>Connected Banks</h2>
                                <h4>Manage your Banks</h4>
                            </div>

                            <button class="btn btn-add" type="button" data-bs-toggle="collapse"
                                data-bs-target="#addpaymenttoggle" aria-expanded="false"
                                aria-controls="addpaymenttoggle">
                                <span class="p-2">Add New Bank</span> <i class="fa fa-plus"></i>
                            </button>

                            <div class="collapse" id="addpaymenttoggle">
                                <form>
                                    <div class="form-group align-items-center row">
                                        <label for="adname" class="col-sm-2 col-form-label">Bank </label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-control">
                                                <option selected>Select</option>
                                                <option value="anz">ANZ (Australia and New Zealand Banking Group
                                                    Limited)</option>
                                                <option value="cba">Commonwealth Bank of Australia</option>
                                                <option value="nab">National Australia Bank (NAB)</option>
                                                <option value="westpac">Westpac Banking Corporation</option>
                                                <option value="macquarie">Macquarie Bank Limited</option>
                                                <option value="suncorp">Suncorp Group Limited</option>
                                                <option value="bendigo">Bendigo and Adelaide Bank Limited</option>
                                                <option value="amp">AMP Bank Limited</option>
                                                <option value="me">ME Bank (Members Equity Bank Limited)</option>
                                                <option value="ing">ING Bank (Australia)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group align-items-center row">
                                        <label for="country" class="col-sm-2 col-form-label">Account Holder's
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cardholderName"
                                                placeholder="Enter Account Holder's Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group align-items-center row">
                                        <label for="city" class="col-sm-2 col-form-label">BSB</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="expirationDate"
                                                placeholder="Enter BSB" required>
                                        </div>
                                    </div>
                                    <div class="form-group align-items-center row">
                                        <label for="state" class="col-sm-2 col-form-label">Account Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cvv"
                                                placeholder="Enter Account number" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-2 col-sm-9">
                                            <button type="submit" class="btn default-btn" data-bs-toggle="modal"
                                                data-bs-target="#bankotpmodaal">Submit </button>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="bankotpmodaal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" tabindex="-1"
                                        aria-labelledby="bankotpmodallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="bankotpmodallabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="sign-body m-0">
                                                        <section class="sign-container p-0">
                                                            <div class="container-box justify-content-center" style="max-width:none;min-height: auto;">
                                                                <div class="row ">
                                                                    <div class="col-lg-12">
                                                                        <div class="card-box">
                                                                            <div class="card-body p-0">
                                                                                <h6 class="card-title">ENTER OPT</h6>
    
                                                                                <form action="" class="row no-gutters"
                                                                                    style="max-width: 100%;">
    
                                                                                    <div class="form-group col-lg-12">
                                                                                        <label for="otp">One-Time Password
                                                                                            (OTP):</label>
                                                                                        <input type="number"
                                                                                            class="form-control" id="otp"
                                                                                            name="otp"
                                                                                            max="6"
                                                                                            placeholder="Enter OTP"
                                                                                            required>
                                                                                    </div>
    
                                                                                    <div class="col-md-12 text-align-start">
                                                                                        <a class="btn login-btn mb-4"
                                                                                            href="./profile.php">Continue</a>
                                                                                    </div>
    
                                                                                </form>
    
    
                                                                                <p class="already-text">Din not get the OTP?
                                                                                    <a href="./opt.php">Resend OTP</a>
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
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="address-table table-responsive">
                                <table class="table table-light table-borderless">
                                    <tbody>
                                        <tr class="address-row row">
                                            <td class="address col-sm-8">
                                                <strong>Commonwealth Bank</strong>
                                                <br>
                                                Pratik Bajracharya
                                                <br>
                                                062-101 12345690
                                                <br>

                                            </td>
                                            <td class="address-btns col-sm-4">
                                                <button class="btn btn-sm btn-success">
                                                    <span>Default</span><i class="fa fa-star"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <span>Delete</span><i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="address-row row">
                                            <td class="address col-sm-8">
                                                <strong>ANZ Bank</strong>
                                                <br>
                                                Pratik Bajracharya
                                                <br>
                                                012-101 78945654
                                                <br>

                                            </td>
                                            <td class="address-btns col-sm-4">
                                                <button class="btn btn-sm btn-warning">
                                                    <span>Make Default</span><i class="far fa-star"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <span>Delete</span><i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './aafooter.php'; ?>

    <script>
        $('.custom-select').niceSelect();
    </script>
</body>

</html>