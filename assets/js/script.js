jQuery(document).ready(function() {

	// Scroll to class
	$('a[data-slide="slide"]').click(function(e){
		e.preventDefault();
		$('.asu').trigger('click');
		var target = $(this).data('slide-target');
		$("html, body").animate({
			scrollTop: $(target).offset().top - 80
		}, 600);
	})

	// Dynamic Scrolled Navbar
	function hasScrolled(){
		var navbar = $('.navbar');
		if (window.scrollY > 200) {
			navbar.addClass('scrolled');
		}else{
			navbar.removeClass('scrolled');
		}
	}
	$(window).scroll(function() {
		hasScrolled();
	});
	$(window).resize(function() {
		hasScrolled();
	});
	hasScrolled();

	// Dynamic Navbar
	$('.navbar-bars').click(function(e){
		e.preventDefault();
		$('.sidebar').addClass('active');
		$('.sidebar-overlay').addClass('active');
	});
	$('.sidebar-overlay').click(function(e){
		e.preventDefault();
		$('.sidebar').removeClass('active');
		$('.sidebar-overlay').removeClass('active');
	});
	// Sidebar Menu
	$('.sidebar__nav li').click(function() {
		$('.sidebar__nav li').removeClass('active');
		$(this).addClass('active');
	});

	// Animasi

	$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("slide");
        }
    });
    $(".slideanim-title").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("slide-title");
        }
    });
    $(".slideanim-ikon").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 500) {
          $(this).addClass("slide-ikon");
        }
    });
  });

});