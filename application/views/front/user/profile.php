<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
	  	  <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a>>&nbsp</li>
    	  <li>Profil Seller >&nbsp</li>
        <li class="active"><b><?php echo $profil_data->nama ?></b></li>
      </ol>
      <p>Profil Seller <?php echo $profil_data->nama ?></p>
    </div>

    <div class="row mb-5">
      <div class="col-lg-3 text-center justify-content-center">
        <?php
        if(empty($profil_data->userfile)) {echo "<img src='".base_url()."assets/images/no-profile-picture.jpg' class='img-circle' width='200px'>";}
        else { echo " <img src='".base_url()."assets/images/user/".$profil_data->userfile.$profil_data->userfile_type."' class='img-circle' width='200px'> ";}
        ?>
      </div><br>
      <div class="col-lg-6">
        <p><b>Nama</b>: <?php echo $profil_data->nama ?></p>
        <p><b>Email</b>: <?php echo $profil_data->email ?></p>
        <p><b>Telp</b>: +62<?php echo $profil_data->phone ?></p>
      </div>
      <div class="col-lg-12 mt-5">
        <div class="row justify-content-start my-5">
          <div class="section-title">
            <h2 class="fs-3 text-dark fw-bold">Daftar Produk / Jasa</h2>
          </div>
          <?php foreach ($profil as $profil_new){ ?>
          <div class="col-lg-3 col-md-6 gy-4 align-items-center text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon2">
                <?php
                  if(empty($profil_new->foto)) {echo "<img class='img-fluid rounded mb-4' src='".base_url()."assets/images/no_image.png'>";}
                  else { echo " <img class='img-fluid rounded mb-4' src='".base_url()."assets/images/produk/".$profil_new->foto.$profil_new->foto_type."'> ";}
                ?>
              </div>
              <h6><a href="<?php echo base_url("produk/read/"."$profil_new->username"."/".$profil_new->slug_produk) ?>"><?php echo character_limiter($profil_new->judul_produk,35) ?></a></h6>
              <p>Rp <?php echo number_format($profil_new->harga) ?></p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
	  </div>
  </div>
</section>
<?php $this->load->view('front/footer_dashboard'); ?>