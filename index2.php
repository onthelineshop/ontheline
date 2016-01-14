<!DOCTYPE html>
<html lang="en">

<head>
    <title>On the line</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--  BRAND SLIDER  -->
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css" type="text/css" />

</head>

<body>
    <?php
        include("header.html");
    ?>
        <div class="container-fluid menu-main">
            <div class="container">

                <!--NOTE Pocetak menija-->

                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <ul class="nav_bar">

                                <!--NOTE Pocetak dropdown sekcije za ves masine i susare-->

                                <li id="washdry"><a href="#">Washing machines &#38; Dryers</a>
                                    <div class="washdry_items">
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li><img src="img/icons/wm.png" alt="wm"></li>
                                                <li>
                                                    <p><span>Washing machine</span></p>
                                                </li>
                                                <li><a href="#">Freestanding Washing Machines</a></li>
                                                <li><a href="#">Integrated Washing Machines</a></li>
                                                <li><a href="#">Best Buys</a></li>
                                                <li><a href="#">Washing Machines Buying Guide</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li><img src="img/icons/dry.png" alt="dry"></li>
                                                <li>
                                                    <p><span>Tumble Dryers</span></p>
                                                </li>
                                                <li><a href="#">Condenser Tumble Dryers</a></li>
                                                <li><a href="#">Vented Tumble Dryers</a></li>
                                                <li><a href="#">Heat Pump Dryers</a></li>
                                                <li><a href="#">Best Buys Small</a></li>
                                                <li><a href="#">Tumble Dryers Buying Guide</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li><img src="img/icons/wd.png" alt="wd"></li>
                                                <li>
                                                    <p><span>Washer Dryers</span></p>
                                                </li>
                                                <li><a href="#">Freestanding Washer Dryers</a></li>
                                                <li><a href="#">Integrated Washer Dryers</a></li>
                                                <li><a href="#">Best Buys</a></li>
                                                <li><a href="#">Washer Dryers Buying Guide</a></li>
                                                <li><a href="#">Integrated Washer Dryers Buying Guide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <!--NOTE Pocetak dropdown sekcije za frizidere-->

                                <li id="fridge"><a href="#">Fridges &#38; Freezers</a>
                                    <div class="fridge_items">
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li>
                                                    <p><span>Fridge</span></p>
                                                </li>
                                                <li><a href="#">Freestanding Washing Machines</a></li>
                                                <li><a href="#">Integrated Washing Machines</a></li>
                                                <li><a href="#">Best Buys</a></li>
                                                <li><a href="#">Washing Machines Buying Guide</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li>
                                                    <p><span>Fridge</span></p>
                                                </li>
                                                <li><a href="#">Condenser Tumble Dryers</a></li>
                                                <li><a href="#">Vented Tumble Dryers</a></li>
                                                <li><a href="#">Heat Pump Dryers</a></li>
                                                <li><a href="#">Best Buys Small</a></li>
                                                <li><a href="#">Tumble Dryers Buying Guide</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_col">
                                            <ul class="dropdown_items">
                                                <li>
                                                    <p><span>Washer Dryers</span></p>
                                                </li>
                                                <li><a href="#">Freestanding Washer Dryers</a></li>
                                                <li><a href="#">Integrated Washer Dryers</a></li>
                                                <li><a href="#">Best Buys</a></li>
                                                <li><a href="#">Washer Dryers Buying Guide</a></li>
                                                <li><a href="#">Integrated Washer Dryers Buying Guide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Dishwashers</a></li>
                                <li><a href="#">Cooking</a></li>
                                <li><a href="#">Built-in</a></li>
                                <li><a href="#">Small Appliances</a></li>
                                <li><a href="#">Sound &#38; Vision</a></li>
                                <li><a href="#">Kitchens</a></li>
                                <li><a href="#">Accessories</a></li>
                                <!-- TODO Napraviti dropdown meni za sve kategorije-->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- NOTE Kraj menija-->



        <div class="container site_content">

            <!-- NOTE Pocetak smart search-->

            <div class="row">
                <div class="smart_search">
                    <div class="text-smart-filter">
                        <span>CLICK HERE AND</span>
                        <span class="element"></span>
                        <!--                     <span class="typed-cursor"></span>-->
                        <i class="glyphicon glyphicon-chevron-down smart_search_icon"></i>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12 search_slider">
                    <div class="search_slider_main">
                        <a class="smart_search_wm smart_search_items" data-title="Washing machines" href="#"><img src="img/smart_img/wm_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_dry smart_search_items" data-title="Tumble Dryers" href="#"><img src="img/smart_img/dry_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Fridges & Freezers" href="#"><img src="img/smart_img/fridge_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_dw smart_search_items" data-title="Dishwashers" href="#"><img src="img/smart_img/dishwash_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Cooking appliances" href="#"><img src="img/smart_img/hobs_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Built-in appliances" href="#"><img src="img/smart_img/ovens_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Vacuum cleaners" href="#"><img src="img/smart_img/vc_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Small appliances" href="#"><img src="img/smart_img/sa_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Audio & vision" href="#"><img src="img/smart_img/av_icon_blue.jpg" alt=""></a>
                        <a class="smart_search_rf smart_search_items" data-title="Kitchens" href="#"><img src="img/smart_img/kitchen_icon_blue.jpg" alt=""></a>
                    </div>
                    <div class="search_slider_wm"></div>



                </div>
            </div>
        </div>
        <!-- NOTE Kraj smart search-->

        <!-- NOTE HTML Pocetak banners slider-->

        <div class="container-fluid banner-wide">
            <div class="container">
                <div class="row content_margine">
                    <div class="col-md-12">
                        <div class="single-banner">
                            <a href="#"><img src="img/banners/banner-main.png" alt="big-banner"></a>

                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- NOTE Kraj banners slider -->

        <!-- NOTE HTML Pocetak feature benefit area -->
        <div class="container-fluid color_gray content_margine benefit_responsive">
            <div class="container">
                <div class="row">

                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-4 benefit_area">
                            <img class="benefit_icon_size" src="img/icons/price.svg" alt="price">
                            <div class="ben-area-txt">
                                <h4>Best price guarantee</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </a>
                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-4 benefit_area">
                            <img class="benefit_icon_size2" src="img/icons/truck.svg" alt="truck">
                            <div class="ben-area-txt">
                                <h4>Free delivery</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </a>
                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-4 benefit_area benefit_area_last_feature">
                            <img class="benefit_icon_size3" src="img/icons/click-collect.svg" alt="">
                            <div class="ben-area-txt">
                                <h4>Click &#38; collect</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid color_gray content_margine benefit_main">
            <div class="container">
                <div class="row">

                    <div class="col-xs-3 benefit_area_text">

                        <h4>We care about your budget and comfort.</h4>

                    </div>
                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-3 benefit_area">
                            <img class="benefit_icon_size" src="img/icons/price.svg" alt="price">
                            <div class="ben-area-txt">
                                <h4>Best price guarantee</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </a>
                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-3 benefit_area">
                            <img class="benefit_icon_size2" src="img/icons/truck.svg" alt="truck">
                            <div class="ben-area-txt">
                                <h4>Free delivery</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </a>
                    <a class="benefit_area_link" href="#">
                        <div class="col-xs-3 benefit_area">
                            <img class="benefit_icon_size3" src="img/icons/click-collect.svg" alt="">
                            <div class="ben-area-txt">
                                <h4>Click &#38; collect</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- NOTE HTML Kraj feature benefit area -->

        <!-- NOTE HTML Pocetak velike banner sekcije -->
        <div class="container">
            <div class="row content_margine b-banner">
                <div class="col-md-12 mar_pad_reset">
                    <div class="big_banner_init">
                        <a class="bestbuy_banner big_banner_style" href="#">
                            <h1>BEST BUY</br>PRODUCTS</h1>
                            <div class="clearfix"></div>
                            <p>Our best products, choose by our experts.</p>
                            <img class="bestbuy_img" src="img/brands/bestbuy.svg" alt="">

                            <div class="link_indicator">
                                <span>FIND OUT MORE</span>
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>

            </div>
            <!-- NOTE HTML Kraj velike banner sekcije -->


            <!-- NOTE HTML Pocetak male banner sekcije -->

            <div class="row content_margine">
                <div class="col-md-4 sm_banner_1">
                    <div class="sm_banner_init">
                        <a class="help_support_banner sm_banner_style" href="#">
                            <h4>NEED HELP?</h4>
                            <h1>ASK MARIJA</h1>
                            <img class="help_banner_img" src="img/banners/help_banner.png" alt="help_banner">

                            <div class="link_indicator sm_link_indicator">
                                <span>ASK NOW</span>
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 sm_banner_2">
                    <div class="sm_banner_init">
                        <a class="customer_care_banner" href="#">
                            <h2>CUSTOMER CARE</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet excepturi minima porro ut numquam molestiae.</p>
                            <div class="link_indicator sm_link_indicator">
                                <span>LEARN MORE</span>
                                <div class="arrow_init customer-arrow">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>


                        </a>
                    </div>
                </div>
                <div class="col-md-2 sm_banner_3">
                    <div class="sm_banner_init">
                        <a class="loyalty_card_banner" href="#">
                            <h3>Loyalty program</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            <img class="loyalty-icon" src="img/icons/loyalty.svg" alt="loyalty">
                            <div class="link_indicator sm_link_indicator">
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>

                        </a>
                    </div>

                </div>
                <div class="col-md-2 sm_banner_4">
                    <div class="sm_banner_init">
                        <a class="gift_card_banner" href="#">
                            <h3>Gift card program</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            <img class="giftcard-icon" src="img/icons/gift-card.svg" alt="gift-card">
                            <div class="link_indicator giftcard_arrow">
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>


            <!-- NOTE HTML Newsletter i Facebook -->
            <div class="row content_margine">

                <div class="col-md-3 col-md-offset-3 sm_banner_5">
                    <div class="newsletter_banner">
                        <h3>Newsletter</h3>
                        <p>Subscribe to our newsletter to receive news about discounts and sales.</p>
                        <form class="input_news input--newsletter" action="newsletter.php" method="get">
                            <input class="input__field input__field--newsletter" type="text" id="newsletter" />
                            <label class="input__label input__label--newsletter" for="newsletter">
                                <i class="glyphicon glyphicon-envelope icon_news icon--newsletter"></i>
                                <span class="input__label-content input__label-content--newsletter">YOUR EMAIL ADDRESS...</span>
                            </label>
                            <button type="submit" value="newsletter" class="butNewsletter"><i class="glyphicon glyphicon-chevron-right"></i></button>
                        </form>

                    </div>
                </div>
                <div class="col-md-3 clear_margine sm_banner_5">
                    <a href="#">
                        <div class="facebook_banner sm_banner_init_2">
                            <h4>Join us on</h4>
                            <img class="fb-logo" src="img/brands/facebook.png" alt="facebook">
                            <div class="fb-count"></div><span>people like us</span>
                            <img class="like-icon" src="img/brands/thumbs-up.png" alt="">


                        </div>
                    </a>
                </div>
            </div>
            <!-- NOTE HTML Kraj male banner sekcije -->

            <!-- NOTE HTML Pocetak brend sekcije -->

            <!--
       <div class="row content_margine">
    <div class="col-md-12 brand_section">
        <h4>Choose brand and find your perfect product</h4>
        <div id="brand_section_slider" class="brand_section_slider">
            <div class="brand_img">
                <a href="#"><img src="img/brands/beko.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/gorenje.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/bosch.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/samsung.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/indesit.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/aeg.png" /></a>
            </div>
            <div class="brand_img">
                <a href="#"><img src="img/brands/miele.png" /></a>
            </div>
        </div>
    </div>

