<!DOCTYPE html>
<html>

<head>
    <title>{{IME APARATA}}</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
    <!-- CSS for product pages -->
    <link rel="stylesheet" href="css/product.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">

    <!--  BX SLIDER STYLE  -->
    <link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
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
        <!-- DEO SA PRETRAGOM I FILTERIMA IDE OVDE -->

        <div class="container">
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


            <!-- TODO: Path should look Home > Washing Machines > Gorenje washing machines W62S2 6Kg. USE explode() -->
            <!--
         <p class="path">
    <?php echo getcwd() . "\n" . "{{IME APARATA}}"; ?>
</p>
-->


            <div class="product">
                <div class="porTumb">
                    <ul class="bxslider">
                        <li><img src="img/product/1.jpg" class="imgTumb" /></li>
                        <li><img src="img/product/2.jpg" class="imgTumb" /></li>
                        <li><img src="img/product/3.jpg" class="imgTumb" /></li>
                        <li><img src="img/product/4.jpg" class="imgTumb" /></li>
                        <li><img src="img/product/5.jpg" class="videoTumb" href="img/Gorenje%20Washing%20machine%20IFA.mp4" /></li>
                    </ul>
                </div>
                <div class="mainImg">
                    <img src="" class="img-responsive" id="mainImg" />
                    <div class="share">
                        <button class="compareProd"><i class="fa fa-clone"></i> COMPARE</button>
                        <button class="shareProd"><i class="fa fa-share-square-o"></i> SHARE</button>
                    </div>
                </div>
                <div class="specPrac">
                    <img src="img/brands/gorenje.png" class="brandLogo" />
                    <h1 class="nameProd">Gorenje washing machines W62S2/Y 6Kg</h1>
                    <!-- TODO: Reviews and score -->
                    <ul class="prodInfo">
                        <li>Whisper quiet motor that's also longer lasting</li>
                        <li>Textured drum takes extra care of clothes</li>
                        <li>Allergy setting, great for sensitive skin</li>
                        <li>Pick a wash that's 60% quicker or saves 30% energy</li>
                        <li>Dimensions (cm) - H85 x W60 x D55</li>
                        <!-- TODO: Read full and show less -->
                        <a class="prod-info-link" href="#link-to-prod-info">
                            <p>Read full product information</p>
                        </a>
                        <table class="price">
                            <tr>
                                <td rowspan="2" class="newPrice">499&euro;</td>
                                <td class="oldPrice">Old price: 599&euro;</td>
                            </tr>
                            <tr>
                                <td class="savePrice">Save: 100&euro;</td>
                            </tr>
                        </table>
                        <div class="stockProd">In stock</div>
                        <button type="button" class="addBasket">Add to basket <i class="glyphicon glyphicon-chevron-right"></i></button>
                    </ul>
                </div>
            </div>
            <div id="link-to-prod-info" class="prodSpec">
                <p class="prInfTab active" id="PI">Product Information</p>
                <p class="prInfTab" id="OV">Overview</p>
                <p class="prInfTab" id="RV">Reviews</p>
                <p class="prInfTab" id="FQ">FAQ</p>
                <p class="prInfTab" id="PF">Pay on Finance</p>
                <span class="laLine"></span>
                <table class="productTabs activePr">
                    <tr>
                        <td class="head"></td>
                        <td class="specTd">
                            <ul>
                                <li>Colour: Blood Red</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Efficiency</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Control</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Programmes</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Features</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">SensorIQ technology</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Safety and durability</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="head">Technical data</td>
                        <td class="specTd">
                            <ul>
                                <li>Dryer load: 1-8 kg</li>
                                <li>IonTech technology</li>
                                <li>TwinAir</li>
                                <li>Heat pump</li>
                                <li>Drum volume: 120 l</li>
                                <li>Drum illumination with LED light</li>
                                <li>Porthole diameter: 35 cm</li>
                                <li>Door opening angle: 180&deg;</li>
                                <li>Reversible drum action</li>
                                <li>Direct discharge of condensate AutoDrain</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <table class="overview">
                    <tr>
                        <td class="head"></td>
                        <td class="specTd">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- TODO: COULD ALSO BUY WITH PRODUCTS (CABLES, CONNECTORS etc)   -->
        <!--  SUGGESTIONS  -->
        <div class="container">
            <div class="suggesView">
                <p class="also">Customers Who Viewed This Item Also Viewed</p>
                <div class="sugest">
                    <div class="slide"><img src="img/product/1.jpg" /></div>
                    <div class="slide"><img src="img/product/2.jpg" /></div>
                    <div class="slide"><img src="img/product/3.jpg" /></div>
                    <div class="slide"><img src="img/product/4.jpg" /></div>
                </div>
            </div>
        </div>

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






        <!-- TODO: SIMILAR PRODUCTS  -->
        <!--  jQuery  -->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/multizoom.js"></script>
        <script src="js/product.js" type="text/javascript"></script>
        <script src="js/jquery.bxslider/jquery.bxslider.min.js" type="text/javascript"></script>

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


</body>

</html>
