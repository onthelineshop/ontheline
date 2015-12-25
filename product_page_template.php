<!DOCTYPE html>
<html>

<head>
    <title>{{IME APARATA}}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
    <!-- CSS for product pages -->
    <link rel="stylesheet" href="css/product.css" type="text/css" />
</head>

<body>
    <!-- DEO SA PRETRAGOM I FILTERIMA IDE OVDE -->
    <div class="specials">
        <div class="gur col-md-4">
            <img src="img/euro48.svg" alt="euro" />
            <h1>BEST PRICE GUARANTEE</h1>
        </div>
        <div class="gur col-md-4">
            <img src="img/delivery55.svg" alt="euro" />
            <h1>FREE DELIVERY</h1>
        </div>
        <div class="gur col-md-4">
            <img src="img/euro48.svg" alt="euro" />
            <h1>CLICK & COLLECT</h1>
        </div>
    </div>
    <!-- TODO: Path should look Home > Washing Machines > Gorenje washing machines W62S2 6Kg. USE explode() -->
    <p class="path">
        <?php echo getcwd() . "\n" . "{{IME APARATA}}"; ?>
    </p>
    <div class="product">
        <div class="porTumb">
            <img src="img/product/1.jpg" />
            <img src="img/product/2.jpg" />
            <img src="img/product/3.jpg" />
            <img src="img/product/4.jpg" />
        </div>
        <div class="mainImg">
            <img src="img/product/1.jpg" />
            <div class="share">
                <button class="compare">COMPARE</button>
                <button class="share">SHARE</button>
            </div>
        </div>
        <div class="specPrac">
            <img src="img/brands/gorenje.png" class="brand" />
            <h1 class="name">Gorenje washing machines W62S2/Y 6Kg</h1>
            <!-- TODO: Reviews and score -->
            <ul class="prodInfo">
                <li>Whisper quiet motor that's also longer lasting</li>
                <li>Textured drum takes extra care of clothes</li>
                <li>Allergy setting, great for sensitive skin</li>
                <li>Pick a wash that's 60% quicker or saves 30% energy</li>
                <li>Dimensions (cm) - H85 x W60 x D55</li>
                <!-- TODO: Read full and show less -->
                <p>Read full product information</p>
                <table class="price">
                    <tr>
                        <td rowspan="2" class="new">499&euro;</td>
                        <td class="old">Old price: 599&euro;</td>
                    </tr>
                    <tr>
                        <td class="save">Save: 100&euro;</td>
                    </tr>
                </table>
                <div class="stock">In stock</div>
                <button type="button" class="addBasekt">Add to basket &#62;</button>
            </ul>
        </div>
    </div>
    <div class="prodSpec">
        <p class="prInfTab" id="PI">Product Information</p>
        <p class="prInfTab" id="OV">Overview</p>
        <p class="prInfTab" id="RV">Reviews</p>
        <p class="prInfTab" id="FQ">FAQ</p>
        <p class="prInfTab" id="PF">Pay on Finance</p>
        <span class="laLine"></span>
        <table class="productTabs">
            <tr>
                <td class="head"></td>
                <td class="specTd">
                    <ul>
                        <li>Colour: White</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
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
                        <li>Door opening angle: 180 °</li>
                        <li>Reversible drum action</li>
                        <li>Direct discharge of condensate AutoDrain</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <div class="suggesView">
        <p class="also">Customers Who Viewed This Item Also Viewed</p>
        <div class="sugest">
            <img src="img/product/1.jpg" />
            <img src="img/product/2.jpg" />
            <img src="img/product/3.jpg" />
            <img src="img/product/4.jpg" />
        </div>
    </div>
</body>

</html>
