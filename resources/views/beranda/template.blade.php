<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $profil->nama }} &mdash; Sistem Informasi Desa & Kelurahan</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-dashboard/images/'.$profil->logo) }}">

    @if(Request::segment(2) === 'profil')
        <meta name="keywords" content="Profil {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'batas')
        <meta name="keywords" content="Batas Wilayah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'tanaman-komoditas')
        <meta name="keywords" content="Tanaman Komoditas {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'orbitasi')
        <meta name="keywords" content="Orbitasi {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'tipologi')
        <meta name="keywords" content="Tipologi {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'iklim')
        <meta name="keywords" content="Iklim {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'kesuburan-tanah')
        <meta name="keywords" content="Kesuburan Tanah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'penggunaan-tanah')
        <meta name="keywords" content="Penggunaan Tanah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'infrastruktur-melintasi')
        <meta name="keywords" content="Infrastruktur Melintasi {{ $profil->nama }}">
    @endif
    
    <meta name="description" content="{{ $profil->deskripsi }}">
    <meta name="author" content="{{ $profil->nama }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/style.css') }}">
    <script src="{{ asset('assets-dashboard/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: "lists",
            toolbar: "numlist bullist",
            theme: 'modern',
            mobile: { theme: 'mobile' }
        });
    </script>
    <style>
        .pelayanan{
            cursor: pointer;
        }
        *{
        font-family: sans-serif;
      }
    </style>
    <script src="{{ asset('assets-dashboard/js/Chart.bundle.min.js') }}"></script>

</head>
<body>

    <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap" data-aos="fade-up" style="background-color: {{ $pengaturan->warna }};">
            <div class="site-navbar">
                <div class="container-fluid py-1">
                    <div class="row align-items-center">
                        
                        <div class="col-5 text-center">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" style="margin-top: -30px" width="45" class="d-none d-xl-inline-block">

                <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" width="45" class="d-inline-block d-xl-none">

                <h5 class="ml-2 mt-2 site-logo text-white d-none d-xl-inline-block text-uppercase" style="text-align: left;">
                PEMERINTAH {{ $profil->nama }}
                <br>
                KECAMATAN LIMBOTO, GORONTALO
                </h5>
              </a>
            </div>
                        
            <div class="col-7">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container-fluid">
                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-xl-block text-center">
                    <li class="has-children">
                      <a href="#"> <i class="fa fa-home"></i> TENTANG</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/profil') }}"> <i class="fa fa-info"></i> PROFIL</a></li>
                        <li><a href="{{ url('beranda/tanaman-komoditas') }}"><i class="fa fa-leaf"></i> TANAMAN KOMODITAS</a></li>
                        <li><a href="{{ url('beranda/pelayanan') }}"><i class="fa fa-info-circle"></i> PELAYANAN</a></li>
                        <li><a href="{{ url('beranda/lembaga') }}"><i class="fa fa-bank"></i> LEMBAGA</a></li>
                        <li><a href="{{ url('beranda/dokumen') }}"><i class="fa fa-file"></i> DOKUMEN</a></li>
                        
                        <li class="has-children">
                          <a href="#"><i class="fa fa-binoculars"></i> FASILITAS</a>
                          <ul class="dropdown arrow-top">
                            <li><a href="{{ url('beranda/fasilitas-pemukiman') }}"><i class="fa fa-bed"></i> PEMUKIMAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-pemerintahan') }}"><i class="fa fa-building"></i> PEMERINTAHAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-peribadatan') }}"><i class="fa fa-moon-o"></i> PERIBADATAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-kesehatan') }}"><i class="fa fa-heart"></i> KESEHATAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-ekonomi') }}"><i class="fa fa-dollar"></i> EKONOMI</a></li>
                            <li><a href="{{ url('beranda/fasilitas-prasarana') }}"><i class="fa fa-wifi"></i> PRA-SARANA</a></li>
                            <li><a href="{{ url('beranda/fasilitas-pendidikan') }}"><i class="fa fa-book"></i> PENDIDIKAN</a></li>
                          </ul>
                        </li>

                      </ul>
                    </li>
                    
                    <li class="has-children">
                      <a href="#"><i class="fa fa-money"></i> KEUANGAN</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/belanja') }}"><i class="fa fa-credit-card"></i> BELANJA</a></li>
                        <li><a href="{{ url('beranda/pendapatan') }}"><i class="fa fa-leaf"></i> PENDAPATAN</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#"><i class="fa fa-users"></i> PENDUDUK</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/penduduk-usia') }}"><i class="fa fa-calendar"></i> USIA</a></li>
                        <li><a href="{{ url('beranda/penduduk-pekerjaan') }}"><i class="fa fa-dollar"></i> PEKERJAAN</a></li>
                        <li><a href="{{ url('beranda/penduduk-pendidikan') }}"><i class="fa fa-graduation-cap"></i> PENDIDIKAN</a></li>
                        <li><a href="{{ url('beranda/penduduk-golongan-darah') }}"><i class="fa fa-tint"></i> GOL. DARAH</a></li>
                        <li><a href="{{ url('beranda/penduduk-menikah') }}"><i class="fa fa-female"></i><i class="fa fa-male"></i> MENIKAH</a></li>
                        <li><a href="{{ url('beranda/penduduk-agama') }}"><i class="fa fa-moon-o"></i> AGAMA</a></li>
                        <li><a href="{{ url('beranda/penduduk-jenis-kelamin') }}"> <i class="fa fa-male"></i> JENIS KELAMIN</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('beranda/artikel') }}"><i class="fa fa-newspaper-o"></i> ARTIKEL</a></li>
                    <li><a href="{{ url('beranda/kegiatan') }}"><i class="fa fa-feed"></i> KEGIATAN</a></li>

@if(Session::has('pengguna'))
                    <li class="has-children">
                      <a href="#"><i class="fa fa-user"></i> {{ substr($pengguna->nama_pengguna, 0, 10) }} </a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/dashboard') }}"><i class="fa fa-dashboard"></i> PROFIL</a></li>
                        <li><a href="{{ url('keluar') }}"><i class="fa fa-sign-out"></i> KELUAR</a></li>
                      </ul>
                    </li>
@else
                    <li><a href="{{ url('masuk') }}"><i class="fa fa-sign-in"></i> MASUK</a></li>
@endif
                  </ul>
                </div>
              </nav>
            </div>

                    </div>
                </div>
            </div>
        </div>
        
    @yield('main-beranda')

        <footer class="site-footer border-top" data-aos="fade-down">
      <div class="container">
        <div class="row pt-2 text-left">
          <div class="col-md-6">
            <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" width="100" class="my-2">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <strong class="font-weight-bold">{{ $profil->nama }}</strong>
            <br> <br> Alamat: {{ $profil->alamat }} <br>
            Telepon: {{ $profil->telepon }} <br>   
            Email: {{ $profil->email }} <br>   
            
            <br> SIDESKEL Development by. <strong> TIM IT KKN-PPM UGM, UNG, UMGo</strong>
            <br> and This template is made by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            </p>
          </div>
          
          <div class="col-md-6">
            <h5>Maps </h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63833.414100565715!2d122.9484132327109!3d0.61513371305782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792e74a1a437d1%3A0xf71f75fa36a24350!2sKayubulan%2C+Limboto%2C+Gorontalo!5e0!3m2!1sen!2sid!4v1563680141208!5m2!1sen!2sid" style="width:100%; height:300px;" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    </footer>

    </div>

<script src="{{ asset('assets-beranda/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/aos.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/main.js') }}"></script>

</body>

</html>