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
        <div class="gur">
            <img src="img/euro48.svg" alt="euro" />
            <p>BEST PRICE GUARANTEE</p>
        </div>
        <div class="gur">
            <img src="img/delivery55.svg" alt="euro" />
            <p>FREE DELIVERY</p>
        </div>
        <div class="gur">
            <img src="img/euro48.svg" alt="euro" />
            <p>CLICK & COLLECT</p>
        </div>
    </div>
    <!-- TODO: Path should look Home > Washing Machines > Gorenje washing machines W62S2 6Kg. USE explode() -->
    <p class="path"><?php echo getcwd() . "\n" . "{{IME APARATA}}"; ?></p>
    <div class="product">
        <div class="porTumb">
            <img src="img/product/1.jpg"/>
            <img src="img/product/2.jpg"/>
            <img src="img/product/3.jpg"/>
            <img src="img/product/4.jpg"/>
        </div>
        <div class="mainImg">
            <img src="img/product/1.jpg"/>
            <div class="share">
                <button class="compare">COMPARE</button>
                <button class="share">SHARE</button>
            </div>
        </div>
        <div class="specPrac">
            <img src="img/brands/gorenje.png" class="brand"/>
            <p class="name">Gorenje washing machines W62S2/Y 6Kg</p>
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
            </ul>
        </div>
    </div>
</body>

</html>
