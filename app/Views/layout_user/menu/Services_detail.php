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
                                <p>Stay Connected:</p>
                                <ul class="sociallinks-style-one">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                                        <li class=""><a href="/">Home</a></li>
                                        <li class=" "><a href="About">About Us</a>
                                            
                                        </li>
                                        <li class="current"><a href="Services">Services</a>
                                           
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
                                    <li class=""><a href="/">Home</a></li>
                                    <li ><a href="About">About Us</a>
                                       
                                    </li>
                                    <li class="current"><a href="Services">Services</a>
                                      
                                    </li>
                                    <li ><a href="Kegiatan_Home">Kegiatan_Home</a>
                                       
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
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!---End sticky header-->
</header>

<section id="single-service-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 pull-right">
                <div class="left-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="page-links">
                            <li><a class="active" href="#"><?= $services_detial['nama_services']?> </a></li>      
                        </ul>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div> 
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 pull-left">
                <div class="content-box">
                    <div class="top-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-holder">
                                    <p><?= $services_detial['deskripsi_services']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>