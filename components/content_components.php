<?php if( have_rows('content_components') ): while ( have_rows('content_components') ) : the_row(); ?>

  <?php if( get_row_layout() == 'content_editor' ): ?>
  <?php get_template_part('components/content_editor');?>

  <?php elseif( get_row_layout() == 'content_card_large' ): ?>
  <?php get_template_part('components/content_card_large');?>

  <?php elseif( get_row_layout() == 'content_cards' ): ?>
  <?php get_template_part('components/content_cards');?>

<?php endif; ?>

<?php endwhile; endif;?>