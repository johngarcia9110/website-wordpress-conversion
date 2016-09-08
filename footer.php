<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abcosolar
 */

?>

	</div><!-- #content -->

	<footer>
	<div class="container">
		<div class="copyright">
			&copy; 2016 <a href="index.html">ABCO Energy, Inc.</a> All Rights Reserved.
		</div>
		<div class="footer-links">
			    <a href="http://abcoenergy.com/privacy-policy/">Privacy Policy</a>
    <a href=" http://abcoenergy.com/disclaimer/">Disclaimer</a>
    <a href="sitemap.html">Sitemap</a>
		</div>
	</div>
</footer>
<script type="text/javascript">
  var jqxhr = jq.get( "http://www.abcoenergy.com/api/v1/quote", function(data) {
    populateQuoteBox(data);
  });
</script>

<script>
    var $buoop = {
    	c: 2
    };

    function $buo_f() {
    	var e = document.createElement("script");
    	e.src = "//browser-update.org/update.min.js";
    	document.body.appendChild(e);
    }
    try {
    	document.addEventListener("DOMContentLoaded", $buo_f, false)
    } catch (e) {
    	window.attachEvent("onload", $buo_f)
    }
</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
