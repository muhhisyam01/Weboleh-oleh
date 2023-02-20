<header class="header-area">
    <!--Start header upper-->
    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="flex-box-three">
                            <div class="header-upper-left clearfix">
                                <div class="state-box">
                                    <div class="state-content float-right">
                                        <!--Start single state-->
                                        <div class="state" id="value1">
                                            <ul class="clearfix">
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="flaticon-technology"></span>    
                                                    </div>
                                                    <div class="text-box">
                                                        <p>0853-9933-3737</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="flaticon-note"></span>    
                                                    </div>
                                                    <div class="text-box">
                                                        <p>rkbmamuju@gmail.com</p>
                                                    </div>
                                                </li>
                                            </ul>    
                                        </div>
                                        <!--End single state-->
                                    </div>
                                </div>    
                            </div>
                            <div class="header-upper-right clearfix">
                                <p>Sosial Media</p>
                                <ul class="sociallinks-style-one">
                                    <li><a href="https://www.facebook.com/rumah.b.mamuju"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/rumahbumn.mamuju/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopee" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header upper-->
    <!--Start header lawer-->
    <div class="header-lower">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-lawer-content clearfix">
                        <div class="header-lower-left">
                            <div class="logo">
                                <a href="/">
                                    <img src="frontend/images/logorb.png" width="160px" alt="Awesome Logo">
                                </a>
                            </div>
                        </div>
                        <div class="header-lower-right clearfix">
                            <nav class="main-menu clearfix">
                                <div class="navbar-header clearfix">   	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="/">Home</a></li>
                                        <li class=""><a href="About">About Us</a>
                                        </li>
                                        <li ><a href="Services">Services</a>
                                           
                                        </li>
                                        <li ><a href="Kegiatan_Home">Kegiatan</a>
                                        </li>
                                        <li class="dropdown"><a href="Shop">Shop</a>
                                            <ul>
                                                <li><a href="Shop">Shop Products</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Contact">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- <div class="mainmenu-middle clearfix">
                                <ul class="clearfix">
                                    <li> 
                                        <div class="outer-search-box">
                                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                                            <ul class="search-box">
                                                <li>
                                                    <form method="post" action="frontend/index.html">
                                                        <div class="form-group">
                                                            <input type="search" name="search" placeholder="Search Here" required>
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                    
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header lawer-->
    <!---Start sticky header-->
    <div class="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-colum pull-left">
                        <div class="logo">
                            <a href="/">
                                <img src="frontend/images/logorb.png" width="140px" alt="Awesome Logo">
                            </a>
                        </div>    
                    </div>
                    <div class="right-colum pull-right">
                        <nav class="main-menu clearfix">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="/">Home</a></li>
                                    <li ><a href="About">About Us</a></li>
                                    <li ><a href="Services">Services</a></li>
                                    <li ><a href="Kegiatan_Home">Kegiatan</a></li>
                                    <li class="dropdown"><a href="Shop">Shop</a>
                                        <ul>
                                            <li><a href="Shop">Shop Products</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>   
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!---End sticky header-->
</header> 
<main>
        <!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php 
                foreach ($profil as $get_profil) { ?>
            <li data-transition="fade">
            <!-- <img src=""  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"> -->
                <img src="<?= base_url()."/img/profil/".$get_profil['slide_1'] ?>"  alt="" width="100" height="200" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="370" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    
                    <div class="slide-content left-slide">
                        <div class="title"><?= $get_profil['nama_umkm'] ?></div>
                        <!-- <div class="big-title">Business Advice</div>
                        <div class="text">With over 10 years of experience helping businesses<br>to find comprehensive solutions.</div>
                        <div class="btns-box">
                            <a href="frontend/about.html" class="thm-btn pdone">Read More</a>&ensp; 
                            <a href="frontend/contact.html" class="thm-btn btn-style-two pdtwo">Contact Us</a> 
                        </div> -->
                    </div>
                </div>
            </li>
            <li data-transition="fade">
            <!-- <img src=""  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"> -->
                <img src="<?= base_url()."/img/profil/".$get_profil['slide_2'] ?>"  alt="" width="100" height="200" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="370" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    
                    
                </div>
            </li>

            <li data-transition="fade">
            <!-- <img src=""  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1"> -->
                <img src="<?= base_url()."/img/profil/".$get_profil['slide_3'] ?>"  alt="" width="100" height="200" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="370" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                </div>
            </li>

            <?php } ?>
            
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 

