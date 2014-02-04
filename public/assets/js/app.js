$( document ).ready(function() {         

	

	// var
	// 	mainNavbar = $('#topNav'),
	// 	homeNavbar = $('#home-nav-bar'),
	// 	navPos = homeNavbar.offset().top,
	// 	topOfWindow = $(window).scrollTop();
	// ;
	
	// if ( navpos = topOfWindow ){
	// 	homeNavbar.hide();
	// 	mainNavbar.show();
	// }

	//set for none scroll
	$('#nav').localScroll(800);
	/**
	  Script for adding parallax to elements
	  .parallax(xPosition, speedFactor, outerHeight) options:
	  xPosition - Horizontal position of the element
	  inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	  outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	**/
	$('.parallax').each(function(){
		var self = $(this);
		//check for xPosition data on element
		if ( self.attr('data-pos') ) {
			var xPosition = self.attr('data-pos');
	    } else {
	    	var xPosition =  '50%';
	    }
	    //check for Speed data on element
	    if ( self.attr('data-speed') ) {
			var speedFactor = self.attr('data-speed');
	    } else {
	    	var speedFactor =  0.2;
	    }
	    //check for height data on element
	    if ( self.attr('data-height') ) {
			var outerHeight = self.attr('data-height');
	    } else {
	    	var outerHeight =  true;
	    }
	    // start parallax function
		self.parallax(xPosition, speedFactor, outerHeight);
	});
});//end doc ready

//JS to add class for animations when  element is scrolled to
$(window).scroll(function() {
	// var mainNavbar = $('#topNav');
	// var sidebar = $('#home-nav-bar');
 //    $window = $(window);
 //    offset = sidebar.offset();
 //    topPadding = 0;   

	// if (($window.scrollTop() > offset.top) && !(mainNavbar.hasClass('show'))) {
 //        sidebar.hide();
 //        mainNavbar.show();
 //        mainNavbar.addClass('show');
 //    } else if ($window.scrollTop() < offset.top) {
 //        sidebar.show();
 //        mainNavbar.hide();
 //        mainNavbar.removeClass('remove');
 //    }

	$('.animatedElement').each(function(){
		var 
			self = $(this),
			imagePos = self.offset().top,
			topOfWindow = $(document).height(),
			animationClass = self.attr('data-animation')
		;

		if ((imagePos < topOfWindow+100) && !(self.hasClass(animationClass))) {
			$(this).addClass(animationClass);
			console.log('pos: ' + imagePos + ', win: ' + topOfWindow + ', class: ' + animationClass);
		}
	});
});