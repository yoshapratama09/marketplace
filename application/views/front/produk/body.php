<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
	  	<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home</a> >&nbsp</li>
    	<li><a href="<?php echo base_url('produk/p/').$produk->slug_kat ?>"><?php echo $produk->judul_kategori ?></a> >&nbsp</li>
        <li><a href="<?php echo base_url('produk/p/').$produk->slug_kat."/".$produk->slug_subkat ?>"><?php echo $produk->judul_subkategori ?></a> >&nbsp</li>
        <li><a href="<?php echo base_url('produk/p/').$produk->slug_kat."/".$produk->slug_subkat."/".$produk->slug_supersubkat ?>"><?php echo $produk->judul_supersubkategori ?></a> >&nbsp</li>
    	<li class="active"><?php echo $produk->judul_produk ?></li>
      </ol>
      <p><?php echo $produk->judul_produk ?></p>
	  <p><?php echo validation_errors(); ?></p>
    </div>

	<div class="row justify-content-between">
	  <div class="col-md-9 col-12">
		<div class="row d-flex align-items-end">
		  <div class="col-sm-7 mb-3">
			<?php
			if(empty($produk->foto)) {echo "<img class='img-responsive border rounded' src='".base_url()."assets/images/no_image.png' width='550' height='auto'>";}
			else { echo " <img src='".base_url()."assets/images/produk/".$produk->foto.$produk->foto_type."' class='img-responsive border rounded' title='$produk->judul_produk' alt='$produk->judul_produk' id='myImg' width='550' height='auto'> ";}
			?>
			<br>
		  </div>
		  <div class="col-sm-4 ms-3">
		    <p class="my-3">
			  <a href="<?php echo base_url('produk/p/').$produk->slug_kat ?>">
				<?php echo $produk->judul_kategori ?>
			  </a> /
			  <a href="<?php echo base_url('produk/p/').$produk->slug_kat."/".$produk->slug_subkat ?>">
				<?php echo $produk->judul_subkategori ?>
			  </a> /
			  <a href="<?php echo base_url('produk/p/').$produk->slug_kat."/".$produk->slug_subkat."/".$produk->slug_supersubkat ?>">
				<?php echo $produk->judul_supersubkategori ?>
			  </a>
			</p>
			<div class="row my-3">
			  <div class="col-auto">
			  	<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#orderModal">
				  Beli
				</button>
		  	  </div>
			</div>
		  </div>
		  <div class="col mt-2">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-link active" id="nav-deskripsi-tab" data-bs-toggle="tab" data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi" aria-selected="true">Deskripsi</a>
				<a class="nav-link" id="nav-catatan-tab" data-bs-toggle="tab" data-bs-target="#nav-catatan" type="button" role="tab" aria-controls="nav-catatan" aria-selected="false">Catatan</a>
				<a class="nav-link" id="nav-diskusi-tab" data-bs-toggle="tab" data-bs-target="#nav-diskusi" type="button" role="tab" aria-controls="nav-diskusi" aria-selected="false">Diskusi Produk</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel" aria-labelledby="nav-deskripsi-tab" tabindex="0">
			  	<p class="m-4"><?php echo $produk->deskripsi ?></p>
			  </div>
			  <div class="tab-pane fade" id="nav-catatan" role="tabpanel" aria-labelledby="nav-catatan-tab" tabindex="0">
			    <p class="m-4"><?php echo $produk->catatan ?></p>
			  </div>
			  <div class="tab-pane fade" id="nav-diskusi" role="tabpanel" aria-labelledby="nav-diskusi-tab" tabindex="0">
			  	<div class="m-4">
				<?php
				  if(!isset($_SESSION['username'])){
					echo "Silahkan login terlebih dahulu, klik <a href='".base_url()."user/login'>disini</a> untuk login.";
				  } else{ ?>
					<?php echo form_open("produk/komen/".$produk->username.'/'.$produk->slug_produk."");?>
					<input type="hidden" name="produk_id" value="<?php echo $produk->id_produk ?>">
					<div class="form-group">
						<textarea class="form-control" name="isi_komentar" placeholder="Isikan komentar atau pertanyaan Anda disini" required></textarea>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-danger">Cancel</button>
					</div>
					<?php echo form_close(); ?>
				<?php } ?>

				<hr>

				<?php
				if($get_komentar == NULL){
				echo "Belum ada komentar";
				}
				else
				{
				  foreach ($get_komentar as $komen)
					{
					?>
					<b><?php echo $komen->nama ?></b>, berkata:
					<p>" <?php echo $komen->isi_komentar ?> "</p>
					<p class="text-end">pada <?php echo $komen->created ?></p>
					<hr>
				<?php }} ?>
				</div>
			  </div>
			</div>
		  </div>
		  <hr>
	    </div>
	  </div>
	  <div class="col-md-3 col-12 justify-content-center sticky-top position-sticky">
	  	<div class="row my-3 border">
		  <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic" aria-selected="true">Basic</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-standard-tab" data-bs-toggle="pill" data-bs-target="#pills-standard" type="button" role="tab" aria-controls="pills-standard" aria-selected="false">Standard</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-prof-tab" data-bs-toggle="pill" data-bs-target="#pills-prof" type="button" role="tab" aria-controls="pills-prof" aria-selected="false">Professional</button>
			</li>
		  </ul>
		  <hr>
		  <div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab" tabindex="0">
			  <div class="row ms-1 justify-content-between align-items-center">
				<div class="col-auto">
				  Paket Basic
				</div>
				<div class="col-auto">
				  <button type="button" class="btn btn-dark position-relative">
					Rp <?php echo number_format($produk->harga) ?>
				  </button>
				</div>
				<div class="w-100"></div>
				<div class="col-auto">
				  <p class="my-3 mx-1"><?php echo $produk->isi_paket ?></p>
				</div>
			  </div>
			</div>
			<div class="tab-pane fade" id="pills-standard" role="tabpanel" aria-labelledby="pills-standard-tab" tabindex="0">
			  <div class="row ms-1 justify-content-between align-items-center">
				<div class="col-auto">
				  Paket Standard
				</div>
				<div class="col-auto">
				  <button type="button" class="btn btn-dark position-relative">
					Rp <?php echo number_format($produk->harga2) ?>
				  </button>
				</div>
				<div class="w-100"></div>
				<div class="col-auto">
				  <p class="my-3 mx-1"><?php echo $produk->isi_paket2 ?></p>
				</div>
			  </div>
			</div>
			<div class="tab-pane fade" id="pills-prof" role="tabpanel" aria-labelledby="pills-prof-tab" tabindex="0">
			  <div class="row ms-1 justify-content-between align-items-center">
				<div class="col-auto">
				  Paket Professional
				</div>
				<div class="col-auto">
				  <button type="button" class="btn btn-dark position-relative">
					Rp <?php echo number_format($produk->harga3) ?>
				  </button>
				</div>
				<div class="w-100"></div>
				<div class="col-auto">
				  <p class="my-3 mx-1"><?php echo $produk->isi_paket3 ?></p>
				</div>
			  </div>
			</div>
		  </div>
		  
		</div>
		<div class="text-center border">
		  <h5 class="my-4">Profil Seller</h5>
		  <hr>
		  <p class="text-center">
		  <?php echo $seller->nama;
		  if(empty($seller->foto)) {
		    echo "<br><img src='".base_url()."assets/images/no-profile-picture.jpg' class='rounded-circle border my-3' width='400' height='auto'>";
		  } else{ 
		    echo "<br><img src='".base_url()."assets/images/user/".$seller->userfile.$seller->userfile_type."' class='rounded-circle border my-3' width='100px' height='100'> ";
		  }    	
		  ?>
		  <div class="row my-3 justify-content-center text-center">
		  	<div class="col-auto">
			  <a href="<?php echo base_url('user/profile/').$seller->username ?>">
			    <button type="button" name="button" class="btn btn-primary">Cek Profil</button>
			  </a>
		  	</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>

