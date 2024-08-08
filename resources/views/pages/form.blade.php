<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - BizLand Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('./assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('./assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('./assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('./assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('./assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('./assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  {{-- @include('components.header') --}}
  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">hamasakifsanie@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 813-4941-3235</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/wonderful indonesia.png') }}" alt="Wonderfull Indonesia">
          <h1 class="sitename">Wisata Gunung Bromo</h1>
        </a>

        {{-- <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#featured-services">Youtube</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          <div class="dicoding-testing">

          </div>
        </nav> --}}
      </div>
    </div>
  </header>

  {{-- awal --}}
  <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Paket 1</h5>
                    <form action="{{ route('PesananController.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="nomor_barang" class="col-sm-2 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-10">
                                <input type="text" pattern="[A-Za-z\s]*" class="form-control" id="nama_pemesan" name="nama_pemesan" placeholder="Masukkan Nama Anda"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="no_telp" name="no_telp"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_serial_produk" class="col-sm-2 col-form-label">No Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No HandPhone Anda"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_produk" class="col-sm-2 col-form-label">Waktu Pemesanan</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="waktu" name="waktu" />
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label for="jumlah_produk" class="col-sm-2 col-form-label">Pelayanan Paket</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pelayanan_paket" name="pelayanan_paket" />
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                          <label for="pelayanan_paket" class="col-sm-2 col-form-label">Pelayanan Paket</label>
                          <div class="col-sm-10">
                              <!-- Checkbox 1 -->
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="paket1" name="pelayanan_paket[]" value="1000000">
                                  <label class="form-check-label" for="paket1">Penginapan.Rp 1.000.000</label>
                              </div>
                              <!-- Checkbox 2 -->
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="paket2" name="pelayanan_paket[]" value="Paket B">
                                  <label class="form-check-label" for="paket2">Transportasi.Rp 1.200.000</label>
                              </div>
                              <!-- Checkbox 3 -->
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="paket3" name="pelayanan_paket[]" value="Paket C">
                                  <label class="form-check-label" for="paket3">Makan.Rp 500.000</label>
                              </div>
                          </div>
                      </div>
                        <div class="row mb-3">
                          <label for="jumlah_produk" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" placeholder="Masukkan Jumlah Peserta Paket Wisata"/>
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="jumlah_produk" class="col-sm-2 col-form-label">Pilihan Paket Wisata</label>
                        <div class="col-sm-10">
                            {{-- <input type="number" class="form-control" id="divisi" name="divisi"/> --}}
                            <select class="form-control" id="divisi" name="divisi" >
                                <option value="" disabled selected>--Pilih Salah Satu--</option>
                                <option value="Akutansi dan Keuangan">Paket 1, 1 Hari</option>
                                <option value="Operasi Batu Ampar">Paket 2, 2 Hari</option>
                                <option value="Operasi Hang Nadim">Paket 3, 3 Hari</option>
                                <option value="Pemasaran dan Pengambangan">Paket 4, 7 Hari</option>
                            </select>
                        </div>
                    </div>
                        <div class="d-md-flex justify-content-md-end mt-3">
                            <button type="submit" class="btn"
                            style="background-color: #525ceb; color: white">Tambah Data</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('./assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('./assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('./assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('./assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('./assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('./assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('./assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <!-- Main JS File -->
  <script src="{{ asset('./assets/js/main.js') }}"></script>
</body>
</html>