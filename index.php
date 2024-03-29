<?php
$successMessage ="";
include("inc/sendEmail.php");
if($successMessage){
    echo $successMessage;
}



?>


<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Resume1.0</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="https://internship.zuri.team"><img src="images/copy hng.png" alt="Homepage"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header>
    <!-- end s-header -->


    <!-- home
   ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Hello There</h3>

                <h1>
                    I am Praise. <br> I am a backend web developer <br> designer based in Lagos.
                </h1>

                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Me
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div>
        <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="https://m.facebook.com/babalola.praise.50"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/praizillo"><i class="im im-twitter " aria-hidden="true "></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/praizillo/ "><i class="im im-instagram " aria-hidden="true "></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://github.com/Praizillo20">
                    <i class="im im-github" aria-hidden="true"></i>
                    <span>Github</span>
                </a>
            </li>
        </ul>
        <!-- end home-social -->

    </section>
    <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about " class="s-about target-section ">

        <div class="row narrow section-intro has-bottom-sep ">
            <div class="col-full text-center ">
                <h3>About</h3>
                <h1>More About Me</h1>
                <p class="lead ">I am a student of Electrical/Electronics engineering in my 4th year in the university of Lagos. Currently working as an intern in the HNGi8 internship programme. </p>
            </div>
        </div>

        <div class="col-six tab-full right ">
            <h3>I've Got Some skills.</h3>

            <ul class="skill-bars ">
                <li>
                    <div class="progress percent90 "><span>80%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent85 "><span>85%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent70 "><span>90%</span></div>
                    <strong>Python</strong>
                </li>
                <li>
                    <div class="progress percent95 "><span>65%</span></div>
                    <strong>PHP</strong>
                </li>
            </ul>
        </div>

        </div>
        <!-- end about-content -->

        <div class="row about-content about-content--buttons ">

            <div class="col-six tab-full left ">
                <a href="https://drive.google.com/file/d/1z6kWLZU_GTU0kY91ky_YLU4kl__7UUrh/view " class="btn btn--primary full-width ">Download My CV</a>
            </div>
            <div class="col-six tab-full right ">
                <a href="#contact " class="smoothscroll " title="about ">Hire Me Now</a>
            </div>

        </div>
        <!-- end about-content buttons -->



        <!-- s-stats
    ================================================== -->
        <section id="contact " class="s-contact target-section ">

            <div class="overlay "></div>

            <div class="row narrow section-intro ">
                <div class="col-full ">
                    <h3>Contact</h3>
                    <h1>Say Hello.</h1>

                    <div class="row contact__main ">
                        <div class="col-eight tab-full contact__form ">
                            <form name="contactForm " id="contactForm " method="POST" action="sendEmail.php">
                                <fieldset>

                                    <div class="form-field ">
                                        <strong>Name</strong>
                                        <input name="contactName" type="text " id="contactName " placeholder="Name " value=" " minlength="2 " required=" " aria-required="true " class="full-width ">
                                    </div>
                                    <div class="form-field ">
                                        <strong>Email</strong>
                                        <input name="contactEmail" type="email " id="contactEmail " placeholder="Email " value=" " required=" " aria-required="true " class="full-width ">
                                    </div>
                                    <div class=" form-field ">
                                        <textarea name="contactMessage" id="contactMessage " placeholder="message " rows="10 " cols="50 " required=" " aria-required="true " class="full-width "></textarea>
                                    </div>
                                    <div class="form-field ">
                                        <button class="full-width btn--primary " type="submit" name="submitBtn">Submit</button>
                                        <div class="submit-loader ">
                                            <div class="text-loader ">Sending...</div>
                                            <div class="s-loader ">
                                                <div class="bounce1 "></div>
                                                <div class="bounce2 "></div>
                                                <div class="bounce3 "></div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <!-- contact-warning -->
                            <div class="message-warning ">
                                Something went wrong. Please try again.
                            </div>

                            <!-- contact-success -->
                            <div class="message-success ">
                                Your message was sent, thank you!<br>
                            </div>

                        </div>
                        <div class="col-four tab-full contact__infos ">
                            <h4 class="h06 ">Phone</h4>
                            <p>Phone: 07018203078<br>
                            </p>

                            <h4 class="h06 ">Email</h4>
                            <p>praise.babalola70@gmail.com</p>
                            <h4 class="h06 ">Address</h4>
                            <p>
                                Estate 6, RCCG camp,<br> km46, Lagos-Ibadan Expressway,<br> Mowe, Ogun State, Nigeria</p>
                        </div>

                    </div>

        </section>
        <!-- end s-contact -->


        <!-- footer
    ================================================== -->
        <footer>
            <div class="row ">
                <div class="col-full ">

                    <div class="footer-logo ">
                        <a class="footer-site-logo " href="#0 "><img src="images/logo.png " alt="Homepage "></a>
                    </div>

                    <ul class="footer-social ">
                        <li>
                            <a href="https://m.facebook.com/babalola.praise.50 ">
                                <i class="im im-facebook " aria-hidden="true "></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/praizillo ">
                                <i class="im im-twitter " aria-hidden="true "></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/praizillo/ ">
                                <i class="im im-instagram " aria-hidden="true "></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Praizillo20 ">
                                <i class="im im-github " aria-hidden="true "></i>
                                <span>Github</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="row footer-bottom ">

                <div class="col-twelve ">
                    <div class="copyright ">
                        <span>© Copyright Praizillo 2019</span>
                        <span>Design by Praizillo</span>
                    </div>

                    <div class="go-top ">
                        <a class="smoothscroll " title="Back to Top " href="#top "><i class="im im-arrow-up " aria-hidden="true "></i></a>
                    </div>
                </div>

            </div>
            <!-- end footer-bottom -->

        </footer>
        <!-- end footer -->


        <!-- photoswipe background
    ================================================== -->
        <div aria-hidden="true " class="pswp " role="dialog " tabindex="-1 ">

            <div class="pswp__bg "></div>
            <div class="pswp__scroll-wrap ">

                <div class="pswp__container ">
                    <div class="pswp__item "></div>
                    <div class="pswp__item "></div>
                    <div class="pswp__item "></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden ">
                    <div class="pswp__top-bar ">
                        <div class="pswp__counter "></div><button class="pswp__button pswp__button--close " title="Close (Esc) "></button> <button class="pswp__button pswp__button--share " title="Share "></button> <button class="pswp__button pswp__button--fs
                                            " title="Toggle fullscreen "></button> <button class="pswp__button pswp__button--zoom " title="Zoom in/out "></button>
                        <div class="pswp__preloader ">
                            <div class="pswp__preloader__icn ">
                                <div class="pswp__preloader__cut ">
                                    <div class="pswp__preloader__donut "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap ">
                        <div class="pswp__share-tooltip "></div>
                    </div><button class="pswp__button pswp__button--arrow--left " title="Previous (arrow left) "></button> <button class="pswp__button pswp__button--arrow--right " title="Next (arrow right) "></button>
                    <div class="pswp__caption ">
                        <div class="pswp__caption__center "></div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end photoSwipe background -->

        <div id="preloader ">
            <div id="loader "></div>
        </div>


        <!-- Java Script
    ================================================== -->
        <script src="js/jquery-3.2.1.min.js "></script>
        <script src="js/plugins.js "></script>
        <script src="js/main.js "></script>

</body>

</html>
