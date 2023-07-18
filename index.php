<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div class="margin-sm">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="mb-0">Blog</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row g-5">
			
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div class="col-12 col-sm-6 col-lg-4 blog-post-block" itemscope="" itemtype="http://schema.org/BlogPosting">
						<article class="entry">
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="blog-featured-image-wrapper mb-4">
									<div class="blog-featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>');">
										<a href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>"></a>
									</div>
								</div>
							<?php } ?>
		          <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" itemprop="url"><span itemprop="name headline"><?php the_title(); ?></span></a></h5>
							<?php if ( get_field('subheading') ) : ?>
								<p class="mb-5"><?php echo get_field('subheading'); ?></p>
							<?php endif; ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" itemprop="url" aria-label="<?php the_title(); ?>"><strong>Read this article</strong></a>
						</article>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="navigation text-center mt-5 mb-5">
					<?php echo do_shortcode('[facetwp facet="load_more"]'); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
