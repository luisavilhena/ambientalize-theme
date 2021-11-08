	<footer id="contatos">
		<div class="footer__content">
			<div class="footer__content-first-line">
				<img class=""
						    src="<?php echo get_template_directory_uri() ?>/resources/icons/Logo_horizontal.png"
						/>
				<div class="footer__content-first-line__social-media">
					<h5>siga a gente!</h5>
					<div>
						<a target="_blank" href="<?php echo carbon_get_theme_option('instagram'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/instag.jpg"
							/>
						</a>
						<a target="_blank" href="<?php echo carbon_get_theme_option('linkedin'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/linked.jpg"
							/>
						</a>
						<a target="_blank" href="<?php echo carbon_get_theme_option('face'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/Faceb.jpg"
							/>
						</a>
					</div>
				</div>
			</div>
			<div class="footer__content-second-line">
				<a target="_blank" href="mailto:<?php echo carbon_get_theme_option('email'); ?>">
					<?php echo carbon_get_theme_option('email'); ?>
				</a>
				<a target="_blank" href="tel:<?php echo carbon_get_theme_option('phone'); ?>">
					<?php echo carbon_get_theme_option('phone'); ?>
				</a>
				<p class="footer__content-second-line__description">
					<?php echo carbon_get_theme_option('description'); ?>"
				</p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
