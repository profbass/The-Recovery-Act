$( document ).ready(function() {  
	// set var for is mobile device
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var isMobile = true;
	}
	//codument vars
	var 
		win = $(window),
		nav = $('#nav'),
		animatedObj = $('.animatedElement'),
		parallaxEl = $('.parallax')
	; 
	

	if (!isMobile){ 
		//load charts on scroll function
		function animateElement(i, el, animationClass){
			win.scroll(function(event) {
				var self = $(el);
				//console.log('scrolling');
				if (self.visible(true) && self.hasClass('animated') == false) {
			      	self.addClass('animated ' + animationClass);
		    	}
		    });
		}
		
		animatedObj.each(function(i, el) {
		    var 
		    	self = $(el),
		    	animationClass = self.attr('data-animation')
		    ;
		    if (self.visible(true) && self.hasClass('animated') == false) {
		      	self.addClass('animated ' + animationClass);
		    } else {
		    	animateElement(i, el, animationClass);
		    } 
		});
	}

	
	/**
	  Script for adding parallax to elements
	  .parallax(xPosition, speedFactor, outerHeight) options:
	  xPosition - Horizontal position of the element
	  inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	  outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	**/
	
	// only set this on none mobile devices
	if (!isMobile){ 
		//set for none scroll
		nav.localScroll(800);

		parallaxEl.each(function(){ collection, callback
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
	}
});//end doc ready
