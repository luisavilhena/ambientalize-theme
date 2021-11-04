	<footer id="contatos">
		<div class="footer__content">
			<div class="footer__content-first-line">
				<img class=""
						    src="<?php echo get_template_directory_uri() ?>/resources/icons/Logo_horizontal.png"
						/>
				<div class="footer__content-first-line__social-media">
					<h4>siga a gente!</h4>
					<div>
						<a target="_blank" href="<?php echo carbon_get_theme_option('instagram'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/insta.png"
							/>
						</a>
						<a target="_blank" href="<?php echo carbon_get_theme_option('linkedin'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/linkedin.png"
							/>
						</a>
						<a target="_blank" href="<?php echo carbon_get_theme_option('face'); ?>">					
							<img class=""
							    src="<?php echo get_template_directory_uri() ?>/resources/icons/face.png"
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
