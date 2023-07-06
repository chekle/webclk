<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<main>
		<?php get_template_part('components/content_components'); ?>
		<?php if ( get_the_content() ) { ?>
			<div class="margin">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</main>
<?php get_footer(); ?>
