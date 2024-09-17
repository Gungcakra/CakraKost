<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

    <head>

        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/dist/images/favicon.ico') }}">

        <!-- Fonts css load -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- jsvectormap css -->
        <link href="{{ asset('template/dist/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

        <!--Swiper slider css-->
        <link href="{{ asset('template/dist/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Layout config Js -->
        <script src="{{ asset('template/dist/js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('template/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('template/dist/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('template/dist/css/app.min.css') }}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{ asset('template/dist/css/custom.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== App Menu ========== -->
            @include('partials.sidebar')
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{ asset('template/dist/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('template/dist/images/logo-dark.png') }}" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{ asset('template/dist/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ asset('template/dist/images/logo-light.png') }}" alt="" height="22">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            {{-- <form class="app-search d-none d-md-inline-flex">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>
                
                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>
                
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>
                
                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('template/dist/images/users/avatar-2.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('template/dist/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="{{ asset('template/dist/images/users/avatar-5.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-2xs mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                
                                    <div class="text-center pt-3 pb-1">
                                        <a href="#" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form> --}}
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-grid fs-2xl'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-base"> Browse by Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-subtle-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/github.png') }}" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/bitbucket.png') }}" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/dribbble.png') }}" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/dropbox.png') }}" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="{{ asset('template/dist/images/brands/slack.png') }}" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-1 topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="header-lang-img" src="{{ asset('template/dist/images/flags/us.svg') }}" alt="Header Language" height="20" class="rounded">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                        <img src="{{ asset('template/dist/images/flags/us.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">English</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                        <img src="{{ asset('template/dist/images/flags/spain.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Española</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                        <img src="{{ asset('template/dist/images/flags/germany.svg') }}" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                        <img src="{{ asset('template/dist/images/flags/italy.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Italiana</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                        <img src="{{ asset('template/dist/images/flags/russia.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">русский</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                        <img src="{{ asset('template/dist/images/flags/china.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">中国人</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                        <img src="{{ asset('template/dist/images/flags/french.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">français</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                        <img src="{{ asset('template/dist/images/flags/ae.svg') }}" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">عربي</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bag fs-2xl'></i>
                                    <span class="position-absolute topbar-badge cartitem-badge fs-3xs translate-middle badge rounded-pill bg-info">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 product-list" aria-labelledby="page-header-cart-dropdown">
                                    <div class="p-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-lg fw-semibold"> My Cart <span class="badge bg-secondary fs-sm cartitem-badge ms-1">7</span></h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 300px;">
                                        <div class="p-3">
                                            <div class="text-center empty-cart" id="empty-cart">
                                                <div class="avatar-md mx-auto my-3">
                                                    <div class="avatar-title bg-info-subtle text-info fs-2 rounded-circle">
                                                        <i class='bx bx-cart'></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                                <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                            </div>
                                
                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="{{ asset('template/dist/images/products/32/img-1.png') }}" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Blive Printed Men Round Neck</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">327.49</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">654.98</span></h5>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="{{ asset('template/dist/images/products/32/img-5.png') }}" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Sportwear</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Willage Volleyball Ball</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">49.06</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">147.18</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="{{ asset('template/dist/images/products/32/img-10.png') }}" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Cotton collar tshirts for men</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">53.33</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">159.99</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="{{ asset('template/dist/images/products/32/img-11.png') }}" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Jeans blue men boxer</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">164.37</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">164.37</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="{{ asset('template/dist/images/products/32/img-8.png') }}" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Full Sleeve Solid Men Sweatshirt</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">180.00</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">180.00</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="count-table">
                                                <table class="table table-borderless mb-0  fw-semibold">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td class="text-end cart-subtotal">$1306.52</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount <span class="text-muted">(Steex15)</span>:</td>
                                                            <td class="text-end cart-discount">- $195.98</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td class="text-end cart-shipping">$65.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Tax (12.5%) : </td>
                                                            <td class="text-end cart-tax">$163.31</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                            <h5 class="m-0 text-muted">Total:</h5>
                                            <div class="px-2">
                                                <h5 class="m-0 cart-total">$1338.86</h5>
                                            </div>
                                        </div>

                                        <a href="apps-ecommerce-checkout.html" class="btn btn-info text-center w-100">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-lg'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-3xl"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bell fs-2xl'></i>
                                    <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head rounded-top">
                                        <div class="p-3 border-bottom border-bottom-dashed">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 4</span></h6>
                                                    <p class="fs-md text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                                </div>
                                                <div class="col-auto dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">New</h6>
                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                Optimization <span class="text-secondary">reward</span> is ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                            <label class="form-check-label" for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/32/avatar-2.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                            <label class="form-check-label" for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                            <label class="form-check-label" for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">Read Before</h6>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">

                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/32/avatar-8.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                            <label class="form-check-label" for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions" id="notification-actions">
                                            <div class="d-flex text-muted justify-content-center align-items-center">
                                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="{{ asset('template/dist/images/users/32/avatar-1.jpg') }}" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                            <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Richard!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tickets-overview.html"><i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-4"></i>
                                </div>
                                <div class="mt-4 fs-base">
                                    <h4 class="mb-1">Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- removeCartModal -->
            <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cartmodal"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
         @yield('maincontent')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="addAmount" tabindex="-1" aria-labelledby="addAmountLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="addAmountLabel">Add Amount</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#!">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div>
                                        <label for="AmountInput" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="AmountInput" placeholder="$000.00">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Select Method</label>
                                    <div class="row g-3">
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="" checked>
                                                Visa
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="">
                                                Mastercard
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="">
                                                Credit Card
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="cardNumber" class="form-label">Card Number</label>
                                        <input type="number" class="form-control" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        <label for="month" class="form-label">Expiry Date</label>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="month" placeholder="MM">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="years" placeholder="YYYY">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="cvv/cvc" class="form-label">CVV/CVC</label>
                                        <input type="number" class="form-control" id="cvv/cvc" placeholder="***">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="cardHoldersName" class="form-label">Cardholders Name</label>
                                        <input type="text" class="form-control" id="cardHoldersName" placeholder="Enter name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="ph-x align-middle"></i> Close</button>
                        <button type="button" class="btn btn-primary">Add Amount</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->

        <!-- Product Modal -->
        <div class="modal fade" id="productModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-body p-0 ribbon-box">
                        <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                            <span class="trending-ribbon-text">Trending</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                        </div>
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="bg-primary-subtle p-5 h-100">
                                    <div class="p-lg-4">
                                        <img src="{{ asset('template/dist/images/products/img-3.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-7">
                                <div class="p-4 h-100">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <a href="#!"><h5 class="mb-1">Craft Women Black Sling Bag</h5></a>
                                    <p class="text-muted">Fashion & Clothing</p>

                                    <h5 class="mb-3">$199.99 <del class="text-muted fs-sm fw-normal">$299.99</del></h5>

                                    <ul class="list-unstyled hstack gap-2 mb-4">
                                        <li>
                                            Available Colors
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-primary-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-success-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-danger-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-dark-subtle"></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul class="list-unstyled vstack gap-2 mb-4">
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>In stock</li>
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Free delivery available</li>
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Sales 10% Off Use Code: <b>STEEX10</b></li>
                                    </ul>

                                    <div class="hstack gap-2 justify-content-end">
                                        <button class="btn btn-primary"><i class="bi bi-cart align-baseline me-1"></i> Add To Cart</button>
                                        <button class="btn btn-subtle-secondary">View Details <i class="bi bi-arrow-right align-baseline ms-1"></i></button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Modal -->


        <!--start back-to-top-->
        <button class="btn btn-dark btn-icon" id="back-to-top">
            <i class="bi bi-caret-up fs-3xl"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        {{-- <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="customizer-setting d-none d-md-block">
            <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class="bi bi-gear mb-1"></i> Customizer
            </div>
        </div>

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                <div class="me-2">
                    <h5 class="mb-1 text-white">Steex Builder</h5>
                    <p class="text-white text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
                </div>

                <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-4">
                        <h6 class="fs-md mb-1">Layout</h6>
                        <p class="text-muted fs-sm">Choose your layout</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column gap-1">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Theme</h6>
                        <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme01" name="data-theme" type="radio" value="default" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme01">
                                        <img src="{{ asset('template/dist/images/custom-theme/light-mode.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme02" name="data-theme" type="radio" value="material" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme02">
                                        <img src="{{ asset('template/dist/images/custom-theme/material.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme03" name="data-theme" type="radio" value="creative" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme03">
                                        <img src="{{ asset('template/dist/images/custom-theme/creative.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme04" name="data-theme" type="radio" value="minimal" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme04">
                                        <img src="{{ asset('template/dist/images/custom-theme/minimal.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme05" name="data-theme" type="radio" value="modern" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme05">
                                        <img src="{{ asset('template/dist/images/custom-theme/modern.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                            </div>
                            <!-- end col -->
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme06" name="data-theme" type="radio" value="interaction" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme06">
                                        <img src="{{ asset('template/dist/images/custom-theme/interaction.png') }}" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Interaction</h5>
                            </div><!-- end col -->
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                        <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                        <div class="colorscheme-cardradio">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                        <label class="form-check-label p-0 bg-transparent" for="layout-mode-light">
                                            <img src="{{ asset('template/dist/images/custom-theme/light-mode.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check card-radio dark">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                        <label class="form-check-label p-0 bg-transparent" for="layout-mode-dark">
                                            <img src="{{ asset('template/dist/images/custom-theme/dark-mode.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check card-radio brand">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-brand" value="brand" disabled>
                                        <h6 class="text-danger fs-18 lh-base text-center position-absolute top-50 start-50 translate-middle z-1 mb-0">Coming Soon</h6>
                                        <label class="form-check-label cursor-none p-0 bg-transparent opacity-75" for="layout-mode-brand">
                                            <img src="{{ asset('template/dist/images/custom-theme/brand-mode.png') }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Brand</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                            <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                            <span class="d-flex gap-1 h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                            <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                        <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                            <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-view">
                            <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                            <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-color">
                            <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                            <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="collapse" id="collapseBgGradient">
                                <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-img">
                            <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                            <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                            <div class="d-flex gap-2 flex-wrap img-switch">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                        <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                            <i class="ri-close-fill fs-3xl"></i>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                        <img src="{{ asset('template/dist/images/sidebar/img-sm-1.jpg') }}" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                        <img src="{{ asset('template/dist/images/sidebar/img-sm-2.jpg') }}" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                        <img src="{{ asset('template/dist/images/sidebar/img-sm-3.jpg') }}" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                        <img src="{{ asset('template/dist/images/sidebar/img-sm-4.jpg') }}" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="preloader-menu">
                            <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                            <p class="text-muted fs-sm">Choose a preloader.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <!-- <div id="preloader"> -->
                                            <span class="d-flex align-items-center justify-content-center">
                                                <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </span>
                                            </span>
                                            <!-- </div> -->
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                                </div>
                            </div>

                        </div><!-- end preloader-menu -->
                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- JAVASCRIPT -->
        <script src="{{ asset('template/dist/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/dist/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('template/dist/js/plugins.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('template/dist/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ asset('template/dist/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('template/dist/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <!--Swiper slider js-->
        <script src="{{ asset('template/dist/libs/swiper/swiper-bundle.min.js') }}"></script>

        <script src="{{ asset('template/dist/libs/list.js/list.min.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('template/dist/js/pages/dashboard-ecommerce.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('template/dist/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    </body>

</html>