<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <ol class="breadcrumb">
	  	  <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a>>&nbsp</li>
    	  <li>Profil >&nbsp</li>
        <li class="active"><b><a href="<?php echo current_url() ?>">Edit Profil</a></b></li>
        <li><?php echo validation_errors() ?></li>
      </ol>
      <p>Hai, <?php echo $user->username ?></p>
    </div>

    <div class="row mb-5">
      <div class="col-lg-3 text-center justify-content-center">
        <img src="<?php echo base_url('assets/images/user/'.$user->userfile.$user->userfile_type.'') ?>" width="200px"/>
      </div><br>
      <div class="col-lg-6">
        <p><b>Nama</b>: <?php echo $user->nama ?></p>
        <p><b>Email</b>: <?php echo $user->email ?></p>
        <p><b>Telp</b>: +62<?php echo $user->phone ?></p>
        <p><b>Alamat</b>: <?php echo $user->alamat ?></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfilModal">
          Edit Profil
        </button>
        </p>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('front/footer_dashboard'); ?>

<div class="modal fade" id="editProfilModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart(uri_string());?>
        <div class="row">
          <!-- Name input -->
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">Nama</label>
            <?php echo form_input($nama);?>
          </div>

          <!-- Username input -->
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">Username</label>
            <?php echo form_input($username);?>
          </div>

          <!-- Password input -->
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">Password</label>
            <?php echo form_input($password);?>
            <label class="form-label text-start fs-6 fw-light text-danger">*diisi jika mengubah password</label>
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">Konfirmasi Password</label>
            <?php echo form_input($password_confirm);?>
            <label class="form-label text-start fs-6 fw-light text-danger">*diisi jika mengubah password</label>
          </div>

          <!-- Email input -->
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">Email</label>
            <?php echo form_input($email);?>
          </div>

          <!-- Phone input -->
          <div class="col-md-6 mb-2">
            <label class="form-label text-start">No. Telepon</label>
            <div class="input-group">
              <span class="input-group-text">+62</span>
              <?php echo form_input($phone);?>
            </div>
          </div>

          <!-- Address input -->
          <div class="col-12 mb-2">
            <label class="form-label text-start">Alamat</label>
            <?php echo form_textarea($alamat);?>
          </div>
          <div class="form-group"><label>Foto Profil</label>
            <input type="file" class="form-control" name="userfile" id="userfile" onchange="tampilkanPreview(this,'preview')"/>
            <br><p><b>Preview Gambar</b><br>
            <img id="preview" src="" alt="" width="350px"/>
          </div>
          <div class="col-12 mb-2">
            <?php echo form_hidden('id', $user->id);?>
            <?php echo form_hidden($csrf); ?>
          </div>
        </div>
        <?php echo form_close() ?>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function tampilkanPreview(userfile,idpreview)
{ //membuat objek gambar
  var gb = userfile.files;
  //loop untuk merender gambar
  for (var i = 0; i < gb.length; i++)
  { //bikin variabel
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    { //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      { //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>
