<div class="dgcopyright">
	<div class="container">
	<div class="row" style="padding:20px;">
		<div class="col-lg-4">
			<div class="df_contact">
				<h5 class="widget_title df_bgcolor">Get Touch With Us<span></span></h5>
				<p>Zerobug Academy </br> No.19, Little mount,</br>Velachery Road,</br>Saidapet, Chennai-600 015</br>PH: +91-9750061584 / 9791040581</p>
			</div> 


		</div>
		<div class="col-lg-4">
			<div class="df_contact">
				<h5 class="widget_title df_bgcolor">Trending Courses<span></span></h5>
				<ul>
				<li>Web Technology</li>
				<li>Web design</li>
				<li>Java</li>
				<li>Hadoop</li>
				<li>Networking</li>
				</ul>
			</div>
		</div>
	
		<div class="col-lg-4">
			
		</div>		
	</div>
	
	</div>
	<div class="footer-copyright">
		<div class="container">
		<div class="row">
			<div class="col-md-6">
					<p>&copy; Copyright 2017. All Rights Reserved. zerobug Academy</p>
				</div>
				</div>
		</div>
	</div>
</div>
	
</body>

<!--End of Tawk.to Script-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script src="js/boot-jquery.js"></script>
 <!-- <script type="text/javascript" src="js/mdb.min.js"></script>-->
<script src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jssor.slider.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/formval.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59f47b364854b82732ff8687/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
/*$(document).ready(function() {
  //alert("skjfsd");
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 180) {
		//alert("sfdsf")
      $('#navbar_header').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 181) {
      $('#navbar_header').removeClass('navbar-fixed');
    }
  });
});*/
/*$(document).ready(function () {
    $(".sub_hover").hover(function () {
     $(this).find('ul').slideToggle('medium');
    });
});*/


   $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
(function( $ ) {
    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
})(jQuery);	
 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
  
 
</script>
</html>