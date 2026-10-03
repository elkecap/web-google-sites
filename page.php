<?php get_header(); ?>
<section class="page-hero"><div class="container"><h1><?php the_title(); ?></h1></div></section>
<main class="content"><div class="container"><article class="single">
<?php while(have_posts()): the_post(); the_content(); endwhile; ?>
</article></div></main>
<?php get_footer(); ?>
