$(document).ready(function () {

    const pHeight = $('.header p').height();

    // When header section clicked expand
    $(".header").click(function () {
        if ($(".header p").css('display') == 'none') {
            //Show element
            $(".header p").show(400);
            $(".header .fas").css({"transform": "rotate(180deg)"});
        } else {
            //Hide element
            $(".header p").hide(400);
            $(".header .fas").css({"transform": "rotate(0deg)"});
        }

    });

});