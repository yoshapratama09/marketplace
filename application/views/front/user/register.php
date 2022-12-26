<?php $this->load->view('front/header_dashboard'); ?>

<style>
#login-page {
  width: 100%;
  background: url('<?php echo base_url('assets/img/') ?>hero-bg.jpg') top center;
  background-size: cover;
  position: relative;
  background-attachment: fixed;
}

#login-page:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

.span-login {
  color: #ffc451;
}

</style>
<!-- Section: Design Block -->
<section id="login-page">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-lg-start">
    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <a href="<?php echo base_url()?>" class="logo"><img src="<?php echo base_url('assets/img/') ?>logo-freework.png" alt="" class="img-fluid"></a>
          <h1 class="my-5 display-3 fw-bold ls-tight text-white">
            Temukan <br />
            <span class="span-login">Freelancer Favoritmu</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card rounded" style="background-color: rgba(10, 10, 10, 0.8);">
            <div class="card-body py-5 px-md-5 text-white text-start">
			        <?php echo form_open("user/register");?>
              <div class="row">
                <h2 class="fw-bold mb-2 text-uppercase text-center">Daftar</h2>
                <p class="mb-5 text-center">Silahkan isi data di bawah ini</p>

                <?php echo $message;?>

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
                <div class="col-md-6 my-2">
                  <label class="form-label text-start">Password</label>
                  <?php echo form_password($password);?>
                </div>
				        <div class="col-md-6 my-2">
                  <label class="form-label text-start">Konfirmasi Password</label>
                  <?php echo form_password($password_confirm);?>
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

                <!-- Submit button -->
                <div class="col-12 my-4 text-center">
                  <button type="submit" class="btn get-started-btn btn-block mb-1">
                    Daftar
                  </button>
                </div>

                <p class="text-center mb-4">Sudah punya akun? Silahkan masuk <a href="<?php echo base_url('user/login') ?>">disini</a>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
