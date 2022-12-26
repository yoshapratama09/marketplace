<?php $this->load->view('front/header_dashboard'); ?>

<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="" class="logo me-auto me-lg-0"><img src="assets/img/logo-freework.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
        <li><a class="nav-link scrollto" href="#services">Kategori</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Produk</a></li>
        <?php echo form_open('produk/cari_produk') ?>
        <li class="input-group mx-5 px-3">
          <?php echo form_input(array('class'  => 'form-control', 'name'  => 'cari_produk','placeholder'  => 'Cari Jasa...')) ?>
          <span class="input-group-btn"><button class="btn get-started-btn border-start-0" type="submit"><i class="bi bi-search"></i></button></span>
        </li>
        <?php echo form_close() ?>
      </ul>
      <ul class="ms-5">
        <?php if(isset($_SESSION['username']) && $_SESSION['usertype'] == '3'){ ?>
        <li class="dropdown"><a href="#">Hai, <?php echo $this->session->userdata('nama') ?> <span class="caret"></span><i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('user/edit_profil/').$this->session->userdata('user_id') ?>">Profil Saya</a></li>
            <li><a href="<?php echo base_url('iklan') ?>">Iklan Saya</a></li>
            <li><a href="<?php echo base_url('user/logout') ?>">Logout</a></li>
          </ul>
          <?php } else { ?>
            <a href="<?php echo base_url('user/login') ?>">Masuk</a>
          <?php 
          } ?>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i> 
    </nav>
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
          <h1 class="mb-4">Temukan Freelancer Favoritmu</h1>
          <h1><span class="typing-text"></span></h1>
          <h2 class="mt-4">Siap membuat produk anda menjadi terkenal</h2>
          <script>
              var typed = new Typed(".typing-text", {
                  strings: ["Jasa Buat Caption", "Jasa Desain Iklan", "Jasa Like Instagram", "Jasa Konsultasi", "Dan banyak lainnya.."],
                  typeSpeed: 80,
                  backSpeed: 80,
                  loop: true
              })
          </script>
      </div>
    </div>
    
    <div class="row gy-2 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <?php
        $sql = $this->db->query("SELECT * FROM kategori ORDER BY id_kategori LIMIT 6"); // Memanggil kategori/ top kategori
        $data = $sql->result();
        foreach($data as $row)
        {
          $id_kat = $row->id_kategori;
          echo '
            <div class="col-lg-2 col-md-4">
              <a href="'.base_url('produk/p/').$row->slug_kat.'">
              <div class="icon-box">
                <i class="ri-database-2-line"></i>
                <h3 class="text-white">'.$row->judul_kategori.' </h3>
              </div>
              </a>
            </div>
          ';
        }
      ?>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Tentang Kami</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/bootstrap.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/dagangyuk.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/sistem_informasi.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/logo_filkom.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/ub.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/freework-logo.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->
  
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kategori</h2>
        <p>Kategori Freelancer</p>
      </div>

      <div class="row">
      <?php
        $sql = $this->db->query("SELECT * FROM kategori ORDER BY id_kategori LIMIT 6"); // Memanggil kategori/ top kategori
        $data = $sql->result();
        foreach($data as $row)
        {
          $id_kat = $row->id_kategori;
          echo '
            <div class="col-lg-4 col-md-6 gy-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <a href="'.base_url('produk/p/').$row->slug_kat.'">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-shop-window"></i></div>
                <h4>'.$row->judul_kategori.'</h4>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada.</p>
              </div>
              </a>
            </div>
            ';
          }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Produk</h2>
        <p>Cek Produk Terbaru</p>
      </div>
      
      <div class="row justify-content-start">
        <?php
        if($produk_new_data == NULL){
          echo "<div class='col-lg-12'>Belum Ada data</div>";
        }
        else {
          foreach ($produk_new_data as $produk_new) {
        ?>
        <div class="col-lg-3 col-md-6 gy-4 align-items-center text-center" data-aos="zoom-in" data-aos-delay="100">
          <a href="<?php echo base_url("produk/read/$produk_new->username/"."$produk_new->slug_produk ") ?>">
          <div class="icon-box">
            <div class="icon2">
            <?php
              if(empty($produk_new->foto)) {echo "<img class='img-fluid rounded mb-4' src='".base_url()."assets/images/no_image_thumb.png'>";}
              else { echo " <img class='img-fluid rounded mb-4' src='".base_url()."assets/images/produk/".$produk_new->foto.$produk_new->foto_type."'> ";}
            ?>
            </div>
            <h6><?php echo character_limiter($produk_new->judul_produk,35) ?></h6>
            <p class="text-dark">Rp <?php echo number_format($produk_new->harga) ?></p>
          </div>
          </a>
        </div>
        <?php }} ?>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <?php
                $sql = $this->db->query("SELECT * FROM users");
              ?>
              <h1 style="font-size: 100px;"><?php echo $sql->num_rows();?></h1>
              <h3 style="font-size: 48px;">Total Freelancer</h3>
              <p class="mt-3">
                yang telah mempercayai website kami dalam mengiklankan produk atau jasa mereka.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <?php
                $sql = $this->db->query("SELECT * FROM produk");
              ?>
              <h1 style="font-size: 100px;"><?php echo $sql->num_rows();?></h1>
              <h3 style="font-size: 48px;">Total Produk/Jasa</h3>
              <p class="mt-3">
                yang telah diiklankan dalam website kami.
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->


