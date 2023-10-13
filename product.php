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

                                <div class="desc">
                                    <ul>
                                        <li>
                                            Pay your Statement of Account (Tax Invoice) issued by the University for
                                            your Tuition fees or Student Services & Amenities fees
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 justify-content-center">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="product-highlights">
                        <div class="row highlight-row">
                            <div class="col-sm-12">
                                <div class="title-left text-start">

                                    <h5>
                                        More Info
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="desc-right">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed mollitia,
                                        voluptatem nostrum possimus tenetur adipisci amet sit animi ducimus quis
                                        repellendus aliquid voluptas, optio id! Pariatur, laboriosam! Quas, maiores
                                        eveniet.</p>

                                    <p>Consectetur adipisicing elit. Quos animi aliquam voluptates, quam iure, quaerat
                                        vitae placeat facere accusamus incidunt non expedita recusandae doloremque ad
                                        hic ullam doloribus, voluptate cupiditate.</p>

                                    <p>Adipisicing elit. Aperiam voluptatibus officiis facere nostrum! In quod, minus
                                        iste accusantium, possimus voluptates modi tempora, nostrum ipsa temporibus
                                        neque dolore? Ut, nam! Laborum.</p>
                                </div>
                            </div>
                            <div class="product-details-container pt-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center ">
                                            <a href="./checkout.php" class="add-to-cart-btn">
                                                Pay Now
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include './aafooter.php'; ?>


    <!-- page specific js -->

    <script type="text/javascript">
        $(document).ready(function () {

            $('.specsSelect').niceSelect();

        });
    </script>


</body>

</html>