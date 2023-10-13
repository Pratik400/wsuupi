<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './aaheader.php'; ?>
</head>

<body>
    <?php include './aanavbar.php'; ?>


    <div class="section-product">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <nav aria-label="breadcrumb" class="breadcrumb-box">
                        <ol class="breadcrumb container">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Charges and Payments</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tuition and SSAF Payments</li>
                        </ol>
                    </nav>

                    <div class="product-details-container">
                        <div class="row pt-4">
                            <div class="col-lg-6">
                                <h3 class="title">Tuition and SSAF Payments - Semester 3</h3>

                                <div class="price">
                                    <div class="sell-price"><b>$18,000.00</b></div>
                                </div>
                                <a href="#" class="text-danger">See payment pdf</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-checkout">
        <div class="container">
            <div class="row checkout-page-row">

                <div class="col-12 ">
                    <h4 class="v2-section-title justify-content-start ps-0"><span class="ps-1">PAYMENTS</span></h4>
                </div>

                <div class="col-lg-8">
                    <form action="" class="checkout-form mt-3 px-3 px-sm-2 px-md-4">

                        <div class="mb-4 ml-3 checkout-form-section-title flex-wrap">
                            <div class="d-flex align-items-center ">
                                <span class="">1</span>
                                <h2 class="">Payment Information</h2>
                            </div>

                        </div>

                        <div class="checkout-details-form">
                            <div class="form-group row">
                                <label for="phone" class="col-md-2 offset-md-1 col-form-label">Enter Amount </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adname" class="col-md-2 offset-md-1 col-form-label">UPI ID </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="uiid" name="uiid"
                                        placeholder="Enter UPI ID">
                                </div>
                            </div>
                           
                        </div>

                        <br><br>

                        <div class=" py-3">
                            <div class="mb-4 ml-3 checkout-form-section-title">
                                <span class="">2</span>
                                <h2 class="">Account Preference</h2>
                            </div>
                            <div class="form-group row m-0">
                                    <section class="profile-container m-0">
                                        <div class="profile-content border-0 pt-0" style="min-height: auto;">
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
                                                                    <span>Selected</span><i
                                                                        class="fa fa-check-double"></i>
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
                                                                    <span>Select</span><i class="fa fa-check"></i>
                                                                </button>
                                                                
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>

                                            </div>
                                        </div>
                                    </section>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <a href="payotp.php" class="btn btn-sumbit w-100">Continue</a>
                        </div>
                        <br>
                        <a href="product.php" class="btn btn-dark ">Cancel</a>

                    </form>
                </div>

            </div>
        </div>
    </section> 





    <?php include './aafooter.php'; ?>


    <!-- page specific js -->

    <script>

    </script>


</body>

</html>