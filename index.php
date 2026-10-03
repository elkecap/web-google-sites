<?php get_header(); ?>
<section class="page-hero"><div class="container"><h1><?php bloginfo('name'); ?></h1></div></section>
<main class="content"><div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article class="single">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<p><?php echo esc_html(get_the_excerpt()); ?></p>
</article>
<?php endwhile; else: ?>
<p>Belum ada artikel.</p>
<?php endif; ?>
</div></main>
<?php get_footer(); ?>
