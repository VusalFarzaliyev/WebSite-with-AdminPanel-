<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="/site/images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header-top">
        <div class="header">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href=""><img src="/site/images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="">Əsas</a> </li>
                                        <li> <a href="#jewellery">Zərgərlİk</a> </li>
                                        <li> <a href="#contact">BİZİmlə əlaqə</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <section class="slider_section">
            <div class="banner_main">
                <div class="container">
                    <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                            <div class="text-bg">
                                <h1 style="font-size: 40px;">{{$settings->title}}</h1>
                                <span>{{$settings->subtitle}}<br>
                                <a href="#contact" class="mt-3">Bizimlə əlaqə</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="text-img">
                                <figure><img src="/site/images/img.png" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</header>