</main><!-- End #main -->

<?php $this->load->view('front/footer_dashboard'); ?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/vendor/purecounter/') ?>purecounter_vanilla.js"></script>
<script src="<?php echo base_url('assets/vendor/aos/') ?>aos.js"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/') ?>bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/vendor/glightbox/js/') ?>glightbox.min.js"></script>
<script src="<?php echo base_url('assets/vendor/isotope-layout/') ?>isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('assets/vendor/swiper/') ?>swiper-bundle.min.js"></script>
<script src="<?php echo base_url('assets/vendor/php-email-form/') ?>validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/js/') ?>main.js"></script>
<style>
  #hero {
    width: 100%;
    height: 100vh;
    background: url('<?php echo base_url('assets/img/') ?>hero-bg.jpg') top center;
    background-size: cover;
    position: relative;
  }

  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }

  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/

  #hero .container {
    position: relative;
    padding-top: 74px;
    text-align: center;
  }

  #hero h1 {
    margin: 0;
    font-size: 56px;
    font-weight: 700;
    line-height: 64px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }

  #hero h1 span {
    color: #ffc451;
  }

  #hero h2 {
    color: rgba(255, 255, 255, 0.9);
    margin: 10px 0 0 0;
    font-size: 24px;
  }

  #hero .icon-box {
    padding: 30px 20px;
    transition: ease-in-out 0.3s;
    border: 1px solid rgba(255, 255, 255, 0.3);
    height: 100%;
    text-align: center;
  }

  #hero .icon-box i {
    font-size: 24px;
    line-height: 1;
    color: #ffc451;
  }

  #hero .icon-box h3 {
    font-weight: 700;
    margin: 10px 0 0 0;
    padding: 0;
    line-height: 1;
    font-size: 16px;
    line-height: 26px;
  }

  #hero .icon-box h3 a {
    color: #fff;
    transition: ease-in-out 0.3s;
  }

  #hero .icon-box h3 a:hover {
    color: #ffc451;
  }

  #hero .icon-box:hover {
    border-color: #ffc451;
  }

  @media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }

  @media (max-width: 768px) {
    #hero {
      height: auto;
    }

    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }

    #hero h2 {
      font-size: 20px;
      line-height: 24px;
    }
  }
</style>
<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/vendor/purecounter/') ?>purecounter_vanilla.js"></script>
<script src="<?php echo base_url('assets/vendor/aos/') ?>aos.js"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/') ?>bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/vendor/glightbox/js/') ?>glightbox.min.js"></script>
<script src="<?php echo base_url('assets/vendor/isotope-layout/') ?>isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('assets/vendor/swiper/') ?>swiper-bundle.min.js"></script>
<script src="<?php echo base_url('assets/vendor/php-email-form/') ?>validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/js/') ?>main.js"></script>