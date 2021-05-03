<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Anugerah Alam Abadi</title>
  <link rel="shortcut icon" href="{{asset('foto/LOGO.png')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/index.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('template/css/lightbox.css')}}">

<link href="//db.onlinewebfonts.com/c/67137b5f6928edc941186baaab5a664b?family=Lemon/Milk" rel="stylesheet" type="text/css"/>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <script type="text/javascript" src="{{asset('template/js/lightbox-plus-jquery.js')}}"></script>
  <script src="https://kit.fontawesome.com/679d050ec1.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src="{{asset('template/js/index.js')}}"></script>

</head>
<body>
<header>
 
      <div class="navv">
      <nav>
         <div class="logo">
            <img src="{{asset('foto/LOGO.png')}}">
         </div>
         <label for="btn" class="icon">
         <span class="fa fa-bars"></span>
         </label>
         <input type="checkbox" id="btn">
         <ul>
            <li><a class="nav-link" href="#">Beranda</a></li>
            <li><a class="nav-link" href="#gallery">Galeri</a></li>
            <li><a class="nav-link" href="#product">Produk</a></li>
            <li><a class="nav-link" href="#berita">Berita</a></li>
            <li><a class="nav-link" href="#contact">Kontak</a></li>
            <li>
               <label for="btn-1" class="show">Tentang<i class="fas fa-caret-down"></i></label>
               <a href="#">Tentang<i class="fas fa-caret-down"></i></a>
               <input type="checkbox" id="btn-1">
               <ul>
                  <li><a class="nav-link" href="#tentang">Sejarah</a></li>
                  <li><a class="nav-link" href="#pimpinan">Pimpinan</a></li>
                  <li><a class="nav-link" href="#penghargaan">Penghargaan</a></li>
               </ul>
            </li>
         </ul>
      </nav>
    </div>
      <div class="banner">
        <img src="{{asset('foto/88.jpg')}}">
      </div>
</header>

<section>
      <div class="main">
      <div class="main-content">
      <h1>anugerah alam abadi</h1>
      <h3>indonesian plywood factory</h3>

      <div class="contact-product">
        <ul>
          <li><a href="#product">Produk</a></li>
          <li><a class="kotak-pinggir" href="#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ---------- TENTANG ---------- -->

<section id="tentang">
   <div class="about" data-aos="fade-up">

    <div class="aboutbg" data-aos="fade-up">
      <div class="us">
        <div class="about-title">
          <h2>About Us</h2>
        </div>
          <div class="img">
              <img src="{{asset('foto/88.jpg')}}">
          </div>
          <div class="text">
          <h2>our history</h2>
            <P>Didirikan pada tahun 2015 CV. Anugerah Alam Abadi memulai dengan produksi veneer core lalu pada bulan september tahun 2015 perusahaan ini memulai produksi veneer FB. sejak itu perusahaan tumbuhmenjadi veneer terbesar hingga memiliki pelanggan di penjuru pulau hingga sampai di manca negara</P>
          </div>

      </div>
    <div class="konten-about">
      @foreach ($visimisi as $row)            
          <div class="visimisi">
            
          <div class="visi">
            <h2 style="color: #4e4e4e;">VISI</h2>
            <p>{{$row->visi}}</p>
          </div>
        <div class="misi">
          <h2 style="color: #4e4e4e;">MISI</h2>
          <p>{!!$row->misi!!}</p>
        </div>

      </div>
      @endforeach
       </div>
    </div>
  </div>
</section>

<!-- ---------- PRODUK ---------- -->

<section id="product">

<div class="container">
  <div class="slider">

  @foreach ($product as $row)
    <div><div class="produk1">
                <div class="produkkiri">
                <div class="produk_img">
                    <div class="produkdisplay">
                        <div class="imgdisplay">
                        <img src = "{{url('img_product/'.$row->foto_1)}}" id="expandedImg" alt = "shoe image">
                        </div>
                    </div>
                </div>

            <div class="produkselect">
                <div class="imgitem">
                    <a data-id = "1">
                      <img src = "{{asset('img_product/'.$row->foto_1)}}" alt = "shoe image"onclick="myFunction(this);">
                    </a>
                </div>
                <div class="imgitem">
                    <a data-id = "2">
                      <img src = "{{asset('img_product/'.$row->foto_2)}}" alt = "shoe image"onclick="myFunction(this);">
                    </a>
                </div>
                <div class="imgitem">
                    <a data-id = "1">
                      <img src = "{{asset('img_product/'.$row->foto_3)}}" alt = "shoe image"onclick="myFunction(this);">
                    </a>
                </div>
            </div>
            </div>

            <div class="produkkanan">
                <div class="produktitle">
                    <h3>UB</h3>
                </div>

                <div class="produkdetail">
                    <br>
                    <p>Panjang : 1000</p>
                    <br>
                    <p>Lebar : 1000</p>
                    <br>
                    <p>Tebal : 1000</p>
                    <br>
                    <p>Jenis Kayu : 1000</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                </div>
            </div>
            </div>

            </div>
  @endforeach
              </div>

  </div>
