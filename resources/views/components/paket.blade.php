<section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Paket Wisata</h2>
      <p><span>Silahkan Pilih</span> <span class="description-title">Salah Satu Dibawah Ini</span></p>
    </div><!-- End Section Title -->

    <div class="container">

        {{-- Paket 1 --}}
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('assets/img/paket/paket-1.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Paket Wisata 1</h4>
              <span>2 Hari 3 Malam</span>
              <button type="button" class="btn btn-primary">Daftar Paket</button>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('assets/img/paket/paket-2.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Paket 2</h4>
              <span>7 Hari Full</span>
              <button type="button" class="btn btn-primary">Daftar Paket</button>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('assets/img/paket/paket-3.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Paket 3</h4>
              <span>3 Hari Full</span>
              <button type="button" class="btn btn-primary">Daftar Paket</button>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ asset('assets/img/paket/paket-4.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Paket 4</h4>
              <span>1 Hari</span>
              <button type="button" class="btn btn-primary">Daftar Paket</button>
            </div>
          </div>
        </div><!-- End Team Member -->
      </div>

      <div class="card text-center mt-4">
        <div class="card-header">
          <h2 class="deskription-title">Registrasi</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Silahkan Registrasi Akun Anda Terlebih Dahulu</h5>
          <p class="card-text">Hal ini Diperlukan Agar Memudahkan Proses Pemesanan</p>
          <a href="{{ route('PesananController.create') }}" class="btn btn-primary">Registrasi</a>
        </div>
        {{-- <div class="card-footer text-muted">
          2 days ago
        </div> --}}
      </div>
    </div>

  </section>