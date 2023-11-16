<?php include "admin/config/koneksi.php" ;?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nusantara Muslim</title>

    <meta name="description" content="Design - is a Premium HTML5 Responsive Templeate by Graygrids Team.">

    <meta name="keywords"
        content="Startup HTML template, Bootstrap Agency theme, html template, charity template, premium html template, one page template">

    <meta name="author" content="GrayGrids">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' 
		<!-content='IE=edge,chrome=1'><![endif]-->

    <!-- Bootstrap  -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- icon fonts font Awesome -->
    <script src="https://kit.fontawesome.com/1acab90c7e.js" crossorigin="anonymous"></script>

    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Responsive Styles -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Normalize Styles -->
    <link href="assets/css/normalize.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.transitions.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <script src="https://id.pinterest.com/"></script>
    <script src="https://id.pinterest.com/"></script>
    <![endif]-->

</head>
	<body>
		<!-- Start Header Section -->
		<header id="header">
			<nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars fa-lg"></i>
						</button>
						<!-- logo here -->
						<a href="index.php" class="navbar-brand"><img src="https://smp.alhikmahsby.sch.id/assets/img/logo.smp.png" alt=""></a>
					</div>
					
					<!-- Start Navigation Menu -->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
							<li class="active"><a href="#header">Beranda</a></li>
							<li><a href="#profil">Profil Masjid</a></li>
							<li><a href="#jadwal">Jadwal Sholat</a></li>							
							<li><a href="#blog">Jadwal Kajian</a></li>
							<li><a href="#connected">Kontak</a></li>
							<li><a href="admin/index.php">Login</a></li>
						</ul>
					</div>
					<!-- End Navigation Menu -->
				</div>
			</nav>
		</header>
		<!-- End Header Section -->
		
		<!-- Start Intro Section -->
		<section id="intro" class="section-intro">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="main-text">
							<h1 class="wow fadeInUp"><span>Nusantara Muslim</span> - Surabaya</h1>
							<h2 class="wow fadeInUp" data-wow-delay=".7s">Jalan Surabaya No.112 HR.Muhammad</h2>
							<div class="wow fadeInUp" data-wow-delay="1.5s"><a onClick="smoothScr.anim('services')" class="btn btn-border btn-lg"></i> Telusuri</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Intro Section -->

		<!-- Start Services Section -->
		<section id="profil" class="services">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Profil</span> Masjid</h1>
				<div class="row">
					<div class="col-sm-6 col-md-3 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
									<i class="fa fa-leaf"></i>
								</div>
								<h2>Nama Masjid</h2>
								<p>Nusantara Muslim</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".2s" data-wow-offset="10">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-heart"></i>
								</div>
								<h2>Alamat</h2>
								<p>Jalan Surabaya No.112 HR.Muhammad</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".4s" data-wow-offset="10">
						
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-child"></i>
								</div>
								<h2>Jadwal Sholat</h2>
								<p>Wilayah Surabaya</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".6s" data-wow-offset="10">	
						<div class="service-box">
							<div class="content" onclick='window.open("https://qiblafinder.withgoogle.com/intl/ms/desktop", "_blank");' onmousehover="cursor: pointer;">
								<div class="icon-wrapper" >
								<i class="fa fa-mobile-phone"></i>
								</div>
								<h2>Arah Kiblat</h2>
								<p>Masih tahap pengembangan........</p>
							</div>
						</div>
					</div>
		<!-- MAP-->

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.61536744745!2d112.7151806!3d-7.3366141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba9cfb6dfab%3A0x6fe7210ef241206!2sMasjid%20Nasional%20Al-Akbar%20Surabaya!5e0!3m2!1sid!2sid!4v1695781356467!5m2!1sid!2sid" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<!-- MAP-->
				</div>
			</div>
		</section>
		<!-- End Services Section-->
		
		<section id="jadwal" class="services">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Jadwal</span> Sholat <span>Untuk Kota </span><span id="kota" style="color: #0BAFA0;"></span></h1>
				<div class="row">
				<div class="col-sm-1 col-md-5 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa-solid fa-mosque"></i>
								</div>
								<h2>Subuh</h2>
								<p id="subuh" class="sholat"></p>
							</div>
						</div>
					</div>
					<div class="col-sm-1 col-md-5 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa-solid fa-mosque"></i>
								</div>
								<h2>dhuhur</h2>
								<p id="duhur" class="sholat"></p>
							</div>
						</div>
					</div>
					<div class="col-sm-1 col-md-5 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa-solid fa-mosque"></i>
								</div>
								<h2>Ashar</h2>
								<p id="asar" class="sholat"></p>
							</div>
						</div>
					</div>
					<div class="col-sm-1 col-md-5 wow fadeInUp" data-wow-delay=".2s" data-wow-offset="10">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa-solid fa-mosque"></i>
								</div>
								<h2>Magrib</h2>
								<p id="magrib"class="sholat"></p>
							</div>
						</div>
					</div>
					<div class="col-sm-1 col-md-5 wow fadeInUp" data-wow-delay=".6s" data-wow-offset="10">	
					<div class="service-box">
							<div class="content">
								<div class="icon-wrapper" >
								<i class="fa-solid fa-mosque"></i>
								</div>
								<h2 >Isya</h2>
								<p id="isya" class="sholat"></p>
							</div>
						</div>
					</a>		
					</div>
				</div>
			</div>
		</section>
		<!-- Start Blog Section -->
		<section id="blog">
			<div class="container">
				
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Jadwal</span> Kajian</h1>
				<div class="row">					
					<div id="blog-slider" class="owl-carousel owl-theme">		
						<?php $query=mysql_query("select * from kegiatan");
							while($data=mysql_fetch_array($query)){
						?>
						<div class="item wow fadeInUp" data-wow-delay="0.4s">
							<div class="blog-wrapper">
							<?php
								$gb = explode("/", $data['foto']);

								$gambar = $gb[2].'/'.$gb[3].'/'.$gb[4];                  
								?>
								<img src="admin/<?php echo $gambar;?>" alt="" style="width:400px;height:300px">
								<div class="content">
									<h3><?=$data['judul_kegiatan'];?></h3>
									<p><?=substr($data['keterangan'],0,100);?></p>
								</div>
								<div class="blog-footer">
									<p>published: <?=$data['tanggal_artikel'];?></p>
								</div>
							</div>
						</div>
						<?php }?>
						
					</div>
				</div>
			</div>
		</section>
		
		<!-- End Blog Section -->		
		<!-- Start Connected Section -->
		<section id="connected">
			<div class="container">
				<div class="row">
					<h2 class="section-title wow fadeInUp" data-wow-delay=".2s">Kontak</h2>		
					<h3 class="discription wow fadeIn" data-wow-delay=".2s">Kontak Yang Dapat DiHubungi : </h3>
					<hr>
					<div class="connected-wrapper text-center">
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
							
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-phone"></i></a>
								<h5>Surya Rizqi Villarres Sani Putra Hermansyah</h5>
								<h4>0813 3174 7303</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-user"></i></a>
								<h5>Email</h5>
								<h4>suryarizqivillaressaniputra.h@gmail.com</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Connected Section -->

		<!-- Footer Section Start -->
		<footer id="footer">
			<div class="container">
					<div class="copyright text-center">
						<a href="http://bimbingstreerfire123.blogspot.com/"> &copy <b>ARP.</b></a> | Repost by <a href='https://bimbingstreerfire123.blogspot.com/' title='Bimbing.com' target='_blank'>Bimbing.com</a>
						</p>
					</div>
			</div>
		</footer>
		<!-- Footer Section End -->

		<!-- Scroll Top -->
		<div class="scroll-top" data-spy="affix" data-offset-top="300">
			<a href="#header"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- Scroll End -->

		
		<!-- Include jquery.min.js plugin -->
		<script src="assets/js/jquery-min.js"></script>
		<!-- Include Bootstrap plugin -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- One page Nav plugin -->		
		<script src="assets/js/jquery.nav.js"></script>
		<!-- Include Bootstrap plugin -->
		<script src="assets/js/owl.carousel.js"></script>
		<!-- Include wow plugin -->
		<script src="assets/js/wow.js"></script>
		<!-- Include mixitup plugin -->
		<script src="assets/js/jquery.mixitup.js"></script>
		<!-- ScrollTop -->
		<script src="assets/js/lightbox.min.js"></script>
		<!-- Lightbox -->
		<script src="assets/js/scroll-top.js"></script>
		<!-- Smooth Scroll -->
		<script src="assets/js/smooth-scroll.js"></script>
		<!-- preset js -->
		<script src="assets/js/style.changer.js"></script>
		<!-- Modernizr js -->
		<script src="assets/js/modernizr-2.8.0.main.js"></script>
		<!-- Main js -->
		<script src="assets/js/main.js"></script>
			
	</body>
