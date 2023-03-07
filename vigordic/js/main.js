
var $elementToAnimation1 = jQuery('.animation-element1');
var $elementToAnimation2 = jQuery('.animation-element2');
var $elementToAnimation3 = jQuery('.animation-element3');
var $elementToAnimation4 = jQuery('.animation-element4');
var $window = jQuery(window);

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    jQuery.each($elementToAnimation1, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
            $element.addClass('redlightning');
        } else {
            $element.removeClass('redlightning');
        }
    });
    jQuery.each($elementToAnimation2, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
            $element.addClass('chartanim');
        } else {
            $element.removeClass('chartanim');
        }
    });
    jQuery.each($elementToAnimation3, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
            $element.addClass('rotate');
        } else {
            $element.removeClass('rotate');
        }
    });
    jQuery.each($elementToAnimation4, function () {
        var $element = jQuery(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) && (element_top_position + 150 <= window_bottom_position)) {
            $element.addClass('imgrotate');
        } else {
            $element.removeClass('imgrotate');
        }
    });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
if (document.getElementById('countdownTimer')) {
    var min = document.getElementById('countdownTimer').getAttribute('data-minutes');
    var sec = document.getElementById('countdownTimer').getAttribute('data-seconds');

    function countDown() {
        sec--;
        if (sec == -01) {
            sec = 59;
            min = min - 1;
        } else {
            min = min;
        }
        if (sec <= 9) {
            sec = "0" + sec;
        }
        time = (min <= 9 ? "<span class=\"newzero\">0</span>" + min : min) + "<span class=\"colon\">:</span>" + sec;
        if (document.getElementById) {
            document.getElementById('countdownTimer').innerHTML = time;
        }
        SD = window.setTimeout("countDown();", 1000);
        if (min == '00' && sec == '00') {
            sec = "00";
            window.clearTimeout(SD);
        }
    }

    window.onload = countDown;
}
$(document).ready(function () {
    $('.answer').hide();
    $('.accordion .question').click(function () {
        $(this).toggleClass('minus');
        $(this).next().slideToggle();
    });
});
$(document).ready(function () {
    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');
        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');
        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })
})
$(document).ready(function () {
    $('.ingredient1').mouseenter(function () {
        $('.redlightning').css('transform', 'rotate(75deg)');
        $('.box8 .flexcontainer div img').css('box-shadow', 'none');
        $('img.ingredient1').css('box-shadow', '0px 0px 16px 1px rgba(255,255,255,0.5)');
    });
    $('.ingredient2').mouseenter(function () {
        $('.redlightning').css('transform', 'rotate(18deg)');
        $('.box8 .flexcontainer div img').css('box-shadow', 'none');
        $('img.ingredient2').css('box-shadow', '0px 0px 16px 1px rgba(255,255,255,0.5)');
    });
    $('.ingredient3').mouseenter(function () {
        $('.redlightning').css('transform', 'rotate(-65deg)');
        $('.box8 .flexcontainer div img').css('box-shadow', 'none');
        $('img.ingredient3').css('box-shadow', '0px 0px 16px 1px rgba(255,255,255,0.5)');
    });
});
if ($(window).width() > 1170) {
    $(".tooltipbtn").hover(function () {
        jQuery(this).prev().stop(true).fadeTo(200, 1);
    }, function () {
        jQuery(this).prev().stop(true).hide();
    });
} else {
    jQuery('.tooltipbtn').click(function () {
        jQuery(this).prev().fadeToggle(500);
    });
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}
today = mm + '/' + dd + '/' + yyyy;
$('.todayday').append(" " + today);
$('.closetop').click(function () {
    $('.belttop').slideUp();
    setCookie('beltseen', '1', 7);
});
var beltseen = getCookie('beltseen');
if (beltseen) {
    $('.belttop').hide();
}