<!-- CONTACT US HOME START -->
<section class="contact-us-home section" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="home-page-title text-center">
                            <h1 class="text-white mb-2">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center bg-transparent">
                                    <li class="breadcrumb-item text-white"><a href="index.html" class="text-white">Home</a></li>
                                    <li class="breadcrumb-item  active" aria-current="page"><a href="contact-us.html" class="text-custom">Contact Us</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT US HOME START -->

<!-- MAP START -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.6984266858954!2d-0.21920778573553762!3d5.611462534650661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9bd0548620cf%3A0x32e646521210e193!2s94+Archer+Rd%2C+Accra!5e0!3m2!1sen!2sgh!4v1550235183301" width="100%" height="500" style="border: 0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAP END -->

<!-- CONTACT US -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-us-cantent text-center mt-4">
                    <div class="contact-icon mx-auto mb-3">
                        <i class="mdi mdi-cellphone-iphone"></i>
                    </div>
                    <!-- <p class="text-muted mb-0">+</p> -->
                    <p class="text-muted mb-0">+233 (0) 509222936</p>
                    <p class="text-muted mb-0">+233 (0) 509222941</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-us-cantent text-center mt-4">
                    <div class="contact-icon mx-auto mb-3">
                        <i class="mdi mdi-email-outline"></i>
                    </div>
                    
                    <p class="text-muted mb-0">info@btlafrica.com</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-us-cantent text-center mt-4">
                    <div class="contact-icon mx-auto mb-3">
                        <i class="mdi mdi-web"></i>
                    </div>
                    <p class="text-muted mb-0">www.btlafrica.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT US -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-address">
                    <h4 class="txt-dark">GET IN TOUCH</h4>
                    <p class="text-muted">If you would like to leave us a short message please complete the form below. A member of our staff will get back to you shortly.</p>
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-address">
                            <h5 class="text-dark">Head Office </h5>
                            <p class="text-muted">No 103 Dideibaa Avenue, Abelemkpe, Accra. <br>
                                    <h5 class="text-dark">Phone:</h5>
                                    <p class="text-muted"> +233 (0) 509222936<br>  +233 (0) 509222941</p>
                                    <h5 class="text-dark"> Email: </h5>
                                    <p class="text-muted">info@btlafrica.com
                                    </p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="contact-address">
                            <h5 class="text-dark">Office Two</h5>
                            <p class="text-muted">3513 Poplar Street Chicago Heights, IL 60411</p>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="col-md-6 offset-md-1">
                <div class="custom-form">
                    <div id="message"><?php displayMessage(); ?></div>
                    <form method="post" action="sendContactUsMessage.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name..">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="email">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Enter Subject.." />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="comments">Message</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="sendContactUsMessage" class="submitBnt btn btn-custom" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
