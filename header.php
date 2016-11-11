<!--Header-->

<head>
    <link href="css/dropdown.css" rel="stylesheet" type="text/css"> </head>
<nav class="navbar navbar-default navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <a class="navbar-brand" href="<?php echo PROJECT_ROOT;?>home"><img src="images/logo-diklatpro.png" width="170"></a>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
        <nav class="linkEffects linkHoverEffect_12">
            <ul>
                <li><a class="scroll" href="<?php echo PROJECT_ROOT;?>index.php#whatis" data-hover="Tentang Kami">Tentang Kami</a></li>
                <li>
                    <div class="dropdown"> <a data-toggle="dropdown" data-target="#" href="#">
                Layanan <span class="caret"></span>
            </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-submenu"> <a tabindex="-1" href="#">Public Training</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo PROJECT_ROOT;?>layanan/publik/haccp">HACCP</a></li>
                                    <li><a href="<?php echo PROJECT_ROOT;?>layanan/publik/iso-22000">ISO 22000</a></li>
                                    <li><a href="<?php echo PROJECT_ROOT;?>layanan/publik/pangan-organik">Pangan Organik</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo PROJECT_ROOT;?>layanan/in-house-training">In-House Training</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo PROJECT_ROOT;?>layanan">Lihat Semua Layanan</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="scroll" href="<?php echo PROJECT_ROOT;?>index.php#jadwalberita" data-hover="Berita">Jadwal</a></li>
                <li><a href="http://info.diklatprofesi.com" data-hover="Jadwal">Berita</a></li>
                <li><a class="scroll" href="<?php echo PROJECT_ROOT;?>index.php#kontakami" data-hover="Kontak Kami">Kontak Kami</a></li>
                <li><a href="<?php echo PROJECT_ROOT;?>pendaftaran" data-hover="Pendaftaran">Pendaftaran</a></li>
            </ul>
        </nav>
    </div>
</nav>