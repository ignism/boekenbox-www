<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Boekenbox
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" style="padding-bottom: 40px;">
	<div class="site-info">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-sm-3 col-xs-offset-1">
					<p>
						De verse leeswaren box is een pilot van de Bibliotheek Eindhoven
					</p>
					<p>
						www.bibliotheekeindhoven.nl
					</p>
				</div>
				<div class="col-xs-8 col-sm-3 col-xs-offset-1">
					<p>
						Voor vragen of opmerkingen neem contact op met (+31) 445 65 24
					</p>
				</div>
				<div class="col-xs-6 col-sm-3 col-xs-offset-1">
					<div class="footer-logo--wrapper">
						<img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/footer-logo.svg">
					</div>
				</div>
			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/commons.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/app.bundle.js"></script>

</body>
</html>
