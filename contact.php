<?php
include("include/head.php");
include("include/nav.php");
?>

<!-- Page Header End -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Get In Touch</h1>
            <p>Feel free to reach out via the contact form below and our friendly team will respond promptly. Your thoughts and inquiries are important to us, and we look forward to connecting with you</p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                </div>
                <h6>2 ElMalek EL Afdal St.,Zamalek, Cairo</h6>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-envelope-open fa-2x text-primary"></i>
                </div>
                <h6>info@kider.com</h6>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-phone-alt fa-2x text-primary"></i>
                </div>
                <h6>(+20) 1234567890</h6>
            </div>
        </div>
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <p class="mb-4">Get in touch with us.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                            <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.08930680945!2d31.215387975322415!3d30.06297447491424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840e15e1d7e6f%3A0xd29f27179486e22c!2sIsmail%20Mohammed%2C%20Mohammed%20Mazhar%2C%20Zamalek%2C%20Cairo%20Governorate%204271040!5e0!3m2!1sen!2seg!4v1695563630525!5m2!1sen!2seg" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php
include("include/footer.php");
?>