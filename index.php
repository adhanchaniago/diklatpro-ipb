<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DiklatPro IPB | Program Pelatihan Profesi dan Sertifikasi Mutu Produk - LPPM IPB</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="DiklatPro Program Diklat LPPM IPB" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <!--//fonts-->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!--light-box-files -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <!--//light-box-files -->
    <script type="text/javascript">
        $(function () {
            $('.gallery a').Chocolat();
        });
    </script>
    <!-- //js -->
    <script src="js/responsiveslides.min.js"></script>
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
                        <br>
                    </p>
                    <center><a class="btn btn-primary" href="tentang-kami">Read More</a></center>
                    <br>
                </div>
            </div>
            <div class="team">
                <center>
                    <h3 class="tittle">Fokus <span>Utama</span></h3></center>
                <div class="col-md-4 offer-grid ">
                    <div class="icon">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h4>Pelatihan Profesi</h4>
                </div>
                <div class="col-md-4 offer-grid ">
                    <div class="icon">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <h4>Konsultasi</h4>
                </div>
                <div class="col-md-4 offer-grid ">
                    <div class="icon">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <h4>Penguatan Masyarakat</h4>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--//offer-->
        <!--//jadwal-->
       
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     <h3 class="tittle">Jadwal <span>Pelatihan</span></h3>
                    <center>
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#home">HACCP</a></li>
                            <li><a data-toggle="pill" href="#menu1">ISO 22000</a></li>
                            <li><a data-toggle="pill" href="#menu2">Pangan/Produk Halal</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>Seri Training HACCP</h3>
                                <img class="img-responsive" width="500px" src="images/jadwal-HACCP.jpg">
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Seri Training ISO 22000</h3>
                                <img class="img-responsive" width="500px" src="images/jadwal-iso22000.jpg">
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Seri Training Makanan/Produk Halal</h3>
                                <img class="img-responsive" width="500px" src="images/jadwal-halal.jpg">
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-6">
                <h3 class="tittle">Berita <span>Terbaru</span></h3>
                </div></div></div>


        <!--//jadwal-->
        <!--/team-->
        <div class="team" id="team">
            <div class="container">
                <h3 class="tittle">Kata <span>Mereka</span></h3>
                <div class="main">
                    <div class="col-md-3 team-sec wow fadeInLeft animated animated" data-wow-delay=".5s">
                        <div class="clearfix"></div>
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>

                        </div>
                    </div>

                    <div class="col-md-3 team-sec wow fadeInLeft animated animated" data-wow-delay=".5s">
                        <div class="clearfix"></div>
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>

                        </div>
                    </div>
                    <div class="col-md-3 team-sec wow fadeInLeft animated animated" data-wow-delay=".5s">
                        <div class="clearfix"></div>
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>

                        </div>
                    </div>
                    <div class="col-md-3 team-sec wow fadeInLeft animated animated" data-wow-delay=".5s">
                        <div class="clearfix"></div>
                        <div class="team-grid">
                            <h4>“Materi pelatihan sangat bermanfaat” dll</h4>
                            <p>Bayu - Mahasiswa FPIK IPB</p>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
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
        <div class="footer">
            <div class="footer-head-agile">

            </div>
            <label></label>
            <div class="container">
                <div class="footer-content-agile">
                    <div class="col-md-4 about-us-agile">
                        <li class="contact-agile"><span class="fa-icon-w3"><i class="fa fa-phone" aria-hidden="true"></i></span>HUBUNGI KAMI : 040 123456 789</li>

                        <li class="mail"><span class="fa-icon-w3"><i class="fa fa-envelope" aria-hidden="true"></i></span>MAIL : <a href="mailto:diklatpro@ipb.ac.id">diklatpro@ipb.ac.id</a></li>
                    </div>
                    <div class="col-md-4 about-us-agile">
                        <h2><a href="index.php">DiklatPro IPB</a></h2></div>
                    <div class="col-md-4 about-us-agile">
                        <h4>Alamat</h4>
                        <div class="aboutus-right-wthree">
                            <p>LPPM IPB - Gedung Rektorat Andi Hakim Nasoetion Kampus IPB Darmaga Bogor Jawa Barat</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="copy">
                        <p>© 2016 DiklatPro | Iqbal Abiyoga</p>
                    </div>
                </div>
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
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>