<!--Start call to action area-->
<!-- <section class="callto-action-area sec-pd-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="callto-action-imgbox">
                    <img src="frontend/images/resources/callto-action-image.jpg" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="callto-action-text">
                    <div class="title">
                        <span>Innovatiove and Creative</span>
                        <h1>Consulting Experts.</h1>
                    </div>
                    <div class="text-holder">
                        <p>Over 24 years experience and knowledge international standards, technologicaly changes and industrial systems, we are dedicated to provides seds the best and economical solutions to our valued customers there us are many variations of of  but the passages majority have suffered mistaken idea inFocus has helped us to just have a better handle.</p>
                        <ul>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> Pleasure and praising pain was born</li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> The great explorer of the truth</li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> Anyone who loves or pursues or desires</li>
                        </ul>
                        <div class="founder-text">
                            <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
                            <h3>- Astley Feltcher, Founder.</h3>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section> -->
<!--End call to action area-->

<!--Start services area-->
<section class="services-area">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <div class="border center color-2"></div> 
                        <h1>Services</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <!--Start single service item-->
            <div class="single-service-item">
                <div class="icon-holder">
                    <span class="flaticon-arrow"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-arrow"></span>    
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="service-single.html">Pembuatan Legalitas UKM</a></h3> 
                    <p>Penjelasan Legalitas UKM</p>
                    <a class="readmore" href="frontend/service-single.html">Selanjutnya<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>    
            <!--Start single service item-->
            <!--Start single service item-->
            <div class="single-service-item bg-one">
                <div class="icon-holder">
                    <span class="flaticon-business"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-business"></span> 
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="frontend/service-single.html">Pusat Oleh-Oleh Mamuju Sulbar</a></h3> 
                    <p>Penejelasan Pusat Oleh-Oleh Mamuju Sulbar</p>
                    <a class="readmore" href="frontend/service-single.html">Selanjutnya<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>    
            <!--Start single service item-->
            <!--Start single service item-->
            <div class="single-service-item">
                <div class="icon-holder">
                    <span class="flaticon-idea-2"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-idea-2"></span> 
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="service-single.html">Pembuatan Website</a></h3> 
                    <p>Kami Menyediakan Service Pembuatan WEBSITE bagi rekan-rekan pelaku usaha UMKM yang ingin go DIGITAL sehingga 
                        mempermudah dalam promosi.</p>
                    <a class="readmore" href="service-single.html">Selanjutnya<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>    
            <!--Start single service item-->
        </div>
        <div class="flex">
            <!--Start single service item-->
            <div class="single-service-item bg-one">
                <div class="icon-holder">
                    <span class="flaticon-chart"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-chart"></span> 
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="service-single.html">Pembuatan Toko Online</a></h3> 
                    <p>Penjelasan Toko Online</p>
                    <a class="readmore" href="service-single.html">Selanjutnya<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>    
            <!--Start single service item-->
            <!--Start single service item-->
            <div class="single-service-item">
                <div class="icon-holder">
                    <span class="flaticon-business-1"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-business-1"></span> 
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="service-single.html">Informasi Komoditas Sulawesi Barat</a></h3> 
                    <p>Penjelasan Informasi Komoditas Sulawesi Barat</p>
                    <a class="readmore" href="service-single.html">Selanjutnya<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>    
            <!--Start single service item-->
            <!--Start single service item-->
            <!-- <div class="single-service-item bg-one">
                <div class="icon-holder">
                    <span class="flaticon-upload"></span>
                    <div class="overlay-icon">
                        <span class="flaticon-upload"></span> 
                    </div>
                </div>
                <div class="text-holder">
                    <h3><a href="service-single.html">Working Space</a></h3> 
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally.</p>
                    <a class="readmore" href="service-single.html">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>   
                </div>    
            </div>     -->
            <!--Start single service item-->
        </div>
    </div>
</section>
<!--End services area-->

<!--Start fact counter area-->
<section class="fact-counter-area sec-pd-one" style="background-image:url(fronten/images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="single-fact-counter text-center">
                        <div class="icon-holder">
                            <span class="flaticon-pen"></span>
                        </div>
                        <div class="count-box">
                            <!-- <h1><span class="timer" data-from="1" data-to="200" data-speed="200" data-refresh-interval="50">200</span></h1> -->
                            <div class="overlay-title">
                                <h3>200</h3>
                                <hr>
                                <h3>Pelaku UMKM Tersebar di Mamuju</h3>
                            </div>
                        </div>
                    </li>
                    <li class="single-fact-counter text-center">
                        <div class="icon-holder">
                            <span class="flaticon-people"></span>
                        </div>
                        <div class="count-box">
                            <!-- <h1><span class="timer" data-from="1" data-to="389" data-speed="5000" data-refresh-interval="50">389</span></h1> -->
                            <div class="overlay-title">
                                <h3>200</h3>
                                <hr>
                                <h3>Data Selanjutnya</h3>
                            </div>
                        </div>
                    </li>
                    <li class="single-fact-counter text-center">
                        <div class="icon-holder">
                            <span class="flaticon-smile"></span>
                        </div>
                        <div class="count-box">
                            <!-- <h1><span class="timer" data-from="1" data-to="1564" data-speed="5000" data-refresh-interval="50">1564</span></h1> -->
                            <div class="overlay-title">
                                <h3>200</h3>
                                <hr>
                                <h3>Data Selanjutnya</h3>
                            </div>
                        </div>
                    </li>
                    <li class="single-fact-counter text-center">
                        <div class="icon-holder">
                            <span class="flaticon-medal"></span>
                        </div>
                        <div class="count-box">
                            <!-- <h1><span class="timer" data-from="1" data-to="172" data-speed="5000" data-refresh-interval="50">172</span></h1> -->
                            <div class="overlay-title">
                                <h3>200</h3>
                                <hr>
                                <h3>Data Selanjutnya</h3>
                            </div>
                        </div>
                    </li>
                </ul>    
            </div>
        </div>
    </div>
