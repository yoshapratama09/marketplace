<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home&nbsp</a></li>
        <li class="active"> > Kategori</li>
      </ol>
      <p>Kategori: <?php echo $page ?></p>
    </div>
    
    <div class="row justify-content-start mb-5">
	    <?php
        if($produk_row == NULL){
          echo "<div class='col-lg-12'>Belum Ada data</div>";
        }
        else {
          foreach ($produk->result() as $produk_new) {
      ?>
      <div class="col-lg-3 col-md-6 gy-4 align-items-center text-center" data-aos="zoom-in" data-aos-delay="100">
	  	  <a href="<?php echo base_url("produk/read/"."$produk_new->username"."/".$produk_new->slug_produk) ?>">
        <div class="icon-box">
          <div class="icon2">
            <?php
              if(empty($produk_new->foto)) {echo "<img class='img-fluid rounded mb-4' src='".base_url()."assets/images/no_image.png'>";}
              else { echo " <img class='img-fluid rounded mb-4' src='".base_url()."/assets/images/produk/".$produk_new->foto.$produk_new->foto_type."'> ";}
            ?>
          </div>
		      <h6><?php echo character_limiter($produk_new->judul_produk,35) ?></h6>
	        <p class="text-dark">Rp <?php echo number_format($produk_new->harga) ?></p>
        </div>
		    </a>
      </div>
      <?php }} ?>
    </div>
	<div class="pagination" style="text-align:center"><?php echo $pagination; ?></div>
	
  </div>

</section>

<?php $this->load->view('front/footer_dashboard'); ?>
