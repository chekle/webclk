<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Playground Home
 */

get_header(); ?>
	<main>
		<?php get_template_part('components/content_components'); ?>
		<div class="margin">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="mb-5"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php $args = array(
							'post_type' => 'page',
							'post_parent' => 100,
							'orderby' => 'menu_order',
							'order' => 'ASC',
							'posts_per_page' => -1,
						);
						$query = new WP_Query( $args ); ?>

						<?php if ( $query->have_posts() ) { ?>
							<div class="row g-5">
								<?php while ( $query->have_posts() ) { $query->the_post(); ?>

									<div class="col-12 col-sm-6 col-lg-4 blog-post-block" itemscope="" itemtype="http://schema.org/BlogPosting">
										<article class="entry">
											<?php if ( has_post_thumbnail() ) { ?>
												<div class="blog-featured-image-wrapper mb-4">
													<div class="blog-featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>');">
														<a href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>"></a>
													</div>
												</div>
											<?php } ?>
											<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" itemprop="url"><span itemprop="name headline"><?php the_title(); ?></span></a></h2>
										</article>
									</div>

								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
