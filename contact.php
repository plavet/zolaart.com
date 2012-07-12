<?php 
if($_POST){    
    
	$email=Trim(stripslashes($_POST['req-email'])); 
	//send email    
	mail("arpad@verat.net", "Zolaart new subscriber",    
		"Subscriber email: " . $email); 
} 
?>

<!doctype html>
<html lang="en-US">
<html>

<head>

	<title>Zolaart | contact</title>

	<meta charset="utf-8">

    <meta name="description" content="" />

    <meta name="keywords" content=""/>

	<link rel="stylesheet" href="css/layout.css">
	
	<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js" type="text/javascript" ></script>
	<script src="js/jquery.form.js" type="text/javascript" ></script>
	<script src="js/zolaart.js" type="text/javascript" ></script>
<!--[if IE]>

	<link rel="stylesheet" href="css/ie.css">

<![endif]-->
<!--[if !IE 7]>

	<style type="text/css">

		#wrap {display:table;height:100%}

	</style>

<![endif]-->

</head>

<body>

	<div id="wrap">

		<div id="main" class="contact-page">

		<header>

			<a href="index.html" title="ZOLAART"><img class="logo" src="images/logo.png"></a> <h2 class="slogan">art sculpture textile</h2>

		</header>



		<nav>

			<ul class="navigacija">

				<li><a href="upcoming.html" title="Coming Soon">Upcoming</a>|</li>

				<li><a href="bio.html" title="Bio">Bio</a>|</li>

				<li><a href="work.html" title="Work">Work</a>|</li>

				<li><a href="http://www.etsy.com/shop/littleZola" title="Shop" target="_blank">Shop</a>|</li>

				<li><a href="#" class="current" title="Contact">Contact</a></li>

			</ul>

		</nav>



		<section class="contact">

			<p>

			I am available for commissions and custom work.<br> 
			For more information &amp; pricing, please contact me at;

			</p>

			<p>

			<a href="mailto:zola.art@gmail.com" title="etsy">zola.art@gmail.com</a><br>

			07857 822452

			</p>

			<p class="social">

			&lt;<a href="http://www.facebook.com/zolaart" title="facebook" target="_blank">facebook</a>&gt;<br><br>

			&lt;<a href="https://twitter.com/#!/ZolaArt" title="twitter" target="_blank">twitter</a>&gt;<br><br>

			&lt;<a href="http://www.etsy.com/shop/littleZola" title="etsy" target="_blank">etsy</a>&gt;

			</p>

			<p>
			Subscribe to receive occasional news and updates by email. Your email will not be shared with anybody else.
			</p>

			<form action="contact.php" id="contact" method="post">   
				<fieldset>     
					<div class="rowElem">
					<label for="req-email"></label>       
						<input name="req-email" class="required email" type="text">       
					</div>     
				</fieldset>
				<div class="rowElem">
		  		<label></label>   
				<input type="submit" value="Send" class="button">
        		</div> 
			</form> 
			<span class="success" style="display:none;">Thank you.</span>			

		</section>



		</div><!--/main-->

	</div><!--/wrap-->



<footer>

	<div class="footer-wrap">

	<a href="http://www.facebook.com/zolaart" title="facebook" target="_blank">facebook</a> | <a href="https://twitter.com/#!/ZolaArt" title="twitter" target="_blank">twitter</a> | <a href="http://www.etsy.com/shop/littleZola" title="etsy" target="_blank">etsy</a>     <span class="pull-right">web design by <a href="http://www.zolaart.com/" title="ZOLAART">ZOLAART</a> &amp; <a href="http://www.kilmulis.com" title="KILMULIS design" target="_blank">KILMULIS</a></span>

	</div>

</footer>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22952332-20']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
</body>

</html>