<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<main>
	<section id="blog-single" class="margin">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>

					<article id="blog-post" itemscope="" itemtype="http://schema.org/BlogPosting">
						<div class="row g-5">
							<div class="col-12 col-lg-8">
								<h1 itemprop="name headline" class="fw-bold"><?php the_title(); ?></h1>
								<?php if ( get_field('subheading') ) : ?>
									<h5 class="mb-0"><?php echo get_field('subheading'); ?></h5>
								<?php endif; ?>
							</div>
							<div class="col-12 col-lg-4 d-flex align-items-end justify-content-lg-end">
								<div class="inner">
									<i class="fa-regular fa-clock me-2"></i><?php echo do_shortcode('[rt_reading_time postfix="mins"]'); ?>
								</div>
							</div>
						</div>

						<?php if ( has_post_thumbnail()) : ?>
							<div class="margin-sm">
								<div class="row">
									<div class="col-12">
										<figure>
											<?php the_post_thumbnail(); ?>
										</figure>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
						<div class="margin-sm">
							<div class="row g-5">
								<div class="col-12 col-lg-8">
									<div class="content" itemprop="articleBody">
										<?php the_content(); ?>
									</div>
								</div>
								<aside class="col-12 col-lg-4 ps-lg-5">
									<div class="inner">
										<h5 class="mb-3">Share this</h5>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&quote=<?php the_title(); ?>" target="_blank" class="me-3" aria-label="Share to Facebook"><i class="fa-brands fa-facebook"></i></a>
										<a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" class="me-3" aria-label="Share to Twitter"><i class="fa-brands fa-twitter"></i></a>
										<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="_blank" class="me-3" aria-label="Share to Linkedin"><i class="fa-brands fa-linkedin"></i></a>
										<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" target="_blank" class="me-3" aria-label="Share via Email"><i class="fa-solid fa-envelope"></i></a>
									</div>
								</aside>
							</div>
						</div>

						<div class="border-top">
							<div class="padding-sm">
								<div class="row g-5">
									<div class="col-12 col-lg-4">
										<p class="mb-4">Published:</p>
										<h5><time datetime="<?php the_time('jS F, Y') ?>" itemprop="datePublished"><small><?php the_time('jS F, Y') ?></small></time></h5>
									</div>
									<div class="col-12 col-lg-4">
										<p class="mb-4">Was this post helpful?</p>
										<?php echo do_shortcode('[posts_like_dislike]');?>
									</div>
									<div class="col-12 col-lg-4">
										<p class="mb-4">Continue Reading</p>
										<strong><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All Articles</a></strong>
									</div>
								</div>
							</div>
						</div>

					</article>

					<div class="navigation">
						<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
						<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
