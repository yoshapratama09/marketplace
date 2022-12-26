
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Free Work</h3>
              <p>
                Indonesia<br><br>
                <strong>Phone:</strong> +62 81234567890<br>
                <strong>Email:</strong> yohanes.yosha@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Servis Kami</h4>
            <ul>
            <?php
                $sql = $this->db->query("SELECT * FROM kategori ORDER BY id_kategori LIMIT 6"); // Memanggil kategori/ top kategori
                $data = $sql->result();
                foreach($data as $row)
                {
                    $id_kat = $row->id_kategori;
                    echo '
                        <li><i class="bx bx-chevron-right"></i> <a href="'.base_url('produk/p/').$row->slug_kat.'">'.$row->judul_kategori.' </a></li>
                    ';
                    }
                ?>  
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <iframe style="border:0; border-radius:10px; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16327777.649419477!2d108.84621849858628!3d-2.415291213289622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1506312173230" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Free Work</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->