</div>
-->
            <!-- NOTE HTML Kraj brend sekcije -->

            <!-- NOTE HTML Pocetak brend sekcije -->
            <div class="row content_margine">
                <div class="col-md-12 signin_section">
                    <a class="signinBtn" href="#">sign in</a>
                    <p>New customer? <a href="#"><span class="login_link">Start here.</span></a></p>
                </div>
            </div>
            <!-- NOTE HTML Kraj brend sekcije -->

        </div>
        <!-- NOTE Kraj container-->

        <!-- NOTE HTML Pocetak footer sekcije -->
        <div class="container-fluid content_margine">
            <div class="row">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer_content">
                                <ul>
                                    <li><a href="#">Contact us</a><span> |</span></li>
                                    <li><a href="#">Help &#38; advice</a><span> |</span></li>
                                    <li><a href="#">About us</a><span> |</span></li>
                                    <li><a href="#">Our services</a><span> |</span></li>
                                    <li><a href="#">Track your order</a><span> |</span></li>
                                    <li><a href="#">Terms and conditions</a><span> |</span></li>
                                    <li><a href="#">Corporate</a></li>
                                </ul>
                                <span>ontheline.com &#169; 2015.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- NOTE JS toggle za smart search-->
        <script>
            var count = 0;
            var div = 0;

            $(function () {
                $(".smart_search").click(function () {
                    count++;
                    console.log(count);
                    $(".search_slider").slideToggle();
                    $(".smart_search_icon").toggleClass("smart_search_icon_rotate");

                    div = count % 2;
                    console.log(div);
                    if (div == 0) {
                        $(".search_slider_wm").removeClass("smart_transform");
                    }

                });

                $(".smart_search_wm").click(function () {
                    $(".search_slider_wm").addClass("smart_transform");
                });
            });
        </script>


        <!-- NOTE JS Bootstrap -->
        <script src="js/bootstrap.min.js" type="application/javascript"></script>

        <!-- NOTE JS Pocetak Proxima nova font -->
        <script src="https://use.typekit.net/jln7phz.js"></script>
        <script>
            try {
                Typekit.load({
                    async: true
                });
            } catch (e) {}
        </script>
        <!-- NOTE JS Kraj Proxima nova font -->



        <!-- NOTE JS Pocetak Newsletter -->

        <script src="js/classie.js"></script>
        <script>
            (function () {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function () {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function () {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

				[].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                    // in case the input is already filled..
                    if (inputEl.value.trim() !== '') {
                        classie.add(inputEl.parentNode, 'input--filled');
                    }

                    // events:
                    inputEl.addEventListener('focus', onInputFocus);
                    inputEl.addEventListener('blur', onInputBlur);
                });

                function onInputFocus(ev) {
                    classie.add(ev.target.parentNode, 'input--filled');
                }

                function onInputBlur(ev) {
                    if (ev.target.value.trim() === '') {
                        classie.remove(ev.target.parentNode, 'input--filled');
                    }
                }
            })();
        </script>

        <!-- NOTE JS Kraj Newsletter -->

        <!-- NOTE JS Brand slider -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var owl = $("#brand_section_slider");

                owl.owlCarousel({
                    items: 6, //10 items above 1000px browser width
                    itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                    itemsTablet: [600, 2], //2 items between 600 and 0
                    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
                });

                // Custom Navigation Events
                $(".next").click(function () {
                    owl.trigger('owl.next');
                })
                $(".prev").click(function () {
                    owl.trigger('owl.prev');
                })
            });
        </script>


        <script>
            /*    LIKES COUNT  */
            var likesAPI = "https://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url=%27https://www.facebook.com/gorenjestudio%27&format=json";
            $.getJSON(likesAPI, function (data) {
                var name = data[0];
                $(".fb-count").append("<span class=\"fbCount\">" + name["like_count"] + "</span>");
            });
        </script>

        <script type="text/javascript" src="js/typed.js"></script>
        <script>
            $(function () {
                $(".element").typed({
                    strings: ["SIMPLIFIED YOUR SHOPPING.", "FIND YOUR PERFECT PRODUCT.", "EXPLORING YOUR NEEDS."],
                    backDelay: 6000,
                    typeSpeed: 40,
                    loop: true,
                    showCursor: false
                });
            });
        </script>




</body>

</html>
