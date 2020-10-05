        <div class="header-area-me header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid pt-1">
                    <div class="row align-items-center">
                        <div class="col-xl-1 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset("public/devlop/img/logo1.png")}}" alt="logo" height="50" width="153">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">BERANDA</a></li>
                                        <li><a href="About.html">BLOG</a></li>
                                        <li><a href="#">TUTORIAL<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">HTML</a></li>
                                                <li><a href="single-blog.html">CSS</a></li>
                                                <li><a href="single-blog.html">JAVASCRIPT</a></li>
                                                <li><a href="single-blog.html">CODEIGNITER</a></li>
                                                <li><a href="single-blog.html">LARAVEL</a></li>
                                                <li><a href="single-blog.html">GIT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="About.html">TENTANG KAMI</a></li>
                                        {{-- <li><a href="#">FASILITAS <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="Cause.html">Cause</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">LAYANAN</a></li> --}}
                                        <span class="login-nav"><a href="{{url("/login")}}">LOGIN</a></span>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="btn-login">
                                <a class="" href="{{route("login")}}">
                                    SIGN IN <i class="fas fa-sign-in-alt" style="font-size: 19px"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>