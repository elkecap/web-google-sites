<?php get_header(); ?>
<main class="content"><div class="container"><article class="single">
<h1><?php the_title(); ?></h1>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<p><strong><?php echo get_the_date(); ?></strong></p>
<?php while(have_posts()): the_post(); the_content(); endwhile; ?>
</article></div></main>
<?php get_footer(); ?>
