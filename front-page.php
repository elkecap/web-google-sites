<?php get_header(); ?>
<section class="hero">
<div class="container hero-grid">
<div>
<span class="badge">TEKNIK KOMPUTER & JARINGAN</span>
<h1>Mengenal Dunia Jaringan dan Teknologi FTTH</h1>
<p>Belajar komputer, jaringan, fiber optik, dan Fiber To The Home melalui materi yang sederhana, praktis, dan mudah dipahami.</p>
<a class="btn" href="#materi">Mulai Belajar →</a>
<a class="btn alt" href="#tutorial">Lihat Tutorial</a>
</div>
<div class="hero-art"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/hero.svg'); ?>" alt="Ilustrasi jaringan dan FTTH"></div>
</div>
</section>

<section class="section" id="materi">
<div class="container">
<div class="section-title"><h2>Kategori Pembelajaran</h2><p>Pilih topik yang ingin kamu pelajari.</p></div>
<div class="cards">
<div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/computer.svg"><div class="card-body"><h3>Teknik Komputer</h3><p>Hardware, software, sistem operasi, dan troubleshooting.</p><a class="read" href="#">Pelajari →</a></div></div>
<div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/network.svg"><div class="card-body"><h3>Jaringan Komputer</h3><p>LAN, IP Address, router, switch, VLAN, dan MikroTik.</p><a class="read" href="#">Pelajari →</a></div></div>
<div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/fiber.svg"><div class="card-body"><h3>FTTH</h3><p>Fiber optik, OLT, ODC, ODP, ONT, splicing, dan instalasi.</p><a class="read" href="#ftth">Pelajari →</a></div></div>
<div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/tools.svg"><div class="card-body"><h3>Tutorial</h3><p>Panduan praktik jaringan dan fiber optik langkah demi langkah.</p><a class="read" href="#tutorial">Lihat →</a></div></div>
</div>
</div>
</section>

<section class="section info" id="ftth">
<div class="container two-col">
<div><img src="<?php echo get_template_directory_uri(); ?>/assets/ftth.svg" alt="FTTH"></div>
<div><span class="badge">FIBER TO THE HOME</span><h2>FTTH: Internet Berbasis Fiber Optik</h2>
<p>FTTH adalah teknologi jaringan yang menggunakan kabel fiber optik untuk menghubungkan jaringan hingga ke lokasi pelanggan. Teknologi ini mendukung koneksi berkecepatan tinggi dan stabil.</p>
<ul class="list"><li>Memahami OLT, ODC, ODP dan ONT</li><li>Mengenal kabel dan konektor fiber optik</li><li>Dasar instalasi dan splicing</li><li>Pengukuran redaman dan troubleshooting</li></ul></div>
</div>
</section>

<section class="section" id="tutorial">
<div class="container">
<div class="section-title"><h2>Tutorial Terbaru</h2><p>Contoh materi yang bisa dikembangkan menjadi posting WordPress.</p></div>
<div class="posts">
<div class="post"><img src="<?php echo get_template_directory_uri(); ?>/assets/post-router.svg"><h3>Cara Memahami Fungsi Router</h3><p>Kenali fungsi router dan bagaimana perangkat ini bekerja dalam jaringan.</p></div>
<div class="post"><img src="<?php echo get_template_directory_uri(); ?>/assets/post-fiber.svg"><h3>Pengenalan Kabel Fiber Optik</h3><p>Pelajari jenis kabel, konektor, dan dasar penggunaan fiber optik.</p></div>
<div class="post"><img src="<?php echo get_template_directory_uri(); ?>/assets/post-network.svg"><h3>Dasar-Dasar IP Address</h3><p>Memahami IPv4, subnet mask, gateway, dan konsep jaringan.</p></div>
</div>
</div>
</section>

<section class="section">
<div class="container cta"><h2>Siap Belajar TKJ & FTTH?</h2><p>Gunakan website ini sebagai media belajar, dokumentasi praktik, atau portofolio proyek jaringan.</p><a class="btn" href="#materi">Jelajahi Materi</a></div>
</section>
<?php get_footer(); ?>
