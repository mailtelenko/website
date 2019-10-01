var dark_mode_enabled = false;

$(document).ready(function () {

    // Get current hour
    var currentHour = new Date($.now()).getHours();

    // Check what time it is and if the dark theme should be applied
    if (currentHour >= 19 || currentHour <= 8) {
        toggle_dark_mode();
    }

    // Get original height of text block
    const pHeight = $('.header p').height();

    // When header section clicked expand
    $(".header").click(function (e) {
        if (event.target.id != "toggle_light")
            toggleHeader();
    });

    // When contact button clicked
    $("#contact_button").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#contact_section").offset().top
        }, 800);
    });

    // When contact button clicked
    $("#about_button").click(function () {
        toggleHeader()
    });

    // When dark mode toggle clicked
    $("#dark_mode_toggle").click(function (e) {
        toggle_dark_mode();
    });

    AOS.init();

});

// Will display or hide the header when called
function toggleHeader() {
    if ($(".header #description").css('display') == 'none') {
        //Show element
        $(".header #description").slideDown(400);
        $(".header .fas").css({
            "transform": "rotate(180deg)"
        });

        // Hide extra buttons
        $("#lower_heading_section").slideUp(300);
    } else {
        //Hide element
        $(".header #description").slideUp(400);
        $(".header .fas").css({
            "transform": "rotate(0deg)"
        });

        // Hide extra buttons
        $("#lower_heading_section").slideDown(300);
    }
}

function toggle_dark_mode() {
    if (!dark_mode_enabled) {
        // Reset CSS colour variables to dark theme
        document.querySelector(":root").style.setProperty('--background_colour', "#2b2b2b");
        document.querySelector(":root").style.setProperty('--container_colour', "#252526");
        document.querySelector("body").style.setProperty('--text_colour', "#ffffff");
        document.querySelector("body").style.setProperty('--text_hover', "#ffffff");

        // Change tint colour (lighter)
        $(".header p").css("background-color", "rgba(255, 255, 255, .04)");
        $("#dark_mode_toggle").css("background-color", "rgba(255, 255, 255, .04)");

    } else {
        // Reset CSS colour variables to light theme
        document.querySelector(":root").style.setProperty('--background_colour', "#f8f8f8");
        document.querySelector(":root").style.setProperty('--container_colour', "#ffffff");
        document.querySelector("body").style.setProperty('--text_colour', "#000000");
        document.querySelector("body").style.setProperty('--text_hover', "#ffffff");

        // Change tint colour (darker)
        $(".header p").css("background-color", "rgba(0, 0, 0, .03)");
    }

    dark_mode_enabled = !dark_mode_enabled; // Set new value to var
}