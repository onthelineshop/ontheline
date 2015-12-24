<!DOCTYPE html>
<html>

<head>
    <title>{{IME APARATA}}</title>
    <link href="css/bootstrap.min.css" type="text/css" />
    <link href="css/bootstrap-theme.min.css" type="text/css" />
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
        </div>
        <div class="mainImg">
            <img />
        </div>
    </div>
</body>

</html>
