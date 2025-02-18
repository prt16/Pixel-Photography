<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="https://docs.google.com/presentation/d/1MsNxNn6jPg2BjZ-lb70JWN3FxPo_BeCr/edit?usp=sharing&ouid=103952962616122275537&rtpof=true&sd=true">


    <title>Pixel Gallery | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="img/core-img/favicon.png">
    <!-- animate on scroll css  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body> 

    <header class="header-area">

        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <nav class="classy-navbar justify-content-between" id="lxNav">

                        <a class="nav-brand" href="index.html" data-aos="fade-right" data-aos-duration="3000">
                            <h1 class="home-logo">Pixel Photography</h1>
                        </a>

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- <div class="classycloseIcon"> -->
                                <!-- <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div> -->
                            <!-- </div> -->

                            <div class="classynav" data-aos="fade-left" data-aos-duration="3000">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="single-blog.php">Experience/Skills</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <ul id="social-sidebar" data-aos="fade-right" data-aos-duration="3000" style="z-index: 200">
        </li>
        <li>
            <a class="entypo-github" href="https://github.com/pratistha16" target="_blank"><span>Github</span></a>
        </li>
        <li>
            <a class="entypo-instagrem" href="https://www.instagram.com/pratistha_aryal/"
                target="_blank"><span>Instagram</span></a>
        </li>

    </ul>


    <section class="welcome-area" data-aos="fade-right-up" data-aos-duration="3000">
        <div class="welcome-slides owl-carousel">

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/lx-imges/lx2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                    <?php
include 'connect.php';
$query = "SELECT Description FROM home";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $description = $row['Description'];
} else {
    $description = "Default description"; // Provide a default if no description is found
}
mysqli_close($conn);
?>


<div class="col-12 col-lg-8 col-xl-6">
    <div class="welcome-text">
        <h2 data-animation="bounceInUp" data-delay="100ms">Hello <br>I'm Prath</h2>
        <p data-animation="bounceInUp" data-delay="500ms"><?php echo $description; ?></p>
        <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="about.php" class="btn lx-btn mb-3 mb-sm-0 mr-4">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" data-aos="fade-left" data-aos-duration="3000ms"
                style="background-image: url(img/lx-imges/lx1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">Hello <br>I'm Prath</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">I photograph very instinctively. It`s
                                    about
                                    finding something intresting in an ordinary place... I've found it has little to do
                                    with
                                    the things you see and everything to do with the way you see them.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="lx-portfolio-area section-padding-80 ">
        <div class="container-fluid" data-aos="zoom-in" data-aos-duration="3000">
            <div class="row">
                <div class="col-12">

                    <div class="lx-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".human">Human</button>
                            <button class="btn" data-filter=".nature">Nature</button>
                            <button class="btn" data-filter=".country">Country</button>
                            <button class="btn" data-filter=".video">Video</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lx-portfolio">

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/64.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/64.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/4.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/5.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/5.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/6.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/6.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/7.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/7.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/8.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/8.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/10.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/10.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/9.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/9.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-6 single_gallery_item video country mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/36.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/36.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/37.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/37.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/image_new.jpg" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/image_new.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="gallery.php" class="btn lx-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>x

    <section class="follow-area clearfix" data-aos="fade-right" data-aos-duration="3000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <a href="https://www.instagram.com/pratistha_aryal/">
                            <h2>Instagram</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="instragram-feed-area owl-carousel">

            <div class="single-instagram-item">
                <img src="img/bg-img/x11.jpg.pagespeed.ic.EUL6KdRKnX.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x12.jpg.pagespeed.ic.KtvCPGmp2L.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                <a href="https://www.instagram.com/pratistha_aryal/" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>@pratistha_aryal</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div data-aos="slow-blink">
        <div class="containerUp">
                <div class="connect">
                    <div >
                    <p>Copyright © 2023 All rights reserved | Made with <span class="heart">❤</span> by <a
                    href="https://www.instagram.com/pratistha_aryal/" target="_blank"> Pratistha</a></p>
                    </div>

                </div>
               
            </div>
</div>
    </footer>
</body>

<script>
    function updateCounter() {
        fetch('https://api.countapi.xyz/update/uimonk/youtubechannel/?amount=1')
            .then(res => res.json())
            .then(data => counterElement.innerHTML = data.value)
    }
    updateCounter()
    counterElement = document.getElementsByClassName('count')[0];
</script>


<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.9S4FA15Zn6.js"></script>
<script>
    eval(mod_pagespeed_2mSwO3vn68);
</script>

<script>
    eval(mod_pagespeed_aQrG1NKKxL);
</script>

<script src="js/lx.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"699023133d611baa","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'></script>
<!-- animate on scroll js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>



</html>
