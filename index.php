<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natawut</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/combined.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/combined.js"></script>
</head>
<body>
    <header class="nk-header">
        <!--START: Navbar-->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="" class="nk-nav-logo">
                        <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logo.svg" alt="" width="85">
                    </a>
                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="">รายการอาหาร</a>
                        </li>
                        <li>
                            <a href="">สั่งจอง</a>
                        </li>
                        <li>
                            <a href="member.php">ข้อมูส่วนตัว</a>
                        </li>
                        <li>
                            <a href="logout.php">ออกจากระบบ</a>
                        </li>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="nk-navbar-full-toggle">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>
    <!--START: Navbar Mobile-->
    <nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
        <div class="nk-navbar-bg">
            <div class="bg-image" style="background-image: url('assets/images/bg-menu.jpg')"></div>
        </div>
        <div class="nk-nav-table">
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-header">

                        <div class="nk-nav-logo">
                            <a href="index.html" class="nk-nav-logo">
                                <img src="assets/images/logo-light.svg" alt="" width="85">
                            </a>
                        </div>

                        <div class="nk-nav-close nk-navbar-full-toggle">
                            <span class="nk-icon-close"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row-full nk-nav-row">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-nav-table">
                            <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                                <ul class="nk-nav">
                                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-social">
                        <ul>
                            <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Navbar Mobile -->


    <div class="nk-main">

        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-full">
            <div class="bg-image">
                <div style="background-image: url('assets/images/home-7.jpg');"></div>
                <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">

                        <h2 class="nk-subtitle text-white">New Branding Agency</h2>


                        <h1 class="nk-title display-3 text-white">We are about to change the way
                            <br>
                            <em class="fw-400">you publish on the web</em>
                        </h1>


                        <div class="nk-gap"></div>
                        <div class="nk-header-text text-white">
                            <div class="nk-gap-4"></div>
                        </div>


                    </div>
                </div>
            </div>

            <div>
                <a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
                    <span class="pe-7s-angle-down"></span>
                </a>
            </div>

        </div>

        <div id="nk-header-title-scroll-down"></div>

        <!-- END: Header Title -->
        <!-- START: Blog -->
        <div class="nk-box bg-gray-1" id="blog">
            <div class="nk-gap-4 mt-5"></div>

            <h2 class="text-xs-center display-4">Latest Blog</h2>

            <div class="nk-gap mnt-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-xs-center">Donec orci sem, pretium ac dolor et, faucibus faucibus mauris. Etiam,pellentesque faucibus. Vestibulum gravida volutpat ipsum non ultrices.
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2 mt-12"></div>
            <div class="container">
                <!-- START: Carousel -->
                <div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
                    <div class="nk-carousel-inner">
                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.html">
                                                <img src="assets/images/post-1-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Nature</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.html">Something I need to tell you</a></h2>

                                        <div class="nk-post-date">
                                            September 18, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>That female isn't midst divide kind upon seas lights greater green creature lights brought.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.html">
                                                <img src="assets/images/post-3-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Nature</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.html">The History of Nature</a></h2>

                                        <div class="nk-post-date">
                                            August 27, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Third is fly. From one under in itself two waters, all own. Said male shall greater own grass.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.html">
                                                <img src="assets/images/post-4-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Branding</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.html">Are you doing the Right Way?</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Which all, morning isn't. Female and own living dry, and morning lesser first he stars under years thing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.html">
                                                <img src="assets/images/post-5-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Design</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.html">Ten things about Photography</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Be forth, god for rule face abundantly all our two winged made. Is whose morning female.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.html">
                                                <img src="assets/images/post-6-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Design</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.html">Why you should Always First</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Lights give have herb. First. Seed lesser his a fruit. Stars good divide fish appear don't, third deep.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Carousel -->
            </div>
            <div class="nk-gap-5 mt-20"></div>
        </div>
        <!-- END: Blog -->

        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-5"></div>
            <div class="row vertical-gap">
                <div class="col-lg-5">
                    <!-- START: Info -->
                    <h2 class="display-4">Contact Info:</h2>
                    <div class="nk-gap mnt-3"></div>

                    <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>

                    <ul class="nk-contact-info">
                        <li>
                            <strong>Address:</strong> 10111 Santa Monica Boulevard, LA</li>
                        <li>
                            <strong>Phone:</strong> +44 987 065 908</li>
                        <li>
                            <strong>Email:</strong> info@Example.com</li>
                        <li>
                            <strong>Fax:</strong> +44 987 065 909</li>
                    </ul>
                    <!-- END: Info -->
                </div>
                <div class="col-lg-7">
                    <!-- START: Form -->
                    <form action="#" class="nk-form nk-form-ajax">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control required" name="email" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="title" placeholder="Your Title">

                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn">Send Message</button>
                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-5"></div>
        </div>
        <!-- END: Contact Info -->
        <!-- START: Footer-->
        <footer class="nk-footer">


            <div class="nk-footer-cont">
                <div class="container text-xs-center">
                    <div class="nk-footer-social">
                        มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->
    </div>
<script src="assets/js/combined.js"></script>
</body>
</html>