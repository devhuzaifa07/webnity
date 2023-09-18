<!-- Footer Section Start ------------>

<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <a href="index.php"><img class="img-fluid" src="images/logo.png" alt="Webnity Logo"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h3> Services </h3>
                    <ul>
                        <li><a href="logo-design.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Logo Design </a>
                        </li>
                        <li><a href="web-design.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Website Design
                            </a></li>
                        <li><a href="branding.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Branding Design
                            </a>
                        </li>
                        <li><a href="mobile-app.php"><i class="fa-sharp fa-solid fa-caret-right"></i> App Design </a>
                        </li>
                        <li><a href="content-writing.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Content
                                Writing </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h3> More Links </h3>
                    <ul>
                        <li><a href="reviews.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Reviews </a></li>
                        <li><a href="portfolio.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Portfolio </a>
                        </li>
                        <li><a href="privacy-policy.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Privacy &
                                Security </a></li>
                        <li><a href="contact-us.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Contact Us </a>
                        </li>
                        <li><a href="terms-and-conditions.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Terms
                                Of
                                Use </a></li>
                        <li><a href="refund-policy.php"><i class="fa-sharp fa-solid fa-caret-right"></i> Refund Policy
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-link-contact">
                    <h3> Contact Us </h3>
                    <ul>
                        <li><a href="mailto:info@thewebnity.com">
                                <i class="fa-solid fa-envelope"></i>
                                Email: info@thewebnity.com
                            </a>
                        </li>
                        <li><a href="tel:+10000000202"><i class="fa-solid fa-phone"></i>
                                Phone: +1 000 000 0202 </a></li>
                    </ul>
                    <div class="footer-social-link">
                        <a href="#!"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#!"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#!"><img src="images/gmail.png" alt="Webnity Gmail"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-row">
        <div class="container">
            <p> Copyright © 2023 TheWebnity.com | All Right Reserved. </p>
            <img src="images/payment-method.png" alt="Webnity Payment Method">
        </div>
    </div>
    <div class="footer-bottom-content">
        <div class="container">
            <h3> Select Your Industry </h3>
            <p> Disclaimer: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        </div>
    </div>
</section>

<!-- Footer Section End ------------>

<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>

    // Navigation Pop Up Funtion To Open Form
    function openPopUp() {
        document.getElementById("myPopUp").style.display = "block";
    }
    function closePopUp() {
        document.getElementById("myPopUp").style.display = "none";
    }
    document.getElementById("myButton").addEventListener("click", openPopUp);

    // function to change the content according to tabs --------- STARTS
    function testimonialTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // function to change the content according to tabs --------- ENDS


    // JQUERY for slick ------------ START
    jQuery(document).ready(function () {
        'use strict';
        // $('.work-card-slider').slick({
        //     dots: false,
        //     infinite: true,
        //     slidesToShow: 2,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 5000,
        //     pauseOnHover: false,
        //     responsive: [{
        //         breakpoint: 1024,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: true,
        //         }
        //     },
        //     {
        //         breakpoint: 600,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2
        //         }
        //     },
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //             slidesToScroll: 1
        //         }
        //     }
        //         // You can unslick at a given breakpoint now by adding:
        //         // settings: "unslick"
        //         // instead of a settings object
        //     ]
        // });
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.pricing-content').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
    /*ready*/
</script>


</body>

</html>