</section>    

    {{-- @foreach ($product as $row) --}}

    {{-- <input type="radio" name="slider" checked="">
    <div class="imgBx">
      <div class="content1">
    <div class = "card-wrapper-prdct">
      <div class = "card-prdct">

        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "{{url('img_product/'.$row->foto_1)}}" id="expandedImg" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class=" img-selec">
            <div class = "img-item">
              <a data-id = "1">
                <img src = "{{asset('img_product/'.$row->foto_1)}}" alt = "shoe image"onclick="myFunction(this);">
              </a>
            </div>
            <div class = "img-item">
              <a data-id = "2">
                <img src = "{{asset('img_product/'.$row->foto_2)}}" alt = "shoe image" onclick="myFunction(this);">
              </a>
            </div>
            <div class = "img-item">
              <a data-id = "3">
                <img src = "{{asset('img_product/'.$row->foto_3)}}" alt = "shoe image" onclick="myFunction(this);">
              </a>
            </div>
          </div>
        </div>

        <div class = "product-content">
          <h2 class = "product-title">{{$row->jenis}}</h2>
          
          <div class = "product-detail">
            <p>Panjang : <span>{{$row->panjang}}</span></p><p>Lebar : <span>{{$row->lebar }}</span></p><p>Tebal : <span>{{$row->tebal}}</span></p><p>Jenis kayu : <span>{{$row->kayu}}</span></p>
            <p>{{$row->penjelasan}}</p>
          </div>
        </div>
      </div>
        
    </div>
      </div>
    </div> 
    </div> --}}
    {{-- @endforeach --}}



<!-- ---------- PENGHARGAAN ---------- -->

<section class="penghargaan-section" id="penghargaan">

<div class="penghargaan">
    <div class="konten-penghargaan" data-aos="fade-up">
      <br><br><br>
      <h2 style="color: #4e4e4e; font-size: 24px;">PENGHARGAAN</h2>
      <hr style="border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0,0,0,0), #4cb648, rgba(0,0,0,0));">
    </div>
    <div class="isi-penghargaan">
      @foreach ($achievement as $row)
        <div class="card1">
        <div class="penghargaan-img">
        <img src="{{asset('img_achievement/'.$row->foto)}}"/>
        </div>
        <div class="panel">
          <h3>{{$row->judul}}</h3>
          <br>
          <p>{{$row->penjelasan}}</p>
        </div>
      </div>
      @endforeach
      <div class="icon-penghargaan"></div>  
  </div>

</section>

<!-- ---------- PIMPINAN ---------- -->

<section class="pimpinan-section" id="pimpinan">

    <div class="pimpinan">
    <div class="kotak-pimpinan" data-aos="fade-up">
      <br><br><br>
      <h2 style="color: #4e4e4e;">PIMPINAN</h2>
      <hr style="border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0,0,0,0), #4cb648, rgba(0,0,0,0));">
    </div>
    <div class="konten-pimpinan">
      @foreach ($pimpinan as $row)
        <div class="isi-pimpinan1" data-aos="fade-up">
        <img src="{{asset('img_pimpinan/'.$row->foto)}}"/>
        <div class="tulisan-pimpinan">
          <h3>{{$row->nama}}</h3>
          <br>
          <p>PIMPINAN</p>
        </div>
      </div>  
      @endforeach
  </div>
</section>

<!-- ---------- GALLERY ---------- -->

<section class="gallery-section" id="gallery">
  @foreach ($galeri as $row)
    <div class="gallery-title" data-aos="fade-up">
      <h2>GALERI</h2>
      <hr style="border: 0;
                height: 1px;
                background-image: linear-gradient(to right, rgba(0,0,0,0), #4CB648, rgba(0,0,0,0));">
    </div>
    <div class="gallery" data-aos="zoom-in">
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_1)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_1)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_2)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_2)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_3)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_3)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_4)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_4)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_5)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_5)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_6)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_6)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_7)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_7)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-img">
          <img src="{{asset('img_galery/'.$row->foto_8)}}">
        </div>
        <div class="overly">
          <a href="{{asset('img_galery/'.$row->foto_8)}}" data-lightbox="roadtrip" class="btn">view</a>
        </div>
      </div>
    </div> 
  @endforeach
   
  </section>

