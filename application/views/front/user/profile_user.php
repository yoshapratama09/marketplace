<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container">
	<div class="row">
    <div class="col-lg-3" align="center">
			<?php
      if(empty($profil_data->userfile)) {echo "<img src='".base_url()."assets/images/no-profile-picture.jpg' class='img-circle' width='200px'>";}
      else { echo " <img src='".base_url()."assets/images/user/".$profil_data->userfile.$profil_data->userfile_type."' class='img-circle' width='200px'> ";}
      ?>
    </div><br>
    <div class="col-lg-6">
      <p><b>Nama Toko</b>: <?php echo $profil_data->nama ?></p>
      <p><b>Email</b>: <?php echo $profil_data->email ?></p>
      <p><b>Telp</b>: +62<?php echo $profil_data->phone ?></p>
      <p>
      <?php  
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    
            
      ?>
        <a href="<?php echo base_url('user/profile/').$profil_data->username ?>">
          <button type="submit" name="button" class="btn btn-success">Edit Profil</button>
        </a>
      </p>
    </div>
    <div class="col-lg-12">
      <hr>
  		<h5>Produk</h5>
  		<hr>
  		<div class="row">
        <?php foreach ($profil as $profil_new){ ?>
  	      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
  	        <div class="thumbnail">
  	          <?php
  	          if(empty($profil_new->foto)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png'>";}
  	          else { echo " <img src='".base_url()."assets/images/produk/".$profil_new->foto.$profil_new->foto_type."'> ";}
  	          ?>
  	          <div class="caption">
  	            <h6><a href="<?php echo base_url("produk/read/"."$profil_new->username"."/".$profil_new->slug_produk) ?>"><?php echo character_limiter($profil_new->judul_produk,35) ?></a></h6>
  	            <p>Rp <?php echo number_format($profil_new->harga) ?></p>
  	          </div>
  	        </div>
  	      </div>
        <?php } ?>
      </div>
	  </div>

	  <?php $this->load->view('front/footer'); ?>