</section>
<!--End fact counter area-->



<!--Start video gallery area-->

<!--End video gallery area-->

<!--Start Faq Appointment area-->
<section class="faq-appointment-area sec-pd-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="faq-content-box">
                    <div class="sec-title">
                        <span>Silahkan baca terlebih dahulu</span>
                        <div class="border"></div> 
                        <h1>Pertanyaan yang sering muncul</h1>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Bagaimana cara membeli?</h4></div>
                            <div class="accord-content">
                                <p>Jawaban disini</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Bagaimana Cara ...?</h4></div>
                            <div class="accord-content collapsed">
                                <p>Jawaban disini</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Bagaimana Cara ....?</h4></div>
                            <div class="accord-content">
                                <p>Jawab disini</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Bagaimana Cara ...?</h4></div>
                            <div class="accord-content">
                                <p>Jawab disini.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="appointment-box">
                    <div class="sec-title">
                        <span>Form Pertanyaan</span>
                        <div class="border"></div> 
                        <h1>Ajukan pertanyaan Anda</h1>
                    </div>
                    <form class="appointment-form">
                        <div class="row">
                            <div class="col-md-6">   
                                <input type="text" name="form_name" value="" placeholder="Nama Anda*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Email Anda*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">   
                                <input type="text" name="form_phone" value="" placeholder="Nomor Telpon Anda">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Kategori Pertanyaan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Pertanyaan Anda*" required=""></textarea>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="thm-btn" type="submit">Kirim</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Faq Appointment area-->

<!--Start customer feedback -->

<!--End customer feedback --> 

<!--Start latest blog area-->
<section class="latest-blog-area sec-pd-one">
    <div class="container">
        <div class="sec-title">
            <span>Kegiatan</span>
            <div class="border"></div> 
            <h1>Berita terbaru</h1>
        </div>
        <div class="row">
            <!--Start single latest blog-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="frontend/images/blog/lat-blog-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-holder">
                        <!-- <span>Written By</span> -->
                        <!-- <ul class="meta-info">
                            <li><a href="#">Mark Fletcher, 17th Aug 2017</a></li>
                        </ul> -->
                        <h3><a class="blog-title" href="blog-single.html">Kegiatan terbaru </a></h3> 
                        <div class="text">
                            <p>Penjelasan Kegiatan</p>
                        </div>
                        <div class="readmore">
                            <a href="blog-single.html">Selanjutnya</a>    
                        </div>
                    </div>
                </div>
            </div>
            <!--End single latest blog-->
            <!--Start single latest blog-->
            
            <!--End single latest blog-->
            <!--Start single latest blog-->
            
            <!--End single latest blog-->
        </div>
    </div>
</section>
<!--End latest blog area--> 

<!--Start Brand area-->  
<section class="brand-area">
    <div class="container">
        <div class="sec-title text-center">
            <span>Daftar Kerja Sama</span>
            <div class="border center"></div> 
            <h1>Kami Bekerja Sama Dengan</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="brand owl-dot-style-one">
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/1.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>There anyone who loves or pursues or desires sed to obtain pain of itself, because it is pain, but because occasionally sed great.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/2.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Except to obtain some advantage from it but who has any right to find fault with a man who to enjoy a pleasure that annoying.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Who loves or pursues or desires to obtain pain itself, because is pain, but because occasionally utcircumstances occur which toil.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/1.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>There anyone who loves or pursues or desires sed to obtain pain of itself, because it is pain, but because occasionally sed great.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/2.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Except to obtain some advantage from it but who has any right to find fault with a man who to enjoy a pleasure that annoying.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Who loves or pursues or desires to obtain pain itself, because is pain, but because occasionally utcircumstances occur which toil.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/1.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>There anyone who loves or pursues or desires sed to obtain pain of itself, because it is pain, but because occasionally sed great.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/2.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Except to obtain some advantage from it but who has any right to find fault with a man who to enjoy a pleasure that annoying.</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <a href="#"><img src="frontend/images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="text-holder">
                            <p>Who loves or pursues or desires to obtain pain itself, because is pain, but because occasionally utcircumstances occur which toil.</p>
                        </div>
                    </div>
                    <!--End single item-->
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->    
    </main>