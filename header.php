<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
<div class="container navbar">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
<img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.svg'); ?>" alt="Logo TKJ FTTH">
<div><strong>TKJ & FTTH</strong><small>Belajar • Berbagi • Berkembang</small></div>
</a>
<nav class="menu">
<a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
<a href="#materi">Materi TKJ</a>
<a href="#ftth">FTTH</a>
<a href="#tutorial">Tutorial</a>
<a href="#kontak">Kontak</a>
</nav>
</div>
</header>
