<?php $this->load->view('front/header_dashboard'); ?>
<?php echo $script_captcha; // javascript recaptcha ?>

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
        <div class="col-lg-7 mb-5 mb-lg-0 ">
          <a href="<?php echo base_url()?>" class="logo"><img src="<?php echo base_url('assets/img/') ?>logo-freework.png" alt="" class="img-fluid"></a>
          <h1 class="my-5 display-3 fw-bold ls-tight text-white">
            Temukan <br />
            <span class="span-login">Freelancer Favoritmu</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            
          </p>
        </div>

        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="card rounded" style="background-color: rgba(10, 10, 10, 0.8);">
            <div class="card-body py-5 px-md-5 text-white text-start">
              <?php echo form_open("user/login");?>
                <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                <p class="mb-5 text-center">Silahkan masukkan username dan password</p>

                <?php echo validation_errors() ?>
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                
                <!-- Username input -->
                <div class="col mb-4">
                  <label class="form-label text-start">Username</label>
                  <?php echo form_input($username);?>
                </div>

                <!-- Password input -->
                <div class="col my-4">
                  <label class="form-label text-start">Password</label>
                  <?php echo form_password($password);?>
                </div>

                <div class="col form-group">
                  <label>
                    <?php echo form_checkbox('remember','1',FALSE);?> Remember me
                  </label>
                </div>

                <!-- Checkbox -->
                <div class="col justify-content-center d-flex my-4">
                  <?php echo $captcha ?>
                </div>

                <!-- Submit button -->
                <div class="col my-4 text-center">
                  <button type="submit" class="btn get-started-btn btn-block mb-1">
                    Masuk
                  </button>
                </div>
                <p class="text-center mb-4">Belum punya akun? Silahkan daftar <a href="<?php echo base_url('user/register') ?>">disini</a>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
