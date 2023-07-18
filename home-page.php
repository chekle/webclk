<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Home Page
 */

get_header(); ?>
	<main>
		<div class="bg-wrapper">			
			<video class="background-video" autoplay="autoplay" autoplay playsinline loop muted id="myVideo">
				<source src="<?php bloginfo('template_directory'); ?>/video/pexels-raddy-13522186.mp4" type="video/mp4">
			</video>
			<div class="overlay"></div>
			<div class="text-overlay text-center">
				<div class="typewriter">
					<h1>webclk</h1>
					<h2>Web Development Blog</h2>
				</div>
			</div>
		</div>
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
		
		<?php $args = array(
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 9,
		);
		$query = new WP_Query( $args ); ?>

		<?php if ( $query->have_posts() ) { ?>
			<div class="margin">
				<div class="container">
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
									<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" itemprop="url"><span itemprop="name headline"><?php the_title(); ?></span></a></h5>
									<?php if ( get_field('subheading') ) : ?>
										<p class="mb-5"><?php echo get_field('subheading'); ?></p>
									<?php endif; ?>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" itemprop="url" aria-label="<?php the_title(); ?>"><strong>Read this article</strong></a>
								</article>
							</div>

						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>

	</main>
<?php get_footer(); ?>
