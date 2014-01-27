$( document ).ready(function() {

 //   // call the plugin
	// $('#shows').parallax({ "coeff":-0.65, "start":1050 });
	// $('#showsBody').parallax({ "coeff":1.15, "start":1050 });

	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#home').parallax("50%", 0.1);
	$('#about').parallax("50%", 0.2);
	$('#signup').parallax("50%", 0.3);
	$('#shows').parallax("50%", 0.5);
	$('.bg').parallax("175%", 0.4);

});