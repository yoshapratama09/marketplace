<?php $this->load->view('front/header_dashboard'); ?>

<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    
    <nav id="navbar" class="navbar justify-content-between">
      <a href="<?php echo base_url()?>" class="logo"><img src="<?php echo base_url('assets/img/') ?>logo-freework.png" alt="" class="img-fluid"></a>
      <ul class="d-md-flex ">
        <li><a href="<?php echo base_url('produk/katalog') ?>">Semua Produk</a></li>
        <?php echo form_open('produk/cari_produk') ?>
        <li class="input-group mx-2 mx-md-3">
          <?php echo form_input(array('class'  => 'form-control', 'name'  => 'cari_produk','placeholder'  => 'Cari Jasa...')) ?>
          <span class="input-group-btn"><button class="btn get-started-btn border-start-0" type="submit">Cari</button></span>
        </li>
        <?php echo form_close() ?>
    
        <?php if(isset($_SESSION['username']) && $_SESSION['usertype'] == '3'){ ?>
        <li class="dropdown ms-4"><a href="#">Hai, <?php echo $this->session->userdata('nama') ?> <span class="caret"></span><i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url('user/edit_profil/').$this->session->userdata('user_id') ?>">Profil Saya</a></li>
            <li><a href="<?php echo base_url('iklan') ?>">Iklan Saya</a></li>
            <li><a href="<?php echo base_url('user/logout') ?>">Logout</a></li>
          </ul>
        </li>
        <?php } else { ?>
        <a class="ms-4" href="<?php echo base_url('user/login') ?>">Masuk</a>
        <?php 
        } ?>
      </ul>
      <ul class="mt-3 d-md-flex d-none">
        <?php
        $sql = $this->db->query("SELECT * FROM kategori"); // Memanggil kategori/ top kategori
        $data = $sql->result();
        foreach($data as $row)
        {
          $id_kat = $row->id_kategori;
          echo '
          <li class="dropdown ms-2"><a href="'.base_url('produk/p/').$row->slug_kat.'">'.$row->judul_kategori.' <span class="caret"></span></a>
            <ul>';

          $sql2 =  $this->db->query("SELECT * FROM subkategori WHERE id_kat = '$id_kat' ORDER BY judul_subkategori "); // Memanggil subkategori/ middle kategori
          $data2 = $sql2->result();
          foreach($data2 as $row2)
          {
            $id_sub = $row2->id_subkategori;
            echo '
              <li class="dropdown"><a href="'.base_url('produk/p/').$row->slug_kat.'/'.$row2->slug_subkat.'">'.$row2->judul_subkategori.' <span class="caret"></span><i class="bi bi-chevron-right"></i></a>
                <ul>';

            $sql3 =  $this->db->query("SELECT * FROM supersubkategori WHERE id_subkat = '$id_sub' ORDER BY judul_supersubkategori "); // Memanggil subkategori/ middle kategori
            $data3 = $sql3->result();
            foreach($data3 as $row3)
            {
              $id_supersub = $row3->id_supersubkategori;
              echo '<li><a href="'.base_url('produk/p/').$row->slug_kat.'/'.$row2->slug_subkat.'/'.$row3->slug_supersubkat.'">'.$row3->judul_supersubkategori.'</a></li>';
            }
            echo '
                </ul>
              </li>';
          }
          echo '
          </ul>';
        }
        echo '
        </li>';
        ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>

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
</header><!-- End Header -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

  </div>
</section>