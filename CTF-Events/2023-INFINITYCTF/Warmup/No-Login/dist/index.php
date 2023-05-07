<?php
ini_set('display_errors', 0);
if(!isset($_COOKIE['tebak_cookie'])) {
    setcookie('tebak_cookie', hash('sha256',openssl_random_pseudo_bytes(256)), time() + (86400 * 30), "/",NULL,NULL,true);
    echo $_COOKIE['tebak_cookie'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hash Cash</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a href="index.html" class="active">home</a></li>
      <li><a href="#">about</a></li>
      <li><a href="#">services</a></li>
      <li><a href="#">works</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </div>
  <div class="call">
    <h1>Call us :<span> ( +62 ) 6969-696-9696</span></h1>
  </div>
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="border-bottom"></div>
<div class="logo-wrapper">
  <div class="leftshadow"><img src="images/logo-wrap-left.jpg" /></div>
  <div class="logo">
    <h1>Hash Cash</h1>
  </div>
  <div class="rightshadow"><img src="images/logo-wrap-right.jpg" /></div>
</div>
<div class="clearing"></div>
<div class="banner-wrapper">
  <div class="bannerlef"><img src="images/banner-wrap-left.jpg" /></div>
  <div class="banner-container">
    <div class="banner">
      <div class="banner-content">
        <h1>Selamat Datang!</h1>
        <h2>APAKAH KAMU SUDAH MAKAN HARI INI?</h2>
        <a href="#">SUDAH!</a> </div>
    </div>
  </div>
  <div class="bannerright"><img src="images/banner-wrap-right.jpg"/></div>
</div>
<!--- banner wrapper div end -->
<div class="clearing"></div>
<div class="container">
  <div class="page-wrapper">
    <div class="primary-content">
      <div class="panel">
        <div class="title">
          <h1>Pentingnya Makan</h1>
          <h2>Jangan mau makan saat diingetin pacar/istri/suami saja. #ups </h2>
        </div>
        <div class="content">
          <p>Anak-anakku, ayo, jangan mager. Mari kita makan dengan sehat yang mengikuti pola 4S5S oke?. Jangan terus-terusan menatap laptop 12 jam nanti perut semakin membesar menyaingi ibu hamil. Saat berlomba CTF, jangan stres dan kosongkan pikiran dari hal-hal negatif. Mari kita sama-sama membangun fondasi Cybersecurity Indonesia 2045. </p>
          <div class="button-link"><a href="#">more</a></div>
        </div>
      </div>
    </div>
    <div class="sidebar">
      <div class="panel">
        <div class="img"><img src="images/img-2.jpg"/></div>
      </div>
    </div>
  </div>
  <div class="panel-wrapper">
    <div class="panel marRight30">
      <div class="title">
        <h1>Makanan untuk CTFers</h1>
      </div>
      <div class="imgbg">
        <div class="img"><img src="images/img-3.jpg"/></div>
      </div>
      <div class="content">
        <h2>Udang itu enak kecuali jika anda alergi.
          Ayam itu enak, mending ayam import atau ayam kampung?
         </h2>
        <p>Ini foto jari saya, anda bisa lihat itu 2 jari kan? Bukan, itu 10 jari. </p>
        <p>Ayo coba dipikirkan hash admin itu apa?</p>
        <div class="button-link"><a href="#">more</a></div>
      </div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>Jabat Tangan ala CTFERs</h1>
      </div>
      <div class="mid-panel">
        <div class="left marRight30">
          <div class="imgbg">
            <div class="img"><img src="images/img-4.jpg"/></div>
          </div>
        </div>
        <div class="right"> <a href="#">Jabat 3 Detik</a>
          <p class="padTop10">Kalau lebih dari 3 detik, mungkin ada rasa.</p>
        </div>
      </div>
      <div class="mid-panel padTop30">
        <div class="left marRight30">
          <div class="imgbg">
            <div class="img"><img src="images/img-5.jpg"/></div>
          </div>
        </div>
        <div class="right"> <a href="#">Jempolisme</a>
          <p class="padTop10">Tidak usah berjabat tangan, kasih jempol saja. Jabatan hanyalah ilusi.</p>
        </div>
      </div>
      <div class="mid-panel padTop30 padBottom28 borderNone">
        <div class="left marRight30">
          <div class="imgbg">
            <div class="img"><img src="images/img-6.jpg"/></div>
          </div>
        </div>
        <div class="right"> <a href="#">Jabat Tikus</a>
          <p class="padTop10">Apa perbedaan mouse dengan tikus? Mouse bisa digerakkan pakai tangan, tikus bisa digerakkan dengan uang ...., hehe.</p>
        </div>
      </div>
      <div class="content">
        <div class="button-link"><a href="#">more</a></div>
      </div>
    </div>
    <div class="panel">
      <div class="title">
        <h1>SEBELUM MAIN CTF</h1>
        <h2>Ada baiknya kita semua mandi dulu, makan dulu, baru bermain.</h2>
      </div>
      <div class="content">
        <p>Kata orang mobile legend itu game yang bagus.</p>
        <div class="right-panel">
          <ul>
            <li><a href="#">Mobile legend itu bagus.</a></li>
            <li><a href="#">Free Fire itu bagus.</a></li>
            <li><a href="#">PUBG itu bagus.</a></li>
            <li><a href="#">Valorant itu bagus.</a></li>
            <li><a href="#">Dying Light itu bagus.</a></li>
            <li><a href="#">Sambal Balado kalau disingkat jadi apa?</a></li>
            <li class="borderNone"><a href="#">Jangan lupa makan!</a></li>
          </ul>
        </div>
        <div class="button-link"><a href="#">more</a></div>
      </div>
    </div>
  </div>
  <!--- panel wrapper div end -->
</div>
<!--- container div end -->
<div class="clearing"></div>
<div class="panel-wrapper">
  <div class="panel marRight30">
    <div class="title">
      <h1>suntin culpa qui</h1>
    </div>
    <div class="contact">
      <input type="text" class="contact-input" name="name" id="name" value="Name"/>
      <input type="text" class="contact-input" name="name" id="name" value="Email"/>
      <input type="text" class="contact-comments" name="name" id="name" value="Comments"/>
      <div class="button-link"><a href="#">submit</a></div>
    </div>
  </div>
  <div class="panel marRight30">
    <div class="title">
      <h1>Ipsum quia dolor</h1>
      <h2>Cum soluta nobis impedit quo minus id 
        od maxime placeat facere possimus omnis voluptas assumenda est Ut in magna te
        at vestibulum augue. </h2>
    </div>
    <div class="midcontent">
      <div class="midcontentlink marRight40">
        <ul>
          <li><a href="#">Nullam molestie turp</a></li>
          <li><a href="#">Tempor incididunt</a></li>
          <li><a href="#">Nullam molestie tur</a></li>
          <li class="borderNone"><a href="#">Ut enim ad minim</a></li>
        </ul>
      </div>
      <div class="midcontentlink">
        <ul>
          <li><a href="#">Nullam molestie turp</a></li>
          <li><a href="#">Tempor incididunt</a></li>
          <li><a href="#">Nullam molestie tur</a></li>
          <li class="borderNone"><a href="#">Ut enim ad minim</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel">
    <div class="title">
      <h1>SOSMED CTFERS</h1>
      <h2>Jangan lupa follow!</h2>
    </div>
    <div class="social-media">
      <ul>
        <li><a href="#"><img src="images/icon-ol.jpg"/></a></li>
        <li><a href="#"><img src="images/icon-fb.jpg"/></a></li>
        <li><a href="#"><img src="images/icon-twitter.jpg"/></a></li>
        <li><a href="#"><img src="images/icon-linkdin.jpg"/></a></li>
        <li><a href="#"><img src="images/icon-fb.jpg"/></a></li>
      </ul>
    </div>
    <h2 class="padBottom10">Kirim kami Email</h2>
    <div class="infolinks marginBottom"> <a href="#">info@hashcash.ift</a> <a href="#">sales@hashcash.ift</a> <a href="#">contact@hashcash.ift</a> <a href="#">manager@hashcash.ift</a> </div>
  </div>
</div>
<div class="footer-wrapper">
  <div class="footer">
    <p> © 2012 All Rights Reserved.<a href="http://www.alltemplates.com"> < www.alltemplateneeds.com ></a> Gambar dari: <a href="http://photorack.net">www.photorack.net</a> </p>
  </div>
</div>
</body>
</html>
