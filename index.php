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
        <div class="container-fluid meni-color">
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

            <div class="row ">
                <div class="smart_search">
                    <h2>CLICK &#38; SIMPLIFY YOUR SHOPPING</h2><i class="glyphicon glyphicon-chevron-down smart_search_icon"></i>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12 search_slider">
                    <div class="search_slider_main">
                        <div class="smart_search_wm"></div>

                    </div>
                    <div class="search_slider_wm"></div>



                </div>
            </div>
            <!-- NOTE Kraj smart search-->




            <!-- NOTE HTML Pocetak banners slider-->
            <div class="row">

                <div id="carousel-example-generic" class="carousel slide banners_slider" data-ride="carousel">

                    <!-- Indicators -->

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->

                    <div class="carousel-inner" role="listbox">
                        <div class="item active banner1">
                            <a href="#"><img src="img/banners/banner1.jpg" alt="baner1"></a>
                        </div>
                        <div class="item">
                            <img src="img/banners/banner2.jpg" alt="baner2">
                        </div>
                        <div class="item">
                            <img src="img/banners/banner3.jpg" alt="baner3">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control banner_no_shadow" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left banner_right" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control banner_no_shadow" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right banner_left" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- NOTE Kraj banners slider -->

            <!-- NOTE HTML Pocetak feature benefit area -->

            <div class="row content_margine">

                <div class="col-xs-3 benefit_area_text">

                    <h4>We care about your budget and comfort.</h4>

                </div>
                <a class="benefit_area_link" href="#">
                    <div class="col-xs-3 benefit_area">

                        <span class="glyphicon glyphicon-star benefit_icon_size" aria-hidden="true"></span>
                        <h4>Best price guarantee</h4>

                    </div>
                </a>
                <a class="benefit_area_link" href="#">
                    <div class="col-xs-3 benefit_area">
                        <span class="glyphicon glyphicon-star benefit_icon_size" aria-hidden="true"></span>
                        <h4>Free delivery</h4>
                    </div>
                </a>
                <a class="benefit_area_link" href="#">
                    <div class="col-xs-3 benefit_area benefit_area_last_feature">
                        <span class="glyphicon glyphicon-star benefit_icon_size" aria-hidden="true"></span>
                        <h4>Click &#38; collect</h4>
                    </div>
                </a>
            </div>
            <!-- NOTE HTML Kraj feature benefit area -->

            <!-- NOTE HTML Pocetak velike banner sekcije -->
            <div class="row content_margine">
                <div class="col-md-6 banner_box_left">
                    <div class="big_banner_init">
                        <a class="discount_banner big_banner_style" href="#">
                            <h1>SALES &#38;</br>DISCOUNT</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quaerat.</p>
                            <div class="link_indicator">
                                <span>FIND OUT MORE</span>
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>
                            <img class="discount_banner_img" src="img/banners/discount_img.png" alt="">
                        </a>
                    </div>

                </div>
                <div class="col-md-6 banner_box_right">
                    <div class="big_banner_init">
                        <a class="bestbuy_banner big_banner_style" href="#">
                            <h1>BEST BUY</br>PRODUCTS</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quaerat.</p>
                            <div class="link_indicator">
                                <span>FIND OUT MORE</span>
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>
                            <img class="bestbuy_img" src="img/banners/bestbuy_img.png" alt="">
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
                            <h1>AKS MARIJA</h1>
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
                <div class="col-md-3 sm_banner_2">
                    <div class="sm_banner_init">
                        <a class="gift_card_banner" href="#">
                            <h2>GIFT CARD</h2>
                            <p>Each friend making a purchase over 100 with your code will get a free design gift and you'll earn 10 as credit.</p>
                            <div class="link_indicator sm_link_indicator">
                                <span>LEARN MORE</span>
                                <div class="arrow_init">
                                    <div class="arrow_indicator"></div>
                                </div>
                            </div>


                        </a>
                    </div>
                </div>
                <div class="col-md-3 sm_banner_3">
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
                <div class="col-md-2 sm_banner_4">
                    <div class="facebook_banner sm_banner_init">


                    </div>
                </div>

            </div>
            <!-- NOTE HTML Kraj male banner sekcije -->

            <!-- NOTE HTML Pocetak brend sekcije -->

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
                    </div>
                </div>

            </div>
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
                                <p>ontheline.com &#169; 2015.</p>
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
                    items: 4, //10 items above 1000px browser width
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


</body>

</html>
