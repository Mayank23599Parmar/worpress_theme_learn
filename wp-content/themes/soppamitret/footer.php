    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <a href="<?php echo site_url() ?>">
                            <img src="<?php echo get_header_image(); ?>" width="200" alt="" class="img-fluid">
                            </a>
                            
                        </div>
                        <p><?php genralSettings("visonMision") ?></p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=100089155006177&mibextid=ZbWKwL"><i class="icofont-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Services</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="<?php echo site_url("courses")?>">Courses </a></li>
                            <li><a href="<?php echo site_url("therapies")?>">Therapies</a></li>
                            <li><a href="<?php echo site_url("blogs")?>">Blogs</a></li>
                            <li><a href="<?php echo site_url("contact")?>">Contact</a></li>
                            <li><a href="<?php echo site_url("about")?>">About</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Terms & Conditions</a></li>
                            <li><a href="#!">Privacy Policy</a></li>
                            <li><a href="#!">Company Support </a></li>
                            <li><a href="#!">FAQuestions</a></li>
                            <li><a href="#!">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="mailto:support@email.com"><?php genralSettings("email")?></a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:<?php genralSettings("mobileNumber")?>"><?php genralSettings("mobileNumber")?></a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            Copyright &copy; 2023, Designed &amp; Developed by <a href="#">Mayank Parmar</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address" required>
                                <button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop scroll-top-to" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>