<?php $this->load->view('front/footer_dashboard'); ?>

<div class="modal fade" id="orderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 mb-2">
            <label class="form-label text-start">Nama Jasa</label>
            <input class="form-control" type="text" name="jasa" value="<?php echo $produk->judul_produk ?>" aria-label="nama jasa" readonly>
          </div>

		  <div class="col-md-6 mb-2">
            <label class="form-label text-start">Nama Seller</label>
            <input class="form-control" type="text" name="seller" value="<?php echo $seller->nama;?>" aria-label="nama jasa" readonly>
          </div>

		  <div class="col-md-6 mb-2">
            <label class="form-label text-start">Nama Pembeli</label>
            <input class="form-control" type="text" name="pembeli" value="<?php echo $this->session->userdata('nama') ?>" aria-label="nama jasa" readonly>
          </div>
		
		  <div class="col-md-6 mb-2">
            <label class="form-label text-start">Pilihan Paket</label>
			<select class="form-select" name="paket" id="inputGroupPaket" onchange="paket()">>
			  <option value="1" selected>Basic</option>
			  <option value="2">Standard</option>
		      <option value="3">Professional</option>
			</select>
          </div>

          <div class="col-md-6 mb-2">
		    <label class="form-label text-start">Harga</label>
		    <div class="input-group">
  			  <span class="input-group-text" id="basic-addon1">Rp</span>
              <input class="form-control" name="harga" id="inputHarga" type="text" value="<?php echo $produk->harga ?>" aria-label="harga" readonly>
            </div>
		  </div>

		  <div class="col-md-12 mb-2">
			<label for="keterangan" class="form-label">Catatan untuk Freelancer</label>
			<textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
		  </div>
		  
		  <input type="hidden" name="whatsapp" value="+62<?php echo $seller->phone ?>" />
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
		  <input type="hidden" name="url" value="<?php echo $url; ?>" />
        </div>
      </div>
      <div class="modal-footer">
		<a href="https://api.whatsapp.com/send?phone=+62<?php echo $seller->phone ?>&text=Hi%20Gan,%20Saya%20minat%20dengan%20produk%20atau%20jasa%20yang%20di%20website%20(<?php echo $url; ?>)%20%0DNama%20Jasa:%20<?php echo $produk->judul_produk ?>%20%0BNama%20Pembeli:%20<?php echo $this->session->userdata('nama') ?>%20%0B" target="_blank">
		  <button type="submit" name="button" class="btn btn-success">Order via Whatsapp</button>
		</a>
      </div>
    </div>
  </div>
</div>

<script>
function paket() {
  var x = document.getElementById("inputGroupPaket").value;
  switch(x) {
	case "1":
	  document.getElementById("inputHarga").value = "<?php echo $produk->harga ?>";
	  break;
	case "2":
	  document.getElementById("inputHarga").value = "<?php echo $produk->harga2 ?>";
	  break;
	case "3":
	  document.getElementById("inputHarga").value = "<?php echo $produk->harga3 ?>";
	  break;
	default:
	  // code block
  }
}


</script>
