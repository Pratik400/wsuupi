<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'aaheader.php'; ?>
</head>

<body>

    <?php include './aanavbar.php'; ?>




    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1>Contact Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="section-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-content-wrapper">
                        <div class="contact-title">
                            <span>CONTACT US</span>
                            <h2>
                                Let’s talk about <br />
                                Love to hear from you!
                            </h2>
                        </div>
                        <div class="contact-info-wrapper">
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="info-meta">
                                    <h5>Our Location</h5>
                                    <p>Western Sydney University <br>
                                        Locked Bag 1797 <br>
                                        Penrith NSW 2751</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="info-meta">
                                    <h5>How Can We Help?</h5>
                                    <p>wsuupi.contact@westernsydney.edu.au</p>
                                    <p>wsuupi.help@westernsydney.edu.au</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-form-wrapper">
                        <h3 class="contact-form-title">Send us a Message</h3>
                        <form class="contact-form">
                            <div class="form-group">
                                <label for="fullName">Full Name*</label>
                                <input type="text" name="fullName" placeholder="Adam Gelius" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone*</label>
                                <input type="text" name="phone" placeholder="04** *** ***" />
                            </div>
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn default-btn">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include './aafooter.php'; ?>

    <script>

    </script>


</body>

</html>