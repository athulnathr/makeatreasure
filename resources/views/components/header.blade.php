 <!-- Pre-loader -->
 <div id="preloader">
        <div id="status">
            <div class="spinner">Get ready to be rich....</div>
        </div>
    </div>
    <!-- End Preloader-->

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <img src="{{URL::to('assets/images/svg/MaT.png')}}" alt="img-responsive" class="logo" href="index.html#home"
                onclick="javascript:location.href='{{URL::to('/')}}'">
            <a class="logo" href="{{URL::to('/')}}">
                MAKE A TREASURE
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <!-- Start Navbar -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item font-weight-600 active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Features</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a href="#token" class="nav-link">Token Sale</a>
                        </li>-->
                    <li class="nav-item">
                        <a href="#roadmap" class="nav-link">Earnings Scheme</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a href="#team" class="nav-link">Team</a>
                        </li>  -->
                    <li class="nav-item">
                        <a href="#howitworks" class="nav-link">How it works?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">FAQ</a>
                    </li>
                </ul>
                <a href="{{URL::to('join')}}" class="btn btn-sm navbar-btn btn-round" id="join">Join Now</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->