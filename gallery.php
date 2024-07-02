<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/lx/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 17:30:38 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pixel | Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/core-img/favicon.png">

    <link rel="stylesheet" href="A.style.css.pagespeed.cf.0VivtDGN1d.css">
    <!-- animate on scroll css  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        h1 {
            color: #eaeaea;
        }

        @media only screen and (max-width: 767px) {
            h1 {
                font-size: 1.8rem;
            }

            .classy-nav-container .classy-navbar .nav-brand {
                max-width: fit-content;
                margin-right: 15px;
            }
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>


    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <button type="button" class="btn close-btn" data-dismiss="modal" style="font-size: 18px;"><i
                                class="fas fa-times-circle"></i></button>

                        <form action="https://preview.colorlib.com/theme/lx/index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control"
                                placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <div class="classynav" data-aos="fade-left" data-aos-duration="3000">
                            <ul id="nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="single-blog.php">Experience</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"> <i
                                        class="fa fa-search" aria-hidden="true"></i></div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <section class="breadcrumb-area bg-img bg-overlay jarallax"
        style="background-image:url(img/lx-imges/lx3.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="lx-portfolio-area section-padding-80 clearfix" data-aos="fade-up" data-aos-duration="3000">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="lx-projects-menu wow fadeInUp" data-wow-delay="100ms">
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
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                }
                .gallery {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 10px;
                    padding: 20px;
                }
                .gallery img {
                    width: 100%;
                    height: auto;
                    max-width: 250px;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    transition: transform 0.2s;
                }
                .gallery img:hover {
                    transform: scale(1.05);
                }
            </style>
            <div class="gallery">
            <?php
include 'connect.php';
$query = "SELECT img_name FROM image";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-around;">'; // Container with flexbox
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div style="margin: 10px; text-align: center;">'; // Centered and with margin for spacing
        echo '<img src="img/' . $row['img_name'] . '" alt="Image">'; // No width or height, original size
        echo '</div>';
    }
    echo '</div>'; // End of container
} else {
    echo '<p>No images found in the database.</p>';
}
?>


            </div>
        </div>
    </div>


    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p><a href="https://www.instagram.com/lx_0980/">@pratistha_aryal></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="instragram-feed-area owl-carousel">

            <div class="single-instagram-item">
                <img src="img/bg-img/x11.jpg.pagespeed.ic.EUL6KdRKnX.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x12.jpg.pagespeed.ic.KtvCPGmp2L.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x13.jpg.pagespeed.ic.Yyn_qfYWhe.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x14.jpg.pagespeed.ic.HrODpshf0G.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x15.jpg.pagespeed.ic.E9v-lQJEPj.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>

            <div class="single-instagram-item">
                <img src="img/bg-img/x16.jpg.pagespeed.ic._rIX_EXu7n.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#" style="font-size: 18px;">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>pratistha_aryal</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="wrapper">
            <div class="containerUp">
                <div class="social-info">
                    <h2>Follow Pixel Photography</h2>
                    <div class="icons">

                        <a href="https://www.linkedin.com" target="_blank"><img
                                src="./img/footer-icons/pinpng.com-linkedin-png-533635.png"></a>
                        <a href="https://www.instagram.com/pratistha_aryal" target="_blank"><img
                                src="./img/footer-icons/insta.jpg"></a>
                        <a href="https://in.pinterest.com" target="_blank"><img
                                src="./img/footer-icons/pinterest-new.png"></a>
                        <a href="https://github.com/pratistha16" target="_blank"><img
                                src="./img/footer-icons/gtihub.png"></a>

                    </div>
                </div>
                <div class="connect">
                    <h2>Stay up to date on the latest from Pixel Photography</h2>
                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="containerDown">
                <div class="last">
                    <p>Copyright © 2023 All rights reserved | Made with <span class="heart">❤</span> by <a href="#"
                            target="_blank">Sabita</a></p>
                </div>
            </div>
        </div>
    </footer>




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
        data-cf-beacon='{"rayId":"699023286d631bc2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'></script>
    <!-- animate on scroll js  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Mirrored from preview.colorlib.com/theme/lx/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 17:30:46 GMT -->
</body>

</html>
