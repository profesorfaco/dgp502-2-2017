<?php /* Template Name: Visualizaciones */ ?>
<?php get_header(); ?>
<section>
<div class="col-sm-10 col-sm-offset-1">
<?php query_posts('posts_per_page=-1&cat=2'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" role="article">
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
<?php wp_reset_query();?>
</div>
</section>
<?php get_footer(); ?>
