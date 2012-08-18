$('.has_children').addClass('dropdown');
$('.has_children a').addClass('dropdown-toggle').attr("data-toggle","dropdown");
$('.has_children > a').append(' <b class="caret"></b>');
$('.has_children > ul').addClass('dropdown-menu');

$('.success-box').addClass('alert alert-success').prepend('<button class="close" data-dismiss="alert">×</button>');
$('.error-box').addClass('alert alert-error').prepend('<button class="close" data-dismiss="alert">×</button>');
$('.notice-box').addClass('alert alert-block').prepend('<button class="close" data-dismiss="alert">×</button>');

// Initiate Page-Slide
/* $(".open").pageslide(); */

// Detect and change animation classes for mobile devices

/*
if ($(window).width() <= 767) {
		    $('#navbar').removeClass('bounceInDown').addClass('fadeInDown');
		    $('#globalnav').removeClass('bounceInLeft').addClass('fadeInLeft');
		    $('#enteridhere, #enteridhere').removeClass('fadeIn').removeClass('animated');
		   }
*/