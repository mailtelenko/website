// Variable declaration
var dark_mode_enabled = false;

// When DOM loaded
$(document).ready(function () {

    // Get current hour
    var currentHour = new Date($.now()).getHours();

    // Check what time it is and if the dark theme should be applied
    if (currentHour >= 19 || currentHour <= 8) {
        toggle_dark_mode();
    }

    // When expandable section is clicked, expand it
    $(".expandable").click(function (e) {
        toggleExpand(e);
    });

    // When contact button clicked scroll to section
    $("#contact_button").click(function () {
        ("width", "200px")
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#contact_section").offset().top
        }, 800);
    });


    // When dark mode toggle clicked
    $("#dark_mode_toggle").click(function () {
        toggle_dark_mode();
    });

    // Initialize animate on scroll
    AOS.init();
});

// Change height of info card when clicked
$(".resume_item").click(function () {
    console.log($(".under_fold").css('display'));
    // Check if clicked item is open, if so, close it
    if ($(this).find(".under_fold").css("display") != "none") {
        close_all_resume_items();
    } else {
        $("#sneaky_overlay").fadeIn(200);
        $(this).css({
            'overflow': 'visible',
            "z-index": "10",
            "transform": "scale(1.05,1.05) translateY(-10px)"
        });
        $(this).find(".under_fold").slideDown(300);
    }
});

$("#sneaky_overlay").click(function(){
    close_all_resume_items();
});

function close_all_resume_items() {
    $(".under_fold").slideUp(300);
    $("#sneaky_overlay").fadeOut(200);
    setTimeout(function () {
        $(".resume_item").css({
            "z-index": "1",
            "transform": "none"
        });
    }, 300);
}

// Display resume page
function display_resume() {
    $("#header_container").delay(400).animate({
        "width": "25%",
        "left": "0%"
    }, 600);
    $("#resume_section").delay(1050).fadeIn(550);
    $("#description").fadeOut(200);
    $("#main_nav").delay(150).fadeOut(200);
    $("#res_nav").delay(900).fadeIn(400);
}

function hide_resume() {
    $("#header_container").delay(650).animate({
        "width": "50%",
        "left": "25%"
    }, 500);
    $("#resume_section").fadeOut(550);
    $("#main_nav").delay(1150).fadeIn(350);
    $("#description").delay(1050).fadeIn(200);
    $("#res_nav").delay(450).fadeOut(300);
}
//display_resume();

// Will display or hide the header when called
function toggleExpand(e) {
    $(e.currentTarget).find(".hidable").slideToggle(300);
    $(".header .fas").css({
        "transform": "rotate(180deg)"
    });
}

// Changes data-theme attribute to dark or light depending on current value
function toggle_dark_mode() {
    // Check if current mode is dark and change attribute accordingly
    if (document.documentElement.getAttribute('data-theme') != "dark")
        document.documentElement.setAttribute('data-theme', 'dark');
    else
        document.documentElement.setAttribute('data-theme', 'light');
}