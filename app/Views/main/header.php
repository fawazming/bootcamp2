<!DOCTYPE html><html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Remo Bootcamp 2.0</title>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/unicons.css">
  <link rel="stylesheet" href="assets/css/plugins.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/purple.css">
  <link rel="preload" href="./assets/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
  <style>
    .filter:not(.basic-filter) ul li a.active,
    .filter:not(.basic-filter) ul li a:hover {
      color: #747ed1;
    }

    .navbar.navbar-light.fixed .btn:not(.btn-expand):not(.btn-gradient) {
      background: #747ed1 !important;
      border-color: #747ed1 !important;
      color: #ffffff !important;
    }

    @media (max-width: 991.98px) {
      .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
        color: #ffffff !important;
      }
    }
  </style>
</head>

<body>
  <div class="grow shrink-0">
    <header class="relative wrapper !bg-[#f2f3fb]">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
          <div class="navbar-brand w-full">
            <a href="./index.html">
              <img src="assets/images/logo-purple.png" srcset="assets/images/logo-purple%402x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
              <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link font-bold tracking-[-0.01rem] hover:!text-[#605dba]" href="#tools" >Tools to Learn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-bold tracking-[-0.01rem] hover:!text-[#605dba]" href="#faq" >FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-bold tracking-[-0.01rem] hover:!text-[#605dba]" href="#contact" >Contact Us</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer xl:hidden lg:hidden">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-full !flex !ml-auto">
            <ul class="navbar-nav !flex-row !items-center !ml-auto">
              <li class="nav-item hidden xl:block lg:block md:block">
                <a href="#cta" class="btn btn-purple text-white !bg-[#747ed1] border-[#747ed1] hover:text-white hover:bg-[#747ed1] hover:border-[#747ed1] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#747ed1] active:border-[#747ed1] disabled:text-white disabled:bg-[#747ed1] disabled:border-[#747ed1] !rounded-[50rem]">Secure Me a Spot</a>
              </li>
              <li class="nav-item xl:hidden lg:hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->