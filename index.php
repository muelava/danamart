<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="assets/css/main.css">

  <!-- import aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <style>

  </style>

  <!-- import swiper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</head>

<body id="beranda">
  <nav class="flex sticky top-0 navbar items-center w-full px-24 py-2 justify-between z-40">
    <div class="nav-left flex w-100">
      <img src="assets/img/brand-logo.png" class="brand-logo mr-4" alt="">
      <img src="assets/img/irma-logo.png" class="img-logo" alt="">
    </div>
    <button class="btn-toggler hidden">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <div class="nav-right block">
      <ul class="nav-tabs flex md:gap-10">
        <a href="#beranda" class="nav-item block">
          <li class="uppercase nav-link inline-block active beranda">beranda</li>
        </a>
        <a href="#investasi" class="nav-item block">
          <li class="uppercase nav-link inline-block investasi">investasi</li>
        </a>
        <a href="#kontak" class="nav-item block">
          <li class="uppercase nav-link inline-block kontak">kontak</li>
        </a>
        <li class="nav-item flex gap-1 items-center">
          <a href="#!" class="uppercase nav-link">en</a>
          <a href="#!" class="uppercase nav-link mygreen">id</a>
        </li>
        <li class="nav-item">
          <a href="#!" class="btn-primary nav-link uppercase px-7 py-1 rounded-full hover:shadow-md">Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- jumbotron -->
  <div class="jumbotron px-8 md:px-24 md:py-20 flex items-center">
    <div class="headline md:w-3/4 z-20">
      <h1 class="mygreen font-bold mb-5  text-43 leading-normal"  data-aos="zoom-in" data-aos-duration="1000">Seratus Juta Pertama di Umur<br
          class="hidden md:inline"> Muda, <span class="myblue">di Sini Tempatnya</span> </h1>
      <p class="font-bold capitalize luxuryBlack leading-relaxed text-xl" data-aos="zoom-in" data-aos-duration="1500">Dapatkan seratus juta kalian bersama kami</p>
      <p class="mb-14 luxuryBlack leading-relaxed text-xl" data-aos="zoom-in" data-aos-duration="2000">Kemudahan investasi tanpa batas, proses mudah,<br
          class="hidden md:inline"> cuan melimpah dan berikan dampakmu pada dunia</p>
      <p class="font-bold myblue mb-8 text-xl" data-aos="zoom-in-down" data-aos-duration="1000">#OtwJadiSultan</p>
      <a href="#" class="btn-primary nav-link  text-xl capitalize px-7 py-1 rounded-full hover:shadow-md">Hubungi
        Kami</a>
    </div>
    <div class="headimage absolute md:w-5/6 h-screen p-16 z-10 hidden lg:flex items-center justify-end right-0">
      <img src="assets/img/img-hero.png" class="w-5/12 mr-40" data-aos="fade-down-left" data-aos-duration="1000" alt="">
    </div>
  </div>
  <!-- end jumbotron -->


  <!-- highlights -->
  <section id="investasi" class="highlights mt-32">
    <h1 class="elegantBlack text-center text-4xl mb-10 font-bold" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">Investasi Pilihan IRMA</h1>

    <!-- Slider main container -->
    <div class="swiper mx-8 md:mx-24" data-aos="zoom-in" data-aos-duration="1000">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper py-20">
        <!-- Slides -->

        <div class="swiper-slide">
          <div class="content-slide shadow px-20 py-20">
          <div class="img-icon mb-6 h-40 w-40  flex mx-auto items-center justify-center rounded-full myBgGreen">
              <img src="assets/img/App monetization.png" class="w-32 h-32 object-fit" alt="">
            </div>
            <h2 class="capitalize font-bold text-xl mygreen text-center">Nama Produk</h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="content-slide shadow px-20 py-20">
          <div class="img-icon mb-6 h-40 w-40  flex mx-auto items-center justify-center rounded-full myBgGreen">
              <img src="assets/img/Business statistics-1.png" class="w-32 h-32 object-fit" alt="">
            </div>
            <h2 class="capitalize font-bold text-xl mygreen text-center">Nama Produk</h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="content-slide shadow px-20 py-20">
          <div class="img-icon mb-6 h-40 w-40  flex mx-auto items-center justify-center rounded-full myBgGreen">
              <img src="assets/img/Business statistics-1.png" class="w-32 h-32 object-fit" alt="">
            </div>
            <h2 class="capitalize font-bold text-xl mygreen text-center">Nama Produk</h2>
          </div>
        </div>

        <?php 
        for ($i=1; $i <=2 ; $i++) { ?>
        <div class="swiper-slide">
          <div class="content-slide shadow px-20 py-20">
            <div class="img-icon mb-6 h-40 w-40  flex mx-auto items-center justify-center rounded-full myBgGreen">
              <img src="assets/img/Business statistics-1.png" class="w-32 h-32 object-fit" alt="">
            </div>
            <h2 class="capitalize font-bold text-xl mygreen text-center">Nama Produk</h2>
          </div>
        </div>
        <?php } ?>

        <!-- end slide -->
      </div>
      <!-- If we need navigation buttons -->
      <div class="swiper-pagination"></div>
      
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  </section>
  <!-- /highlights -->


  <!-- footer -->
  <footer class="footer mt-24 pt-14 relative myGreenDark" id="kontak">
    <div class="px-8 md:px-24 flex justify-center md:justify-start relative myBgGreen sub-footer">

      <div class=" md:w-full lg:w-2/4 wrapper-foot pb-28 md:grid grid-cols-2 gap-10 z-20">
        <div class="first-foot col-start-1 col-span-2">
          <div class="logo-foot px-1.5 pb-1.5 pt-6 rounded-b-full inline-block bg-slate-50">
            <img src="assets/img/brand-logo.png" class="w-16 h-16" alt="">
          </div>
        </div>
        <div class="left-footer mb-16 md:mb-0">
          <h3 class="font-bold text-slate-50 text-xl mb-4" data-aos="zoom-in" data-aos-duration="500">PT. Dana Agung Nusantara</h3>
          <div class="address p-5 h-52" data-aos="zoom-in" data-aos-duration="1000">
            <p class="text-slate-50 leading-loose">
            Citylofts Sudirman <br class="block md:none">
            Lt. 22 unit 2216 <br class="block md:none">
            Jl. K.H Mas Mansyur No.121<br class="block md:none">
            Tanah Abang, Jakarta Pusat<br class="block md:none">
            10250 Indonesia
            </p>
          </div>
        </div>
        <div class="right-footer">
          <h3 class="font-bold text-slate-50 text-xl mb-4" data-aos="zoom-in" data-aos-duration="2000">Jam Operasional</h3>
          <div class="address p-5 h-52" data-aos="zoom-in" data-aos-duration="2000">
            <p class="text-slate-50 leading-loose">
            Senin - Jumat <br class="block md:none">
            09.00 - 18.00 WIB <br class="block md:none">
            Telp : (+62) 21-2555-6719 <br class="block md:none">
            Email : halo@danamart.id
            </p>
          </div>
        </div>
      </div>
      <div class="hero-footer absolute top-10 bottom-0 right-0 w-full lg:w-2/4 z-10">
        <img src="assets/img/ilustrator-footer.png" class="w-96 hidden lg:block" alt="">
      </div>

    </div>

          <div class="copyright py-5 px-8 md:px-24 flex flex-col items-center gap-y-4 md:gap-0 md:flex-row justify-center md:justify-between">
            <p class="text-slate-50 text-lg">Danamart. All Right Reserved 2020</p>
            <div class="socmed">
              <ul class="flex gap-3">
                <li class="bg-slate-50 p-2 rounded-full cursor-pointer">
                  <a href="https://instagram.com/danamartid" target="_blank" class=""><img src="assets/img/instagram.svg" alt=""></a>
                </li>
                <li class="bg-slate-50 p-2 rounded-full cursor-pointer">
                  <a href="https://web.facebook.com/danamartid/?_rdc=1&_rdr" target="_blank" class=""><img src="assets/img/facebook.svg" alt=""></a>
                </li>
                <li class="bg-slate-50 p-2 rounded-full cursor-pointer">
                  <a href="https://www.youtube.com/channel/UC4sqyHusrp265aP1h7TpyQQ" target="_blank" class=""><img src="assets/img/youtube.svg" alt=""></a>
                </li>
                <li class="bg-slate-50 p-2 rounded-full cursor-pointer">
                  <a href="https://www.linkedin.com/company/dana-aguna-nusantara-pt/" target="_blank" class=""><img src="assets/img/linkedin.svg" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
  </footer>
  <!-- end footer -->

  <a href="#beranda" id="btnTop" class="hidden fixed z-50 right-10 bottom-16 rounded-full inline-block bg-slate-50 p-3">
    <img src="assets/img/arrow-left.svg" class="rotate-90 w-6 h-6" alt="">
  </a>

  <!-- import aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- import jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- import javascript -->
  <script src="assets/js/main.js"></script>

  <!-- import swipper js -->
  <script type="module" src="assets/js/swiper.js"></script>

</body>

</html>