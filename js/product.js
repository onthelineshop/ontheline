// NOTES : SMART ZOOM + BIG PIC

jQuery(document).ready(function ($) {
    var image;

    /*    INIT IMAGE ON CLICK    */
    $(".imgTumb").click(function () {
        if (!$("#mainImg").length) {
            console.log($("#mainImg").length);
            $(".mainImg").prepend("<img src=\"img/product/1.jpg\" class=\"img-responsive\" id=\"mainImg\"/>");
        }
        if ($("#mainVideo").length) {
            $("#mainVideo").remove();
        }
        image = $(this).attr("src");
        $("#mainImg").attr("src", image);
        $('#mainImg').addimagezoom({ // single image zoom
            zoomrange: [3, 10],
            magnifiersize: [460, 570],
            magnifierpos: 'right',
            cursorshade: true,
            largeimage: image //<-- No comma after last option!
        });
    });

    /*ZOOM ON INIT*/
    image = $(".imgTumb").first().attr("src");
    $("#mainImg").attr("src", image);

    $('#mainImg').addimagezoom({ // single image zoom
        zoomrange: [3, 10],
        magnifiersize: [460, 570],
        magnifierpos: 'right',
        cursorshade: true,
        largeimage: image //<-- No comma after last option!
    });

    //    VIDEO INIT
    $(".videoTumb").click(function () {
        if ($("#mainImg").length) {
            $("#mainImg").remove();
            $(".zoomtracker").remove();
        }
        var video = $(this).attr("href");
        if (!$("#mainVideo").length) {
            $(".mainImg").prepend("<video class=\"video\" id=\"mainVideo\" controls autoplay><source src=\"" + video + "\" type=\"video/mp4\"></video>");
        }
    });

    /* SLIDER */
    $(document).ready(function () {
        $('.sugest').bxSlider({
            slideWidth: 200,
            minSlides: 2,
            maxSlides: 5,
            moveSlides: 2,
            slideMargin: 10
        });
    });
    $('.bxslider').bxSlider({
        mode: 'vertical',
        slideMargin: 5,
        minSlides: 2,
        maxSlides: 5
    });

    /* DIV CHANGE */
    $(".prInfTab").click(function () {
        if ($(".active").length) {
            $(".active").removeClass("active");
        }
        $(this).addClass("active");
        switch ($(this).attr("id")) {
        case "PI":
            if ($(".activePr").length) {
                $(".activePr").removeClass("activePr");
            }
            $(".productTabs").addClass("activePr");
            break;
        case "OV":
            if ($(".activePr").length) {
                $(".activePr").removeClass("activePr");
            }
            $(".overview").addClass("activePr");
            break;
        case "RV":
            if ($(".activePr").length) {
                $(".activePr").removeClass("activePr");
            }
            $(".review").addClass("activePr");
            break;
        case "FQ":
            if ($(".activePr").length) {
                $(".activePr").removeClass("activePr");
            }
            $(".faq").addClass("activePr");
            break;
        case "PF":
            if ($(".activePr").length) {
                $(".activePr").removeClass("activePr");
            }
            $(".payon").addClass("activePr");
            break;
        }
    });

});
