<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>


<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home&nbsp</a></li>
        <li class="active"> > Hasil Pencarian</li>
      </ol>
      <p>Hasil Pencarian: <?php echo $this->input->post('cari_produk') ?></p>
    </div>
	<div class="row">
	  <?php
		if(count($hasil_pencarian) == 0){
		  echo "<p align='center'>Produk yang Anda cari tidak ditemukan</p>";
		}
		elseif(empty($this->input->post('cari_produk'))){
		  echo "<p align='center'>Form pencarian Anda masih kosong</p>";
		}
		else{
		  foreach ($hasil_pencarian as $hasil)
		  {
	  ?>
	  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
		<div class="thumbnail">
	      <?php
			if(empty($hasil->foto)) {echo "<img src='".base_url()."assets/images/no_image.png'>";}
			else { echo " <img src='".base_url()."assets/images/produk/".$hasil->foto.$hasil->foto_type."'> ";}
		  ?>
		  <div class="caption">
			<h6><a href="<?php echo base_url("produk/read/$hasil->username/"."$hasil->slug_produk ") ?>"><?php echo character_limiter($hasil->judul_produk,35) ?></a></h6>
			<p>Rp <?php echo number_format($hasil->harga) ?></p>
		  </div>
		</div>
	   </div>
	   <?php } }?>
	</div>
  </div>
</section>
<?php $this->load->view('front/footer_dashboard'); ?>
