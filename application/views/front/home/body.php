<?php $this->load->view('front/header_dashboard'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container">
	<div class="row">
		<?php $this->load->view('front/form_cari'); ?>
		<br>
		<?php $this->load->view('front/home/slider'); ?>
		<?php $this->load->view('front/home/produk_new'); ?>
	</div>

	<?php $this->load->view('front/footer'); ?>
