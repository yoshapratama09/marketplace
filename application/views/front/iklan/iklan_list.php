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

    <a href="<?php echo base_url('iklan/create') ?>">
      <button class="btn get-started-btn text-dark mb-3"><i class="fa fa-plus"></i> Tambah Data</button>
    </a>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Judul produk</th>
          <th style="text-align: center">Kategori</th>
          <th style="text-align: center">SubKategori</th>
          <th style="text-align: center">SuperSubKategori</th>
          <th style="text-align: center">Upload</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($iklan_data as $iklan):?>
        <tr>
          <td style="text-align:center"><?php echo $no++ ?></td>
          <td style="text-align:left"><?php echo $iklan->judul_produk ?></td>
          <td style="text-align:center"><?php echo $iklan->judul_kategori ?></td>
          <td style="text-align:center"><?php echo $iklan->judul_subkategori ?></td>
          <td style="text-align:center"><?php echo $iklan->judul_supersubkategori ?></td>
          <td style="text-align:center"><?php echo $iklan->created ?></td>
          <td style="text-align:center">
          <?php
          echo anchor(site_url('produk/read/'.$iklan->username."/".$iklan->slug_produk),'<i class="bi bi-search"></i>','title="Lihat Iklan", class="btn btn-sm btn-primary"'); echo ' ';
          echo anchor(site_url('iklan/update/'.$iklan->id_produk),'<i class="bi bi-pencil"></i>','title="Edit", class="btn btn-sm btn-warning"'); echo ' ';
          echo anchor(site_url('iklan/delete/'.$iklan->id_produk),'<i class="bi bi-trash"></i>','title="Hapus", class="btn btn-sm btn-danger", onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');
          ?>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</section>

<?php $this->load->view('front/footer_dashboard'); ?>

<!-- DATA TABLES SCRIPT -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
function confirmDialog() {
  return confirm('Apakah anda yakin?')
}
  $('#datatable').dataTable({
    "lengthMenu": [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "Semua"]]
  });
</script>
