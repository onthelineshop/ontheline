// NOTES : SMART ZOOM + BIG PIC

jQuery(document).ready(function ($) {
    var image;
    $(".imgTumb").click(function () {
        image = $(this).attr("src");
        $("#mainImg").attr("src", image);
        console.log(image);
        console.log("empty space");
        $('#mainImg').addimagezoom({ // single image zoom
            zoomrange: [3, 10],
            magnifiersize: [400, 400],
            magnifierpos: 'right',
            cursorshade: true,
            largeimage: image //<-- No comma after last option!
        });
    });

    $(".videoTumb").click(function (){

    });
});
