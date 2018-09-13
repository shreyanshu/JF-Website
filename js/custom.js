/*global jQuery:false */
(function ($) {
    $(window).load(function(){
      $("#navigation").sticky({ topSpacing: 0 });
    });
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0
      }
    );
    wow.init();
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			var nav = $($anchor.attr('href'));
			if (nav.length) {
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');

			event.preventDefault();
			}
		});
		$('a.totop,a#btn-scroll,a.btn-slide').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

		//owl carousel
	$('#owl-works').owlCarousel({
            items : 4,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
        });

	//nivo lightbox
	$('.owl-carousel .item a').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
	});


	jQuery('.appear').appear();
	jQuery(".appear").on("appear", function(data) {
			var id = $(this).attr("id");
			jQuery('.nav li').removeClass('active');
			jQuery(".nav a[href='#" + id + "']").parent().addClass("active");
		});

		//stats
		var runOnce = true;
		jQuery(".stats").on("appear", function(data) {
			var counters = {};
			var i = 0;
			if (runOnce){
				jQuery('.number').each(function(){
					counters[this.id] = $(this).html();
					i++;
				});
				jQuery.each( counters, function( i, val ) {
					//console.log(i + ' - ' +val);
					jQuery({countNum: 0}).animate({countNum: val}, {
					  duration: 3000,
					  easing:'linear',
					  step: function() {
						jQuery('#'+i).text(Math.floor(this.countNum));
					  }
					});
				});
				runOnce = false;
			}
		});

		//parallax
        if ($('#parallax1').length  || $('#parallax2').length)
        {
			$(window).stellar({
				responsive:true,
                scrollProperty: 'scroll',
                parallaxElements: false,
                horizontalScrolling: false,
                horizontalOffset: 0,
                verticalOffset: 0
            });

        }


	$("#js-rotating").Morphext({
		// Animation type (refer to Animate.css for a list of available animations)
		animation: "fadeInDown",
		// An array of words to rotate are created based on this separator. Change it if you wish to separate the words differently (e.g. So Simple | Very Doge | Much Wow | Such Cool)
		separator: ",",
		// The delay between each word in milliseconds
		speed: 3000
	});

	//nicescroll
	$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"0px",cursorwidth:"10px",cursorcolor:"#555",cursoropacitymin:.5});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#555",cursoropacitymin:.1});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);

})(jQuery);
$(window).load(function() {
	$(".loader").delay(100).fadeOut();
	$("#page-loader").delay(200).fadeOut("slow");
});


// Javascript to validate user registration
function validateUser(){

    $('#name').on('input', function() {

        var input=$(this);
        var is_name=input.val();

        if(is_name ===''){
            $("#error_name").text("Please enter name").addClass("valid");
        }else{
            $("#error_product_name").text("");
        }
    });

    $('#email').on('input',function () {
        var input=$(this);
        var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
        var is_email=input.val();
        var compare=re.test(is_email);
        if(is_email === ''){
            $("#error_email").text("Please enter your email").addClass("valid");
        }else{

            if(!compare){
                $("#error_email").text("Please enter valid Email").addClass("valid");
            }else {
                $("#error_email").text("");
            }
        }
    });

    $('#password').on('input',function () {
        var input=$(this);
        var is_password=input.val();
        if(is_password === ''){
            $("#error_password").text("Please enter the password").addClass("valid");
        }else{
            if(is_password.length <= 8){
                $("#error_password").text("Password length should be more than 8").addClass("valid")
            }else{
                $("#error_password").text("");
            }
        }
    });
    $("#product_form_1").on("submit",function(){

        var input=$('#name');
        var is_name=input.val();

        if(is_name ===''){
            $("#error_name").text("Please enter name").addClass("valid");
            return false;
        }else{
            $("#error_product_name").text("");
        }

        input=$('#email');
        var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
        var is_email=input.val();
        var compare=re.test(is_email);
        if(is_email === ''){
            $("#error_email").text("Please enter your email").addClass("valid");
            return false;
        }else{

            if(!compare){
                $("#error_email").text("Please enter valid Email").addClass("valid");
                return false;

            }else {
                $("#error_email").text("");
            }
        }


        input=$('#password');
        var is_password=input.val();
        if(is_password === ''){
            $("#error_password").text("Please enter the password").addClass("valid");
            return false;
        }else{
            if(is_password.length <= 8){
                $("#error_password").text("Password length should be more than 8").addClass("valid")
                return false
            }else{
                $("#error_password").text("");
            }
        }

    });
}

// validate Password

function validatePassword(){
    $('#password').on('input',function () {
        var input=$(this);
        var is_password=input.val();
        if(is_password === ''){
            $("#error_password").text("Please enter the password").addClass("valid");
        }else{
            if(is_password.length <= 8){
                $("#error_password").text("Password length should be more than 8").addClass("valid")
            }else{
                $("#error_password").text("");
            }
        }
    });

    $('#re_password').on('input',function () {

        var input=$('#re_password');
        var input2=$('#password');
        var is_re_password=input.val();
        var is_password=input2.val();
        if(is_re_password === ''){
            $("#error_re_password").text("Please enter the password again").addClass("valid");
        }else{
            if(is_re_password !== is_password){
                $("#error_re_password").text("Password does not match").addClass("valid")
            }else{
                $("#error_re_password").text("");
            }
        }
    });

    $("#password_form").on("submit",function(){
        var input2=$('#password');
        var is_password=input2.val();
        if(is_password === ''){
            $("#error_password").text("Please enter the password").addClass("valid");
            return false;
        }else{
            if(is_password.length <= 8){
                $("#error_password").text("Password length should be more than 8").addClass("valid")
                return false;
            }else{
                $("#error_password").text("");
            }
        }
        var input=$('#re_password');
        var is_re_password=input.val();
        var is_password=input2.val();
        if(is_re_password === ''){
            $("#error_re_password").text("Please enter the password again").addClass("valid");
            return false;
        }else{
            if(is_re_password !== is_password){
                $("#error_re_password").text("Password does not match").addClass("valid");
                return false;
            }else{
                $("#error_re_password").text("");
            }
        }
    });
}



