<?php get_header(); ?>
<section>
<div class="col-sm-10 col-sm-offset-1">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" role="article">


<?php if (has_post_thumbnail()) { ?>
<?php the_post_thumbnail( 'custom', array( 'class' => 'img-responsive' ) );?>
<?php } else { ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/default.jpg" class="img-responsive" alt=""/>
<?php };?>

<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php else : ?>
<article>
<h2>Error 404</h2>
<p>Lo siento, acá no está lo que buscas.</p>
</article>
<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>
