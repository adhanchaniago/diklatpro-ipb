<!DOCTYPE html>
<html lang="id">

<head>
    <title>DiklatPro IPB | Program Pelatihan Profesi dan Sertifikasi Mutu Produk - LPPM IPB</title>
    <?php include 'import-style.php';?>
</head>

<body>
    <?php include 'header.php';
      include 'slider.php';?>
        <!--offer-->
        <div class="offer-w3layouts" id="whatis">
            <br>
            <br>
            <div class="container">
                <div class="offer-header-agile">
                    <h3 class="tittle">Apa itu <span>DiklatPro?</span></h3>
                    <p>Program pendidikan, pelatihan dan pengembangan profesi Institut Pertanian Bogor (Program Diklat Profesi-IPB), dibentuk pada tahun 2001 berdasarkan Surat Keputusan Ketua Lembaga Pengabdian Kepada Masyarakat Institut Pertanian Bogor No. 48/K13.10/2001 tanggal 18 April 2001. Pada awalnya program ini diarahkan untuk meningkatkan kemampuan dan kesiapan sumberdaya manusia khususnya mahasiswa/alumni Institut Pertanian Bogor dalam bidang profesi pertanian tropika dalam arti seluas-luasnya.
                        <br>
                        <br> </p>
                    <center><a class="btn btn-primary" href="tentang-kami">Read More</a></center>
                    <br> </div>
            </div>
            <div class="team">
                <center>
                    <h3 class="tittle">Fokus <span>Utama</span></h3></center>
                <div class="col-md-4 offer-grid ">
                    <div class="icon"> <i class="fa fa-briefcase" aria-hidden="true"></i> </div>
                    <h4>Pelatihan Profesi</h4> </div>
                <div class="col-md-4 offer-grid ">
                    <div class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </div>
                    <h4>Konsultasi</h4> </div>
                <div class="col-md-4 offer-grid ">
                    <div class="icon"> <i class="fa fa-group" aria-hidden="true"></i> </div>
                    <h4>Penguatan Masyarakat</h4> </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--//offer-->
        <!--//jadwal-->
        <div id="jadwalberita"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="tittle">Jadwal <span>Pelatihan</span></h3>
                    <center>
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#home">HACCP</a></li>
                            <li><a data-toggle="pill" href="#menu1">ISO 22000</a></li>
                            <li><a data-toggle="pill" href="#menu2">Pangan/Produk Halal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>Seri Training HACCP</h3> <img class="img-responsive" width="500px" src="images/jadwal-HACCP.jpg"> </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Seri Training ISO 22000</h3> <img class="img-responsive" width="500px" src="images/jadwal-iso22000.jpg"> </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Seri Training Makanan/Produk Halal</h3> <img class="img-responsive" width="500px" src="images/jadwal-halal.jpg"> </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-4">
                    <h3 class="tittle">Berita <span>Terbaru</span></h3>
                    <br>
                    <link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
                    <!-- Carousel-->
                    <?php 
                     include 'fetch_berita.php';?>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <?php for($x=0; $x<4;$x++) { 
                                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                                $link = $feed[$x]['link'];
                                $description = substr(rip_tags($feed[$x]['desc']), 0, 150)." [...]";
                                $image = $feed[$x]['image'];
                                $image = preg_replace("/(http:\/\/www.info.diklatprofesi.com\/wp-content\/uploads\/)([0-9]+\/[0-9]+)\/([a-zA-Z0-9_-]+)-[0-9]+x[0-9]+\.(jpg|png|jpeg|bmp)/","$1$2/$3.$4", $feed[$x]['image']);
                                $date = date('l F d, Y', strtotime($feed[$x]['date']));
                            ?>
                                    <div class="item <?php if($x==0) echo " active "; ?>"> <a href="<?php echo $link;?>">
                                         <img width="400px" src="<?php echo $image;?>">
                                        </a>
                                        <div class="caption">
                                            <h3><?php echo $title; ?></h3> <em><?php echo $date;?></em>
                                            <br>
                                            <br>
                                            <p>
                                                <?php echo $description; ?> <strong> <a href="<?php echo $link;?>">  Selengkapnya</a></strong> </div>
                                    </div>
                                    <?php } ?>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                        </div>
                        <!-- End Carousel -->
                        <br>
                        <br>
                        <center> <a class="btn btn-primary" href="http://info.diklatprofesi.com">Lihat Berita Lainnya</a> </center>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--//jadwal-->
        <!--/team-->
        <div class="team" id="team">
            <div class="container">
                <h3 class="tittle">Kata <span>Mereka</span></h3>
                <div class="main">
                    <div class="clearfix"></div>
                    <div class="col-md-3" data-wow-delay=".5s">
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-delay=".5s">
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-delay=".5s">
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-wow-delay=".5s">
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <br>
                <br> </div>
        </div>
        <!--//team-->
        <!--/klien-->
        <div class="offer-w3layouts" id="whatis">
            <br>
            <h3 class="tittle">Klien <span>Kami</span></h3>
            <center><img class="img-responsive" width="900px" src="images/perusahaan.png"></center>
        </div>
        <!--//klien-->
        <!--footer-->
        <div class="footer" id="kontakami">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Kantor <span>Kami</span></h3>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7410.170407194631!2d106.80297014523532!3d-6.60049183027743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5db22b33927%3A0x2008e636a9ed2e59!2sP4W+-+LPPM+IPB!5e0!3m2!1sid!2sid!4v1478665983687" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-5">
                        <br>
                        <br> <img width="400px" class="img-responsive" src="images/logo-diklatpro.png">
                        <br>
                        <center>
                            <p>QuaRance - IncuBIE - LPPM IPB (Consulting & Training in Quality) Kampus IPB Baranangsiang , Bogor
                                <br>e-mail: quarance@yahoo.com; quarance-ipb@ipb.ac.id
                                <br>Fax. (0251) 8652046 Hotline service
                                <br>(SMS/WA): 081 298 63 130
                                <br> ~ Think Quality Think QuaRance ~ </p>
                            <br>
                            <h4>
                       Program Diklat Profesi-IPB telah bekerjasama dengan 
                        </h4> </center> <img width="400px" class="img-responsive" src="images/1%20bekerjasama%20dengan.png"> </div>
                </div>
            </div>
            <div class="copy">
                <p>© 2016 DiklatPro | IAY</p>
            </div>
        </div>
        <!--/footer -->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear' 
                	};
                */
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });
            
        </script>
    <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true
                    , pager: true
                    , nav: true
                    , speed: 1000
                    , namespace: "callbacks"
                    , before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    }
                    , after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
                $('#myCarousel').carousel({
                    interval: 2000
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>