<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SI-GEO | FARMING</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- leaflet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="{{asset('logo')}}/logo-header.png" alt=""><a href="index.html">Geo <span class="text-warning">- Farm</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Peta</a></li>
          <li><a class="nav-link scrollto" href="#servicess">Detail Lahan</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#team">Petani</a></li>
          <li><a class="nav-link scrollto" href="#contact">Respon Masyarakat</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Untuk Petani Indonesia</h1>
          <h2>Kini Hadir Inovasi Terbaru Untun Mendukung Percepatan Informasi Pertanian Di Indonesia
              khususnya Di Gorontalo
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://www.youtube.com/watch?v=yI_KX2I0OZk&t=12s" class="ps-0 ms-0 glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/asian-farmer.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo6.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo1.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo2.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo3.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo4.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('logo')}}/logo5.png" class="img-fluid" alt="">
          </div>

         

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Geo Farming</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Sistem Informasi Geo-Farming Bekerja sama denga Dinas Pertanian Kabupaten Bonebolango dalam hal pemenuhan dan percepatan informasi serta
              pengeloaan data yang terkair dengan Pertanian. Hal Yang anda akan lihat diwebsite ini
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Data Lahan, Detail Lahan, Pemilik Lahan</li>
              <li><i class="ri-check-double-line"></i> Perkiraan Panen, Umur Tanaman</li>
              <li><i class="ri-check-double-line"></i> Petani, Profil Petani</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Sistem Informasi Geo-Farming merupakan Sistem informasi berbasis web, yang merupakan solusi untuk petani yang ada di Gorontalo
              Awalnya Ini merupakan bentuk keresahan kami, dimana untuk mengetahui detail lahan pertanian itu sangat sulit, sulit mengetahui pemiliknya, luas dari lahannya, dan apa
              saja yang ditanam dilahan tersebut
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="services" class="why-us section-bg">
      <div class="container p-3" data-aos="fade-up">
        <div class="section-title">
          <h2>Peta Persebaran Pertanian</h2>
        </div>
        <div class="row text-center">
            <div id="app" style="width:100%; height:100vh;"></div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    {{-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="servicess" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DetaiL Lahan</h2>
          <p class="text-center">Detail Lahan memuat data lahan, dan dengan lengkap melampirkan data petani serta data panen dan umur dari komditas yang ditanam</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-10 col-12">
            <div class="card border-success">
              <div class="card-body" style="overflow-x: auto">
                <h5 class="card-title text-success">
                  Data Lahan
                </h5>
                <table class="table table-hove dataTable" id="dataTable">
                  <thead>
                    <tr>
                      <th>Nama Kelompok</th>
                      <th>Nama Petani</th>
                      <th>Luas Lahan</th>
                      <th>Detail Lahan Dan Umur Tanaman</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{$item->petani->nama_kelompok}}</td>
                      <td>{{$item->nama_petani}}</td>
                      <td>{{$item->luas}}</td>
                      <td>
                        <ol>
                            @forelse($item->detail_lahans as $detail)
                            <li>{{$detail->nama}},(
                            {{\Carbon\Carbon::parse($detail->tanggal_penanaman)->diffForHumans()}})</li>
                            @empty
                            <span class="badge bg-danger">Belum DiTanam</span>
                            @endforelse
                          </ol>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-12 mt-3">
            <div class="card border-success border-2">
              <div class="card-body" style="overflow-x: auto">
                <h5 class="card-title text-success">
                  Data Lahan
                </h5>
                <table class="table table-bordered dataTable" id="dataTable">
                  <thead>
                    <tr>
                      <th>Nama Kelompok</th>
                      <th>Nama Petani</th>
                      <th>Nama Komoditas</th>
                      <th>Perkiraan Panen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{$item->petani->nama_kelompok}}</td>
                      <td>{{$item->nama_petani}}</td>
                      <td>
                        <ol>
                            @forelse($item->detail_lahans as $detail)
                              <li>{{$detail->nama}}
                            @empty
                              <span class="badge bg-danger">Belum DiTanam</span>
                            @endforelse
                          </ol>
                      </td>
                      <td>
                        <ol>
                            @forelse($item->detail_lahans as $detail)
                              <li>{{$detail->ubahtanggal()}}</li>
                            @empty
                              <span class="badge bg-danger">Belum DiTanam</span>
                            @endforelse
                          </ol>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    {{-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>Mari lihat Kumpulan foto yang ada pada website ini</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app" >Petani</li>
          <li data-filter=".filter-card">Lahan</li>
          <li data-filter=".filter-web">Pegawai</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($petani as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('foto/'.$item->foto) }}" class="img-fluid" alt="" style="width: 350px; height: 212px;"></div>
            <div class="portfolio-info">
              <h4>{{$item->nama}}</h4>
              <p><span>Jumlah Lahan = </span>{{$item->lahans->count()}}</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach
          @foreach($detail_lahan as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('foto_lahan/'.$item->foto_lahan) }}" class="img-fluid" alt="" style="width: 350px; height: 212px;"></div>
            <div class="portfolio-info">
              <h4>{{$item->nama}}</h4>
              <p><span>Tanam = </span>{{$item->ubahtanggal1()}}</p>
              <p><span>Perkiraan Panen = </span>{{$item->ubahtanggal()}}</p>
            </div>
          </div>
          @endforeach
          @foreach($pegawai as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('pegawai/'.$item->foto)}}" class="img-fluid" alt="" style="width: 350px; height: 212px;"></div>
            <div class="portfolio-info">
              <h4>{{$item->nama}}</h4>
              <p>{{$item->user->role}}</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profile Pegawai</h2>
        </div>

        <div class="row">
          @foreach($pegawai as $item)
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('pegawai/'.$item->foto)}}" class="rounded-circle" alt="" style="width: 160px; height:160px;"></div>
              <div class="member-info">
                <h4>{{$item->nama}}</h4>
                <span>Jabatan</span>
                <p>{{$item->alamat}}</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dhani Ardiyanto Syahdila</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aqshal Ibrahim</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Respon yang sering diajukan</h2>
          <p>Kami mendata Semua Respon masyarakat agar akan menjadi evaluasi untuk perbaikan dan demi menjaga kesehata lahan pertanian yang ada di Gorontalo</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Air kering <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                    Pengairan Dilahan milik pak dani tidak bisa
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Hama yang sangat sulit untuk dibasmi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Hama sudah sangat banyak, bagaimana penanggulannya. saat ini kami sudah melakukan faksin pada tanaman
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana sayur bisa tumbuh dengan baik? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sayur saya selalu gagal panen, Padahal perawatannya dijaga dengan baik
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"> Pengairan Bermasalah? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  ada proble mengenai pengairan
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Bagaiman supaya penjualan padi kedepannya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Saya inging memasarkan komoditas tanaman, akan tetapi saya bingung arah penjualannya kemana?
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Respon</h2>
          <p>Laporkan masukan dan perbaikan secara cepat dan tepat. Hanya dengan melihat map tentukan lokasi yang ingin dilaporkan
            lalu buat berikan respon untuk mempercepat perbaikan.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokas:</h4>
                <p>Jl. Kasmat Lahay, Bongopini, Bonebolango, Gorontalo</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon</h4>
                <p>0895393067395</p>
              </div>

              <div id="myapp" style="width:100%; height:60vh;"></div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('reponse.store')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nama">Masukan Nama</label>
                  <input type="text" name="nama" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Masukan Email</label>
                  <input type="email" class="form-control" name="email @error('email') is-invalid @enderror" id="email" required>
                  @error('email')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              
                <input type="hidden" class="form-control" name="lahan_id" id="id" required>
              <div class="form-group">
                <label for="name">Response</label>
                <textarea class="form-control" name="response" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="save">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Gabung Bersama Kami Di Geo-Farming</h4>
            <p>Menjadi Bagian dari kami dan mari memajukan petani</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Geo - Farming</h3>
            <p>
              JL. Lihibadu <br>
              Kecamatan Bulango Timur<br>
              Kabupaten Bonebolango<br>
              Provinsi Gorontalo <br><br>
              <strong>Phone:</strong> 0895393067823<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Full</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peta</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Petani</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Respon Masyarakat</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Farm Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penjualan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Ikuti Kami</h4>
            <p>Untuk pertanyaan dan saran bisa hubungi kami melalui</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>RISTI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Risti ????</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Leaflet -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script>

        var map = L.map('app').setView([0.5663641476309691, 123.117084773985], 16);
    
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        @foreach($data as $item)

          L.marker([{{$item->lat}}, {{$item->long}}]).addTo(map)
            .bindPopup(
            "Nama Kelompok: {{$item->petani->nama_kelompok}} <br>"+
            "Pemilik : {{$item->nama_petani}} <br>"+ 
            "Luas : {{$item->luas}} <br>"+
            "Pengairan : {{$item->status_pengairan}} <br>"+
            "kategori tanaman : @forelse($item->detail_lahans as $detail) {{$detail->nama}},@empty Kosong @endforelse <br>"
            ).openPopup();

            // latlngs = [
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5691848951373146, 123.11909884214404],
            //     [0.5690266526118511, 123.11957359313966]],
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5693914150368898, 123.11975061893465],
            //     [0.5690078780746564, 123.1195628643036],
            //     ], 
            // ];

            // var latlngs = [
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.5691848951373146, 123.11909884214404],
            //     [ 0.5690266526118511, 123.11957359313966]],
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.569396779190027, 123.11976939439775],
            //     [ 0.5690186063816176, 123.11957091093065]],
                
            // ];


            // var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

            // // zoom the map to the polyline
            // map.fitBounds(polyline.getBounds());
        @endforeach

    
    </script>
    <script>

        var map = L.map('myapp').setView([0.5663641476309691, 123.117084773985], 16);
    
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        @foreach($data as $item)

          L.marker([{{$item->lat}}, {{$item->long}}]).addTo(map)
            .bindPopup(
            "Nama Kelompok: {{$item->petani->nama_kelompok}} <br>"+
            "Pemilik : {{$item->nama_petani}} <br>"+ 
            "Luas : {{$item->luas}} <br>"+
            "Pengairan : {{$item->status_pengairan}} <br>"+
            "kategori tanaman @foreach($item->detail_lahans as $detail) {{$detail->nama}}, @endforeach <br>"+
            "<button onclick='myFunction()' id='detail' data-id='{{$item->id}}' class='btn btn-success mt-2'>Tentukan Lokasi</button>"
            ).openPopup();

            function myFunction(){
              var lahan = $('#detail').attr('data-id');
              $('#id').val(lahan);
            }

            // latlngs = [
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5691848951373146, 123.11909884214404],
            //     [0.5690266526118511, 123.11957359313966]],
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5693914150368898, 123.11975061893465],
            //     [0.5690078780746564, 123.1195628643036],
            //     ], 
            // ];

            // var latlngs = [
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.5691848951373146, 123.11909884214404],
            //     [ 0.5690266526118511, 123.11957359313966]],
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.569396779190027, 123.11976939439775],
            //     [ 0.5690186063816176, 123.11957091093065]],
                
            // ];


            // var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

            // // zoom the map to the polyline
            // map.fitBounds(polyline.getBounds());
        @endforeach

    
    </script>


<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function(){
          $('.dataTable').DataTable();
      })
  </script>
</body>

</html>