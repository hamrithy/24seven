<!DOCTYPE HTML>
<html>
    <head>
        <title>24 Seven Health Care</title>
        <link rel="sortcut icon"  href="<?= base_url() ?>asset/img/24.ico">

        <!-- metas -->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="IE = edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
        <meta name="author" content="http://www.24sevenhc.com.kh">
        <meta name="keywords" content="24 Seven health care">
        <meta name="description" content="dental product in cambodia">

        <!--/ metas -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!---/ Style --->
        <link rel="stylesheet" href="<?= base_url()?>asset/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url()?>asset/css/styles.css" />
        <link rel="stylesheet" href="" />

        <!---/ Style --->

        <!---/ Js --->

        <!---/ JS --->
    </head>
    <body class="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">

                </div>
                <div class="col-sm-2">
                    <div class="page">

                        <div class="language">
                            <div class="flag">
                                <img src="<?= base_url() ?>asset/img/english.png" alt="English language" width="40px" height="20px"/>
                                <img src="<?= base_url() ?>asset/img/khmer.png" alt="khmer language" width="40px" height="20px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- First row-->

            <!-- Menu --->
            <div class="row">
                <div class="col-lg-4">
                    <!-- logo -->
                    <section id="logo" class="logo">
                        <div>
                            <a href="index.html"><img class="img-responsive" src="<?= base_url() ?>asset/img/logo.png"alt="seven health care"></a>
                        </div>
                    </section>
                    <!--/ logo -->
                </div>
                <div class="col-lg-8">
                    <!-- main nav -->
                        <ul class="topnav">
                            <li><a class="active" href="<?= base_url() ?>home">Home</a></li>
                            <li>
                                <a href="#news">Products</a>
                                <ul>
                                    <li><a href="#">Loopes</a></li>
                                    <li><a href="#">Othodontic</a></li>
                                    <li><a href="#">For Clinical</a></li>
                                    <li><a href="#">Implantology</a></li>
                                    <li><a href="#">Intection Control</a></li>
                                    <li><a href="#">Surgical</a></li>
                                    <li><a href="#">Articalutor</a></li>
                                    <li><a href="#">For Laboratory</a></li>
                                    <li><a href="#">Filling(Materail & Instraument_</a></li>
                                    <li><a href="#">Burs & Diamond</a></li>
                                    <li><a href="#">X-Ray</a></li>
                                    <li><a href="#">Impression</a></li>
                                    <li><a href="#">Enclodontic</a></li>
                                    <li><a href="#">Bio (Research & Conclusion)</a></li>
                                    <li><a href="#">Handpiece</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#contact">Manaugactures</a>
                                <ul>
                                    <li><a href="#">NTI</a></li>
                                    <li><a href="#">Beyes</a></li>
                                    <li><a href="#">VDW</a></li>
                                    <li><a href="#">TekScan</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="<?=base_url() ?>user">Promotion</a> </li>
                            <li class="icon">
                                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                            </li>
                            <li><a href="#home">Workshop</a> </li>

                        </ul>

                        <script>
                            function myFunction() {
                                document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
                            }
                        </script>
                        <!--/ main nav -->
                </div>
            </div>
        </div>
    </body>
</html>