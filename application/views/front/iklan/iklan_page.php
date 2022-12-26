<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home&nbsp</a></li>
        <li>> Iklan >&nbsp</li>
        <li><a href="<?php echo current_url() ?>"> Iklan Saya</a></li>
      </ol>
      <p>Daftar Iklan Saya</p>
    </div>
    <?php $this->load->view('iklan_list'); ?>
  </div>
</section>