</html>
<div>
<script>
	console.log("a")
	$.get( "https://myip.wtf/json", function( data ) {
		const location =  data 
    $("#kota").text(location.YourFuckingCity);
  })
var kotaTextContent = $("#kota").text();
$("#kota").on("DOMSubtreeModified", function (evt) {
  if (evt.target.textContent !== kotaTextContent) {
    kotaTextContent = evt.target.textContent;
    $.get(
      "https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/kota.json",
      function (data, status) {
		let dataC = $.parseJSON(data)
        if (!dataC.includes(kotaTextContent.toLowerCase()) && kotaTextContent !== "jakarta")
          return $(".sholat").text(
            "Failed to fetch data (Maybe your city is not in the list?)"
          );
        const date = new Date();
        if(kotaTextContent
        .toString()
        .toLowerCase() === "jakarta") kotaTextContent = "jakartaselatan"
        $.get(
          `https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/${kotaTextContent.toLowerCase()}/${date.getFullYear()}/${date.getMonth() + 1}.json`,
          function (dasta, status) {
			const datasv = $.parseJSON(dasta)
			const datas = datasv[date.getDate() - 1]
			$("#subuh").text(datas.shubuh)
			$("#duhur").text(datas.dzuhur)
			$("#asar").text(datas.ashr)
			$("#magrib").text(datas.magrib)
			$("#isya").text(datas.isya)
          }
        );
      }
    );
  }
});




</script>