<!DOCTYPE html>
<html>
 	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>greenishSlides</title>
		<link rel="stylesheet" type="text/css" href="design.css">
		<script type="text/javascript" src="jquery-1.5.0.js"></script>

<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://jmar777.googlecode.com/svn/trunk/js/jquery.easing.1.3.js"></script>-->
		<script type="text/javascript" src="jquery.greenishSlides-0.0.1.js"></script>
		<script type="text/javascript">
			(function($) {
				$(document).ready(function() { 
 					$(".greenishSlides").greenishSlides();
					
/*					$(window).resize(function () {
						$.gS.setSlides($(".greenishSlides"));
					});
*/				});
			})(jQuery);
		</script>		
	</head>
	<body>
		<article class="greenishSlides">
			<section class="one"><div>1</div></section>
			<section class="two"><div>2</div></section>
			<section class="three active"><div>3</div></section>
			<section class="four minWidth"><div>4</div></section>
			<section class="five"><div>5</div></section>
		</article>
	</body>
</html>