<!-- ---------- BERITA ---------- -->

<section class="berita-section" id="berita">
  
  <div class="berita" data-aos="fade-up">
    <div class="title">
      <h2 style="color: #4e4e4e;">BERITA</h2>
      <hr style="border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0,0,0,0), #4cb648, rgba(0,0,0,0));">
    </div>
    <div class="column-card" data-aos="fade-up">
      @foreach ($berita as $row)
          <div class="card" data-aos="zoom-out" data-aos-duration="2000">
        <img src="{{asset('img_berita/'.$row->foto)}}"/>
        <div class="panel">
          <span>{{$row->Waktu}}</span>
          <h3>
            <br>
            {{$row->judul}}
          </h3>
          <span class="breaker"></span>
          <p>
            <br>
            {{$row->penjelasan}}
            <br>
          </p>
          <br>
          <a href="#!">More <i class="fa fa-long-arrow-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>

<!-- ---------- KONTAK ---------- -->

<section class="kontak-section" id="contact">
  <div class="kotak-kontak">
  <div class="kontak">
    <div class="kontak-info" data-aos="fade-up">
    <div>
      <h2>Contact Info</h2>
      <ul class="info">
        <li>
          <span><img src="icons/location.png"></span>
          <span>2Q4R+36 Grujugan, Kabupaten Bondowoso, Jawa Timur</span>
        </li>
        <li>
          <span><img src="icons/mail.png"></span>
          <span>aaa.anugerahwood@gmail.com</span>
        </li>
        <li>
          <span><img src="icons/call.png"></span>
          <span>(0332) 3525266 / 3525266</span>
        </li>
      </ul>
    </div>

    </div>
  <div class="kontak-form" data-aos="fade-up">
    <h2>Send a Message</h2>
    <div class="formBox">
      <div class="inputBox w50">
        <input type="text" name="" required placeholder="First name">
      </div>
      <div class="inputBox w50">
        <input type="text" name="" required placeholder="Last name">
      </div>
      <div class="inputBox w50">
        <input type="text" name="" required placeholder="Email">
      </div>
      <div class="inputBox w50">
        <input type="text" name="" required placeholder="Number phone">
      </div>
      <div class="inputBox w100">
        <textarea required placeholder="Write your message"></textarea>
      </div>
      <div class="inputBox w100">
        <input type="submit" value="send">
      </div>
    </div>
  </div>
  </div>
 </div>
</section>

<footer>
  <div class="konten-footer">
        <div class="logo-footer">
          <img src="{{asset('foto/LOGO.png')}}">
          <h2>Anugerah Alam Abadi</h2>
        </div>
        <div class="navbar2">
          <br>
          <h2>menu navigasi.</h2>
          <br>
          <div class="menu">
          <a href="#">Beranda</a>
          <a href="#pimpinan">Pimpinan</a>
          <a href="#tentang">Sejarah</a>
          <!-- <a href="#">struktur</a> -->
          <a href="#gallery">galeri</a>
          <a href="#berita">berita</a>
          <a href="#product">produk</a>
          <a href="#contact">kontak</a>
        </div>
        </div>
        <div class="kontak2">
          <br>
          <h2>kontak.</h2>
          <br>
          <div class="menu-kontak">
            <div class="footer1">
            <a href="#"><i class="fas fa-map-marker-alt"></i></a>
            <span>2Q4R+36 Grujugan, Kabupaten Bondowoso, Jawa Timur</span>
            </div>
            <div class="footer2">
            <a href="#"><i class="fas fa-envelope"></i></a>
            <span>aaa.anugerahwood@gmail.com</span>
            </div>
            <div class="footer3">
            <a href="#"><i class="fas fa-phone-alt"></i></a>
            <span>(0332) 3525266 / 3525266</span>
            </div>
          </div>
        </div>
  </div>
        <div class="copy">
          <br>
          <hr style="border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0,0,0,0), #a1a1a1, rgba(0,0,0,0));">
      <br>
          <p>copyright &copy; cv anugerah 2021</p>
          <br>
        </div>

    </footer>

 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
         $('.icon').click(function(){
           $('span').toggleClass("cancel");
         });

         window.addEventListener("scroll", function(){
         var nav = document.querySelector("nav");
         nav.classList.toggle("sticky", window.scrollY > 0);
      })
  </script>

   <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            dots: true
            });
        });
    </script>
</body>
</html>