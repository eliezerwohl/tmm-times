
</div></div></div>
<footer class="text-center">
<div class="social-container">
		<a target="_blank" href="https://www.facebook.com/<?php the_field('facebook','option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a target="_blank" href="https://twitter.com/<?php the_field('twitter','option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a target="_blank" href="https://www.instagram.com/<?php the_field('instagram','option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a target="_blank" href="https://www.pinterest.com/<?php the_field('pinterest','option'); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
	</div>
	<div>
		<a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact me</a>

	</div>
	<p>&copy; <?php echo date("Y"); ?> The Millennial Mom Times.  All rights reserved</p>
	<p>Website created by <a target="_blank" href="http://www.eandvdesign.com">E and V Design</a></p>
	<?php wp_footer(); ?>

	</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>