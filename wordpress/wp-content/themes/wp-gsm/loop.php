<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="block clearfix">
    <div class="img">
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
      </a><!-- /post thumbnail -->
    </div>
    <div class="bl">
      <div class="name">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </div>
      <div class="textma">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php wpeExcerpt('wpeExcerpt20'); ?></a>
      </div>
      <div class="date">
        <?php the_time('j F Y'); ?>
      </div>
    </div>
  </div>
  <div class="hr">&nbsp;</div>

  <?php endwhile; else: ?>

  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
