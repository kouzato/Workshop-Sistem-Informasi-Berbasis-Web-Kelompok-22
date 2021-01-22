  <!--Header section start-->
  <header class="header header-transparent header-sticky  d-lg-block d-none">
      <div class="header-deafult-area">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                      <!--Logo Area Start-->
                      <div class="logo-area">
                          <a href="index.php"><img src="./assets/images/logo.png" alt=""></a>

                      </div>
                      <!--Logo Area End-->

                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                      <!--Header Menu Area Start-->
                      <div class="header-menu-area text-center">
                          <nav class="main-menu">

                              <ul>

                                  <li><a href="shop.php">Sewa Baju</a>
                                  </li>

                                  <li><a href="about.php">Tentang Kami</a>
                                  </li>

                                  <li><a class="header-search-toggle" href="#">Search</a></li>


                              </ul>
                          </nav>
                      </div>
                      <!--Header Menu Area End-->
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                      <!--Header Search And Mini Cart Area Start-->
                      <div class="header-search-cart-area">
                          <ul>


                              <li class="mini-cart"><a href="cart.php"><i class="flaticon-shopping-cart"></i> <span
                                          class="mini-cart-total">Keranjang</span></a>
                                  <!--Mini Cart Dropdown Start-->
                                  <div class="header-cart">

                                      <div class="cart-btn">
                                          <a href="cart.php">Lihat Keranjang</a>

                                      </div>
                                  </div>
                                  <!--Mini Cart Dropdown End-->
                              </li>



                          </ul>

                      </div>
                      <!--Header Search And Mini Cart Area End-->
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!--Header section end-->

  <!--Header Mobile section start-->
  <header class="header-mobile d-block d-lg-none">
      <div class="header-bottom menu-right">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="header-mobile-navigation d-block d-lg-none">
                          <div class="row align-items-center">
                              <div class="col-6 col-md-6">
                                  <div class="header-logo">
                                      <a href="index.php">
                                          <img src="./assets/images/logo.png" class="img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-6 col-md-6">
                                  <div class="mobile-navigation text-right">
                                      <div class="header-icon-wrapper">
                                          <ul class="icon-list justify-content-end">
                                              <li>
                                                  <div class="header-cart-icon">
                                                      <a href="cart.php"><i class="flaticon-shopping-cart"></i></a>
                                                  </div>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0)" class="mobile-menu-icon"
                                                      id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!--Mobile Menu start-->
              <div class="row">
                  <div class="col-12 d-flex d-lg-none">
                      <div class="mobile-menu"></div>
                  </div>
              </div>
              <!--Mobile Menu end-->

          </div>
      </div>
  </header>
  <!--Header Mobile section end-->

  <!-- Offcanvas Menu Start -->
  <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
      <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
          <i class="fa fa-times"></i>
      </a>

      <div class="offcanvas-wrapper">

          <div class="offcanvas-inner-content">
              <div class="offcanvas-mobile-search-area">
                  <form action="shop.php" method="GET" name="frmSearch">
                      <input type="search" name="keyword" placeholder="Search ...">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
              </div>
              <nav class="offcanvas-navigation">
                  <ul>

                      <li><a href="shop.php">Sewa Baju</a>
                      </li>

                      <li><a href="about.php">Tentang Kami</a>
                      </li>

                      <li><a href="privacy.php">Kebijakan Privasi</a>
                      </li>

                      


                  </ul>
              </nav>

              

              <div class="offcanvas-widget-area">
                  <div class="off-canvas-contact-widget">
                      <div class="header-contact-info">
                          <ul class="header-contact-info-list">
                              <li><i class="ion-android-phone-portrait"></i> <a href="tel:+62-83835742425">(+62) 838 3574 2425
                                  </a></li>
                              <li><i class="ion-android-mail"></i> <a
                                      href="mailto:sweeta.rental@gmail.com">sweeta.rental@gmail.com</a></li>
                          </ul>
                      </div>
                  </div>
                
              </div>
          </div>
      </div>

  </div>
  <!-- Offcanvas Menu End -->

  <!-- main-search start -->
  <div class="main-search-active">
      <div class="sidebar-search-icon">
          <button class="search-close"><i class="fa fa-times"></i></button>
      </div>
      <div class="sidebar-search-input">
          <form action="shop.php" method="GET" name="frmSearch">
              <div class="form-search">
                  <input id="search" name="keyword" class="input-text" placeholder="" type="text">
                  <button type="submit" value="Search">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
          </form>
          <p class="form-description">Cari Barang Anda</p>
      </div>
  </div>
  <!-- main-search start -->
