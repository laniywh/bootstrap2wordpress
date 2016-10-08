<?php
/**
 * The template for displaying content in the single.php template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package Bootstrap_to_WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_single() ) :
      the_title( '<h3 class="entry-title">', '</h3>' );
    else :
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    endif;

    if ( 'post' === get_post_type() ) : ?>
      <div class="post-details">
        <i class="fa fa-user"></i> <?php the_author(); ?>
        <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
        <i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
        <i class="fa fa-tags"></i> Tagged <?php the_tags('', ', ', ''); ?>
        <div class="post-comments-badge">
          <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
        </div><!-- post-comments-badge -->
        <div><?php edit_post_link( ' Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?></div>
      </div><!-- post-details -->
    <?php
    endif; ?>
  </header><!-- .entry-header -->

  <div class="post-image">
    <?php if (has_post_thumbnail() ) { // check for feature image ?>
      <?php the_post_thumbnail(); ?>
    <?php } ?>
  </div><!-- post-image -->
  <div class="post-excerpt">
    <?php the_excerpt(); ?>
  </div><!-- post-excerpt -->


  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array(
      'before' => '<div class="page-link"><span>' . __( 'Pages:', 'bootstrap2wordpress' ) . '</span>',
      'after' => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->