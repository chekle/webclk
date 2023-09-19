<section class="content-card-large margin">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="inner">
					<?php $image = get_sub_field('logo'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
					<?php if( get_sub_field('heading') ) : ?>
						<h2><?php echo get_sub_field('heading'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('intro') ) : ?>
						<div class="intro">
							<?php echo get_sub_field('intro'); ?>
						</div>
					<?php endif; ?>
					<?php if ( have_rows('bullet_points') ) : ?>
						<ul>
							<?php while( have_rows('bullet_points') ) : the_row(); ?>
								<li><?php echo get_sub_field('bullet_point'); ?></li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<?php $link = get_sub_field('button'); if( $link ): $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
						<div class="button-wrapper">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
