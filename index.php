<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Project Team B-14</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  
  <body>
    
       <!-- Header -->
  <header>
    <div class="container">
      <div class="header-left">B14</div>
      <span class="menu-icon fa fa-bars "></span>
      <div class="header-right">
        <li><a href="#profile">Profile</a></li>
        <li><a href="#hubungi">Hubungi Kami</a></li>
      </div>
    </div>
  </header>
      <!-- Akhir Header --> 
  
      <!-- Bagian Utama -->
    <div class="top-wrapper">
      <div class="container">
        <h1>WELCOME TO WEBSITE</h1>
        <h1>DTS-B14</h1>
        <p>Website abstrak dari tim B14.</p>
        <p>Hasil Pergabutan karena Pandemi Covid-19</p>
       
      </div>
    </div>
      <!-- Akhir Bagian utama -->
  
      <!-- Bagian Extra -->
    <!--Bagian Extra 1-->
  <div class="main" id="profile">
    <h3 class="section-title">PROFILE TEAM B14</h3>        
    <div class="container">
      <div class="contents">
        <div class="content">
          <div class="contents-item item1">
            <img src="img/ari.jpg" alt="" class="img-responsive">
                <p>ARI PURNOMO AJI<br>0447677131-104</p>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
          </div>
        </div>
        <div class="content">
          <div class="contents-item item2">
            <img src="img/yuni.jpg" alt="" class="img-responsive">
            <p>AYUNI SARI<br>0447677030-25</p>
            <div class="social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="contents-item item3">
            <img src="img/andrian.jpg" alt="" class="img-responsive">
            <p>ANDRIAN JULIANSYAH<br>0447677021-98</p>
            <div class="social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="contents-item item4">
            <img src="img/anggun.jpg" alt="" class="img-responsive">
            <p>ANGGUN MUSTIKASARI DEWI<br>0447677120-43</p>
            <div class="social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="contents-item item5">
            <img src="img/angga.jpg" alt="" class="img-responsive">
            <p>ANGGA MAHENDRA<br>0447677021-98</p>
            <div class="social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
  // media query event handler

  function myFunction(x) {
    if (x.matches) { // If media query matches
      $('.contents').slick({
          centerMode: true,
          slidesToShow: 1
        });
      }
    else {
      $('.contents').slick({
          centerMode: true,
          slidesToShow: 1
        });
      }
  }
  var x = window.matchMedia("(max-width: 1170px)")
  myFunction(x)
  x.addListener(myFunction)

</script>

    <!--Bagian Extra 2-->

  <div class="extra2-bag" id="hubungi">
    <h3 class="section-title">Hubungi Kami</h3>
    <div class="container">
      <div class="extra2">
        <div class="extra2-item">
          <img src="img/learn.jpg" alt="">
            <div class="extra2-text">
              <h5>Learn</h5>
              <p>Kami belajar HTML&CSS untuk membuat Web</p>
            </div>
        </div>
        <div class="extra2-item">
          <img src="img/team.png" alt="">
            <div class="extra2-text">
              <h5>Team</h5>
              <p>Kami bekerja dan belajar bersama</p>
            </div>
        </div>
        <div class="extra2-item">
          <img src="img/webdesign.jpg" alt="">
            <div class="extra2-text">
              <h5>Web Design</h5>
              <p>Kami membuat web design</p>
            </div>
        </div>
        <div class="extra2-item">
          <img src="img/js.png" alt="">
            <div class="extra2-text">
              <h5>Future</h5>
              <p>Kami akan belajar JavaScript</p>
            </div>
        </div>
      </div>
      <div class="contact-form">
        <div class="contact">
          <p>Email<span>*</span></p>
          <input>
          <p>Pesan<span>*</span></p>
          <textarea></textarea>
          <p><span>*</span>wajib diisi</p>
          <input class="btn message" type="submit" value="Kirim">
        </div>
      </div>
    </div>
  </div>
    <!-- Akhir Bagian Extra -->
    <!--Footer-->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2020 | Built by DTS-B14 </p>
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>
