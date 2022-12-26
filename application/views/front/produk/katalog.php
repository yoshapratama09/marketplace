<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home&nbsp</a></li>
        <li class="active"> > Katalog Produk</li>
      </ol>
      <p>Katalog Produk</p>
    </div>

    <div class="row justify-content-start mb-5">
      <?php
        foreach ($katalog as $katalog_data)
        {
      ?>
      
      <div class="col-lg-3 col-md-6 gy-4 align-items-center text-center" data-aos="zoom-in" data-aos-delay="100">
        <a href="<?php echo base_url("produk/read/$katalog_data->username/"."$katalog_data->slug_produk ") ?>">
        <div class="icon-box">
          <div class="icon2">
            <?php
              if(empty($katalog_data->foto)) {echo "<img class='img-fluid rounded mb-4' src='".base_url()."assets/images/no_image.png'>";}
              else { echo " <img class='img-fluid rounded mb-4' src='".base_url()."assets/images/produk/".$katalog_data->foto.$katalog_data->foto_type."'> ";}
            ?>
          </div>
          <h6><?php echo character_limiter($katalog_data->judul_produk,35) ?></h6>
          <p class="text-dark">Rp <?php echo number_format($katalog_data->harga) ?></p>
        </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>	

<?php $this->load->view('front/footer_dashboard'); ?>
