<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon-acenify.png')}}">
  <meta name="description" content="Acenify adalah jasa pembuatan website profesional, cepat, dan SEO-friendly untuk bisnis modern.">
  <meta name="author" content="Acenify Studio">
  <title>Acenify - Jasa Pembuatan Website Profesional & SEO Friendly</title>
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/sass/pheromone.css')}}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  <div id="preloader">
    <div id="status"></div>
  </div>
  <nav class="navbar navbar-custom navbar-fixed-top navbar-onepage">
    <div class="container-fluid">
            <div class="navbar-header d-flex justify-content-between align-items-center">
              <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#page-top" class="navbar-brand page-scroll">
                <img src="{{ asset('assets/img/logo/iconfy-logo-white.png')}}" alt="Acenify Logo" class="logo">
              </a>
              <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                  <li class="hidden"><a href="#page-top"></a></li>
                  <li><a href="#about" class="page-scroll">Tentang</a></li>
                  <li><a href="#services" class="page-scroll">Layanan</a></li>
                  <li><a href="#portfolio" class="page-scroll">Portofolio</a></li>
                  <li><a href="{{ route('frontend.template')}}" class="page-scroll">Template</a></li>
                  <li><a href="#testimonials" class="page-scroll">Testimoni</a></li>
                  <li><a href="#contact" class="page-scroll">Kontak</a></li>
                </ul>
              </div>
            </div>
    </div>
  </nav>
  <header data-background="{{ asset('assets/img/backgrounds/hero-background.jpg')}}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h4>Selamat datang di</h4>
        <h1>Acenify</h1>
        <h4>Jasa Pembuatan Website Modern, Cepat, dan SEO Friendly</h4>
    </div>
  </header>
  <section id="about">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-lg-6">
          <h3>Tentang Acenify</h3>
          <p class="no-pad">Acenify adalah studio kreatif yang berfokus pada pengembangan website yang responsif, cepat, dan teroptimasi untuk mesin pencari. Kami mendampingi bisnis dari berbagai skala untuk tampil menonjol secara digital.</p>
          <h2 class="classic">Tim Acenify</h2>
        </div>
        <div class="col-lg-5 col-lg-offset-1 text-center">
          <div data-value="0.95" class="circle"><span></span>
            <div class="agenda">Desain UI/UX</div>
          </div>
          <div data-value="0.9" class="circle"><span></span>
            <div class="agenda">Pengembangan Web</div>
          </div>
          <div data-value="0.85" class="circle"><span></span>
            <div class="agenda">Optimasi SEO</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about-slider2" class="section-small bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Desain Portofolio Modern</h3>
          <p>Acenify menyediakan solusi ideal untuk menampilkan karya Anda secara profesional, baik sebagai freelancer, agensi kreatif, maupun bisnis personal. Template portofolio kami dirancang untuk tampil menarik, cepat diakses, dan mudah dikelola.</p>
          <a href="portfolio-masonry-4.html" class="btn btn-dark">Lihat Portofolio</a>
        </div>
        <div data-wow-duration="2s" data-wow-delay=".2s" class="col-lg-5 col-lg-offset-1 wow zoomIn">
          <div id="carousel-light2" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
              <li data-target="#carousel-light2" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-light2" data-slide-to="1"></li>
              <li data-target="#carousel-light2" data-slide-to="2"></li>
            </ol>
            <div role="listbox" class="carousel-inner">
              <div class="item active"><img src="{{asset('assets/img/backgrounds/bg-template-help4.png')}}" alt="Portofolio Web Desain" class="img-responsive center-block"></div>
              <div class="item"><img src="{{asset('assets/img/backgrounds/bg-template-e-commerce3 .png')}}" alt="Tampilan Website Klien" class="img-responsive center-block"></div>
              <div class="item"><img src="{{asset('assets/img/backgrounds/bg-template-porto1.png')}}" alt="Contoh Landing Page" class="img-responsive center-block"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3>Layanan Kami</h3>
          <p>Acenify menawarkan solusi pembuatan website yang disesuaikan dengan kebutuhan bisnis Anda. Kami menggabungkan desain modern dengan performa maksimal dan optimasi mesin pencari.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <h4><i class="icon icon-big ion-ios-analytics-outline"></i> Website Bisnis</h4>
          <p>Bangun kehadiran digital profesional untuk bisnis Anda dengan desain yang elegan dan fungsionalitas lengkap.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4><i class="icon icon-big ion-ios-pie-outline"></i> Landing Page</h4>
          <p>Optimalkan konversi dengan halaman arahan yang cepat, efektif, dan mobile friendly.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i> Toko Online</h4>
          <p>Solusi e-commerce yang mudah digunakan untuk menjual produk Anda secara online dengan aman dan cepat.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h4><i class="icon icon-big ion-ios-game-controller-b-outline"></i> Optimasi SEO</h4>
          <p>Website Anda akan dirancang dengan prinsip SEO on-page untuk meningkatkan peringkat di Google.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-small bg-img4 text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big icon ion-ios-infinite-outline"></i> Gratis Update</h4>
          <p>Kami memberikan dukungan dan pembaruan gratis untuk setiap project Acenify Anda.</p>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i> Proses Cepat</h4>
          <p>Website bisa jadi dalam hitungan hari, sesuai kebutuhan dan jadwal Anda.</p>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big ion-ios-monitor-outline"></i> Desain Responsif</h4>
          <p>Website optimal di semua perangkat — dari desktop hingga smartphone.</p>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big ion-ios-settings"></i> Fleksibel & Skalabel</h4>
          <p>Website Anda siap berkembang bersama bisnis Anda.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h3>Butuh Bantuan untuk Memulai?</h3>
          <p>Acenify siap membantu Anda membuat website yang tidak hanya tampil memukau di semua perangkat, tetapi juga cepat, aman, dan siap bersaing di mesin pencari. Tim kami selalu siap menjawab pertanyaan dan memberikan solusi terbaik untuk kebutuhan digital Anda.</p>
          <a href="#contact" class="btn btn-dark">Konsultasi Gratis</a>
        </div>
        <div class="col-lg-6 col-lg-offset-1">
          <div id="carousel-light" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
              <li data-target="#carousel-light" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-light" data-slide-to="1"></li>
              <li data-target="#carousel-light" data-slide-to="2"></li>
            </ol>
            <div role="listbox" class="carousel-inner">
              <div class="item active"><img src="{{asset('assets/img/backgrounds/bg-template-help1.png')}}" alt="Website mobile friendly" class="img-responsive center-block"></div>
              <div class="item"><img src="{{asset('assets/img/backgrounds/bg-template-help2.png')}}" alt="Desain responsif Acenify" class="img-responsive center-block"></div>
              <div class="item"><img src="{{asset('assets/img/backgrounds/bg-template-help3.png')}}" alt="Optimasi web SEO" class="img-responsive center-block"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="no-pad-btm">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h3>Kumpulan Website Kami</h3>
            <p>Berikut adalah koleksi website yang telah kami buat untuk berbagai bisnis dan kebutuhan klien kami.</p>
          <ul class="portfolio-sorting list-inline text-center">
            <li><a href="portfolio-single.html" data-group="all" class="active">Semua</a></li>
            <li><a href="portfolio-single.html" data-group="landing">Landing Page</a></li>
            <li><a href="portfolio-single.html" data-group="ecommerce">E-commerce</a></li>
            <li><a href="portfolio-single.html" data-group="portofolio">Portofolio</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div id="grid" class="row portfolio-items">
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://miller.bslthemes.com/ashley-demo/home-1.html?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-1.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://miller.bslthemes.com/pixy-demo/home-1.html">
              <img src="{{ asset('assets/img/templates/template-landing-2.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://demo.epic-webdesign.com/tf-fable/demo/?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-3.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://miller.bslthemes.com/starbelly-demo/home-1.html">
              <img src="{{ asset('assets/img/templates/template-landing-4.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://miller.bslthemes.com/courtney-demo/light/home-1.html">
              <img src="{{ asset('assets/img/templates/template-landing-5.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://matias-react.vercel.app/">
              <img src="{{ asset('assets/img/templates/template-landing-6.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["ecommerce"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://pro-theme.com/html/viasun/01_home-cosmetic.html">
              <img src="{{ asset('assets/img/templates/template-landing-7.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://marketifythemes.net/html/grax/index.html">
              <img src="{{ asset('assets/img/templates/template-landing-8.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["ecommerce"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://gramentheme.com/html/fresheat/index-one-page.html">
              <img src="{{ asset('assets/img/templates/template-landing-9.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://quomodosoft.com/html/glint/?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-10.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://themesflat.co/html/open9/index.html?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-11.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://mixdesign.club/themeforest/braxton/index-svg.html">
              <img src="{{ asset('assets/img/templates/template-landing-12.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://html.themeholy.com/webteck/demo/home-digital-agency-op.html">
              <img src="{{ asset('assets/img/templates/template-landing-13.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://davis-html.netlify.app/index1">
              <img src="{{ asset('assets/img/templates/template-landing-14.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://demo.bosathemes.com/html/travele/index-v2.html">
              <img src="{{ asset('assets/img/templates/template-landing-15.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["portofolio"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://html.creativegigstf.com/charles/index-2.html">
              <img src="{{ asset('assets/img/templates/template-landing-16.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["ecommerce"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://template.hasthemes.com/hurst-v1/hurst/index.html">
              <img src="{{ asset('assets/img/templates/template-landing-17.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["landing"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://bastun.vercel.app/index-onepage">
              <img src="{{ asset('assets/img/templates/template-landing-18.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["ecommerce"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://react.marketpro.wowtheme7.com/?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-19.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-groups='["ecommerce"]' class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item">
            <a href="https://anvogue.vercel.app/?storefront=envato-elements">
              <img src="{{ asset('assets/img/templates/template-landing-20.png')}}" alt="Website bisnis modern">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h5>Website Bisnis Modern</h5><span>Desain bersih dan profesional</span>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-small action bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="no-pad">Kami Percaya Karya Adalah Bukti Terbaik</h3>
        </div>
        <div class="col-md-3 col-md-offset-1 text-right">
          <a href="portfolio-masonry-4.html" class="btn btn-dark-border">Lihat Seluruh Template</a>
        </div>
      </div>
    </div>
  </section>

  <section class="facts section-small bg-img">
    <div class="overlay"></div>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-4">
          <span data-min="0" data-max="50" data-delay="5" data-increment="1" class="numscroller">0</span>
          <h5 class="no-pad">Website Dirancang</h5>
        </div>
        <div class="col-sm-4">
          <span data-min="0" data-max="100" data-delay="5" data-increment="10" class="numscroller">0</span>
          <h5 class="no-pad">Klien Puas</h5>
        </div>
        <div class="col-sm-4">
          <span data-min="0" data-max="100" data-delay="5" data-increment="2" class="numscroller">0</span>
          <h5 class="no-pad">Proyek Selesai</h5>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3>Mengapa Memilih Acenify?</h3>
        </div>
      </div>
      <div class="row">
        <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon-big ion-ios-nutrition-outline"></i> Mudah Digunakan</h4>
          <p>Antarmuka yang ramah pengguna memudahkan Anda untuk mengelola dan memperbarui website tanpa keahlian teknis.</p>
        </div>
        <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon-big ion-ios-sunny-outline"></i> Siap untuk Developer</h4>
          <p>Struktur kode kami bersih dan terdokumentasi dengan baik, cocok untuk pengembangan lanjutan.</p>
        </div>
        <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon-big ion-ios-glasses-outline"></i> Desain Jelas & Elegan</h4>
          <p>Tampilan visual yang modern dan profesional meningkatkan kredibilitas brand Anda di mata pengunjung.</p>
        </div>
        <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon-big icon ion-ios-infinite-outline"></i> Fleksibel & Serbaguna</h4>
          <p>Dapat digunakan untuk berbagai kebutuhan — dari portofolio pribadi hingga website bisnis skala besar.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pricing text-center">
      <div class="row">
        <div class="col-md-12">
          <h3 class="mb-4">Paket Harga Layanan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 d-flex">
          <div class="panel panel-default w-100 d-flex flex-column">
            <div class="panel-heading">
              <h4>Landing Page</h4>
            </div>
            <div class="panel-body flex-fill">Website landing page sederhana, cocok untuk personal branding dan kampanye digital.</div>
            <ul class="list-group">
              <li class="list-group-item">Unlimited Halaman</li>
              <li class="list-group-item">Responsive Design</li>
              <li class="list-group-item">Gratis Domain .com/.id/.net</li>
              <li class="list-group-item">Responsive Design</li>
              <li class="list-group-item">SSL</li>
              <li class="list-group-item">Pilihan Design Unlimited</li>
              <li class="list-group-item">Access Cpanel</li>
              <li class="list-group-item">SEO Friendly</li>
              <li class="list-group-item">
                <span class="h5 d-block mb-2">Rp 1.999.000</span>
                <a href="#contact" class="btn btn-gray">Pesan Sekarang</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 d-flex">
          <div class="panel panel-default w-100 d-flex flex-column">
            <div class="panel-heading">
              <h4>E-commerce</h4>
            </div>
            <div class="panel-body flex-fill">Paket lengkap untuk UMKM atau perusahaan dengan kebutuhan konten dan halaman yang lebih banyak.</div>
            <ul class="list-group">
                <li class="list-group-item">Unlimited Halaman</li>
                <li class="list-group-item">Responsive Design</li>
                <li class="list-group-item">Gratis Domain .com/.id/.net</li>
                <li class="list-group-item">Responsive Design</li>
                <li class="list-group-item">SSL</li>
                <li class="list-group-item">Pilihan Design Unlimited</li>
                <li class="list-group-item">Access Cpanel</li>
                <li class="list-group-item">SEO Friendly</li>
                <li class="list-group-item">
                <span class="h5 d-block mb-2">Rp 5.500.000</span>
                <a href="#contact" class="btn btn-gray">Pesan Sekarang</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 d-flex">
          <div class="panel panel-default w-100 d-flex flex-column">
            <div class="panel-heading">
              <h4>Custom Pro</h4>
            </div>
            <div class="panel-body flex-fill">Untuk kebutuhan website skala besar, sistem kustom, atau integrasi lanjutan.</div>
            <ul class="list-group">
              <li class="list-group-item">Desain & Fitur Sesuai Permintaan</li>
              <li class="list-group-item">Diskusi & Proposal Proyek</li>
              <li class="list-group-item">Prioritas Dukungan</li>
              <li class="list-group-item">Gratis Domain .com/.id/.net</li>
              <li class="list-group-item">SSL</li>
              <li class="list-group-item">Access Cpanel</li>
              <li class="list-group-item">SEO Friendly</li>
              <li class="list-group-item">Life time support & Maintenance</li>
              <li class="list-group-item">
                <span class="h5 d-block mb-2">Hubungi Kami</span>
                <a href="#contact" class="btn btn-dark-border"><i class="fa fa-phone"></i> Konsultasi</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="testimonials" class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3 class="text-center">Apa Kata Klien Kami</h3>
          <div id="carousel-testimonials" data-ride="carousel" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
              <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-testimonials" data-slide-to="1"></li>
              <li data-target="#carousel-testimonials" data-slide-to="2"></li>
            </ol>
            <div role="listbox" class="carousel-inner">
              <div class="item active">
                {{-- <img src="img/testimonials/1.jpg" alt="" class="center-block"> --}}
                <div class="carousel-caption">
                  <h5>Pelayanan Acenify sangat profesional dan hasil websitenya memuaskan. Saya sangat merekomendasikan!</h5>
                  <span class="small text-muted">Pemilik Usaha Kuliner</span>
                  <h2 class="classic no-pad">Rina Andriani</h2>
                </div>
              </div>
              <div class="item">
                {{-- <img src="img/testimonials/2.jpg" alt="" class="center-block"> --}}
                <div class="carousel-caption">
                  <h5>Tim Acenify cepat tanggap, desainnya modern, dan proses pengerjaannya rapi dan tepat waktu.</h5>
                  <span class="small text-muted">Founder Startup</span>
                  <h2 class="classic no-pad">Bagus Pratama</h2>
                </div>
              </div>
              <div class="item">
                {{-- <img src="img/testimonials/3.jpg" alt="" class="center-block"> --}}
                <div class="carousel-caption">
                  <h5>Kami puas dengan layanan Acenify, websitenya responsif dan sangat membantu dalam promosi produk kami.</h5>
                  <span class="small text-muted">Manajer Pemasaran</span>
                  <h2 class="classic no-pad">Sinta Maharani</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2>Hubungi Kami</h2>
          <p>Konsultasikan kebutuhan website Anda bersama tim Acenify. Kami siap membantu mewujudkan situs terbaik untuk bisnis Anda.</p>
          <hr>
          <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> Tangerang, Indonesia</h5>
          <h5><i class="fa fa-envelope fa-fw fa-lg"></i> acenify.official@gmail.com</h5>
          <h5><i class="fa fa-phone fa-fw fa-lg"></i> +62 812-3456-7890</h5>
        </div>
        <div class="col-md-5 col-md-offset-2">
          <h2>Kirim Pesan</h2>
          <!-- Form tetap, hanya heading diganti -->
          <form id="contactForm" name="sentMessage" novalidate="">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="name" class="sr-only control-label">Nama</label>
                <input id="name" type="text" placeholder="Nama" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="email" class="sr-only control-label">Email</label>
                <input id="email" type="email" placeholder="Email" required="" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="phone" class="sr-only control-label">Nomor Telepon</label>
                <input id="phone" type="tel" placeholder="Nomor Telepon" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="message" class="sr-only control-label">Pesan</label>
                <textarea id="message" rows="2" placeholder="Pesan" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
              </div>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-dark">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="footer bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Tentang Acenify</h3>
          <p>Acenify adalah studio jasa pembuatan website yang membantu bisnis tumbuh secara digital dengan solusi web modern dan SEO-friendly.</p>
        </div>
        <div class="col-md-4">
          <h3>Kenapa Pilih Kami</h3>
          <p>Proses cepat, desain profesional, support jangka panjang, dan performa optimal di setiap website yang kami bangun.</p>
        </div>
        <div class="col-md-3">
          <h3>Kontak</h3>
          <p><i class="fa fa-phone fa-fw"></i> +62 812-3456-7890<br> <i class="fa fa-envelope fa-fw"></i> acenify.official@gmail.com<br> <i class="fa fa-map-marker fa-fw"></i> Tangerang, Indonesia</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p class="small">&copy;2025 Acenify. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-right">
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-fw fa-lg"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery-->
  <script src="{{ asset('assets/js/jquery-1.12.3.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript-->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Plugin JavaScript-->
  <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/js/device.min.js')}}"></script>
  <script src="{{asset('assets/js/form.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.placeholder.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.shuffle.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.parallax.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.circle-progress.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.swipebox.min.js')}}"></script>
  <script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
  <script src="{{asset('assets/js/tweecool.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
      <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os"></script>
      <script src="{{asset('assets/js/map.js')}}"></script>
  <!-- Custom Theme JavaScript-->
  <script src="{{asset('assets/js/pheromone.js')}}"></script>
</body>
</html>
