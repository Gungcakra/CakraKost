@extends('layout.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-height-100 border-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <!-- card -->
                                    <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                                    <i class="ph-wallet"></i>
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Revenue</p>
                                                <h4 class="fw-semibold mb-3">$<span class="counter-value" data-target="750.36">0</span>M </h4>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <h5 class="text-success fs-xs mb-0">
                                                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <!-- card -->
                                    <div class="card shadow-none border-bottom rounded-0 mb-0">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-dark-subtle text-dark rounded-circle fs-3">
                                                    <i class="ph-bag"></i>
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Orders</p>
                                                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="684">0</span></h4>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <h5 class="text-success fs-xs mb-0">
                                                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +8.13 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <!-- card -->
                                    <div class="card shadow-none border-end-md rounded-0 mb-0">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-body rounded-circle fs-3">
                                                    <i class="ph-eye"></i>
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Product Views</p>
                                                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="113870">0</span></h4>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <h5 class="text-danger fs-xs mb-0">
                                                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> +2.01 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-md-6">
                                    <!-- card -->
                                    <div class="card shadow-none border-top border-top-md-0 rounded-0 mb-0">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-3">
                                                    <i class="ph-users-three"></i>
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Customers</p>
                                                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="2500">0</span>k </h4>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <h5 class="text-success fs-xs mb-0">
                                                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.42 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-xl-9">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                    <div>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-subtle-primary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body ps-0">
                                    <div class="w-100">
                                        <div id="market-overview" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                            <div class="col-xl-3">
                                <div class="card-body border-start-xl border-top border-top-xl-0 border-2 h-100">
                                    <div>
                                        <p class="text-muted mb-2">Budget (USD)</p>
                                        <h4>$750.36M <small class="text-success fs-sm fw-normal"><i class="ph-arrow-up align-baseline"></i> 2.17%</small></h4>
                                        <p class="text-muted text-truncate">Budget in than last years</p>
                                        <div class="mx-3">
                                            <div id="mini-chart-6" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-2">Payouts (USD)</p>
                                        <h4>$7,45,123 <small class="text-danger fs-sm fw-normal"><i class="ph-arrow-down align-baseline"></i> -1.36%</small></h4>
                                        <p class="text-muted text-truncate">Payouts in than last years</p>
                                        <div class="mx-3">
                                            <div id="mini-chart-7" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addAmount">Add Amount</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!--end row-->

            <div class="row">
                <div class="col-xl-6">
                    <!-- card -->
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sales by Countries</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-subtle-primary btn-sm">
                                    Export Report
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <!-- card body -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 340px"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                                        <h3><span class="counter-value" data-target="53736"></span> <small class="text-muted fw-normal fs-sm">Sales</small></h3>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled vstack gap-2">
                                            <li class="p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-primary align-bottom me-1"></i> United States <span class="float-end">15,364</span>
                                            </li>
                                            <li class="bg-light-subtle p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-secondary align-bottom me-1"></i> Greenland <span class="float-end">12,387</span>
                                            </li>
                                            <li class="p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-info align-bottom me-1"></i> Serbia <span class="float-end">9,123</span>
                                            </li>
                                            <li class="bg-light-subtle p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-success align-bottom me-1"></i> Russia <span class="float-end">7,108</span>
                                            </li>
                                            <li class="p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-danger align-bottom me-1"></i> Brazil <span class="float-end">6,731</span>
                                            </li>
                                            <li class="bg-light-subtle p-2 rounded">
                                                <i class="ri-checkbox-blank-circle-fill text-warning align-bottom me-1"></i> Sydney <span class="float-end">3,023</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-lg-6">
                    <div class="card card-height-100">
                        <div class="card-header d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Traffic Source</h4>
                            <div class="dropdown card-header-dropdown float-end">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ph-dots-three-outline-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Current Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="column_chart" data-colors='["--tb-primary", "--tb-light"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-height-100">
                        <div class="card-header d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Sales</h4>
                            <a href="#!" class="text-muted">View All <i class="ph-caret-right align-middle"></i></a>
                        </div>
                        <div class="card-body px-0">
                            <div data-simplebar class="px-3" style="max-height: 360px;">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-2.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Bethany Nienow</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$630.73</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-7.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Sonia Conn</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$1,452.64</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-4.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Talon Bradtke</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$478.87</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-5.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Tyrell Kerluke</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$82.14</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-6.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Ross Zieme</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$79.00</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-1.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Hollis Spencer</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$849.05</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('template/dist/images/users/48/avatar-8.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h6 class="fs-md mb-1">Cordia Grady</h6>
                                                        <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="fs-md">$254.32</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card" id="contactList">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Latest Orders</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown sortble-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by:
                                        </span><span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                                        <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                        <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                        <button class="dropdown-item sort" data-sort="status">Status</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col" class="sort cursor-pointer" data-sort="order_date">Order Date</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="order_id">Order ID</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="shop">Shop</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="customer">Customers</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="products">Products</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="order_date">
                                                15 Feb, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250011</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-7.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Alex Smith
                                            </td>
                                            <td class="products">Clothes</td>
                                            <td class="amount">
                                                <span class="fw-medium">$109.00</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-secondary-subtle text-secondary">New</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0">-</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td class="order_date">
                                                14 Feb, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250010</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-1.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Jansh Brown
                                            </td>
                                            <td class="products">Kitchen Storage</td>
                                            <td class="amount">
                                                <span class="fw-medium">$149.00</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.5</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td class="order_date">
                                                30 Jan, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250009</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-2.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Ayaan Bowen
                                            </td>
                                            <td class="products">Bike Accessories</td>
                                            <td class="amount">
                                                <span class="fw-medium">$215.00</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-danger-subtle text-danger">Out of Delivered</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.9</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td class="order_date">
                                                25 Jan, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250008</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-3.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Prezy Mark
                                            </td>
                                            <td class="products">Furniture</td>
                                            <td class="amount">
                                                <span class="fw-medium">$199.00</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-primary-subtle text-primary">Shipping</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.3</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td class="order_date">
                                                19 Jan, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250007</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-4.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Vihan Hudda
                                            </td>
                                            <td class="products">Bags and Wallets</td>
                                            <td class="amount">
                                                <span class="fw-medium">$330.00</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-success-subtle text-success">Delivered</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.7</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td class="order_date">
                                                16 Jan, 2023
                                            </td>
                                            <td class="order_id">
                                                <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250006</a>
                                            </td>
                                            <td class="shop">
                                                <img src="{{ asset('template/dist/images/companies/img-5.png') }}" alt="" class="avatar-xxs rounded-circle">
                                            </td>
                                            <td class="customer">
                                                Vihan Hudda
                                            </td>
                                            <td class="products">Bags and Wallets</td>
                                            <td class="amount">
                                                <span class="fw-medium">$745.11</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            </td>
                                            <td class="rating">
                                                <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.6</h5>
                                            </td>
                                        </tr><!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title mb-0 flex-grow-1">Popular Products</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase">Sort by:
                                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                        <a class="dropdown-item" href="#">This Month</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div data-simplebar class="px-3" style="max-height: 333px;">
                                <div class="vstack gap-2">
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-1.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 487
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 936
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$15.99</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-2.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Unique Men's Wrist Watch</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 452
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 1420
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$84.99</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-3.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Twiala Floral Dress</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 562
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 1348
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$149.99</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-4.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Tokyo Fancy Bomber Jacket</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 644
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 1540
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$245.00</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-5.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Aster Dress 2XL / Royal Blue</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 841
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 985
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$74.63</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ asset('template/dist/images/products/32/img-6.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                </a>
                                                <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                    <li>
                                                        <i class="ph-star align-baseline"></i> 763
                                                    </li>
                                                    <li>
                                                        <i class="ph-shopping-cart align-baseline"></i> 763
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="fs-md text-primary mb-0">$245.74</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Orders Status</h5>
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ph-dots-three-outline-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Current Years</a>
                                    <a class="dropdown-item" href="#">Last Years</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 pb-1 text-center">
                                <h6 class="mb-0">01 Jan, 2022 - 01 Jan, 2023</h6>
                            </div>

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">New</p>
                                        <h6 class="mb-0">307</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Pending</p>
                                        <h6 class="mb-0">177</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 37%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Rejected</p>
                                        <h6 class="mb-0">39</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 12%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Returns</p>
                                        <h6 class="mb-0">17</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger bg-opacity-75" style="width: 3%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Dispatched</p>
                                        <h6 class="mb-0">661</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 57%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center mb-3">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Delivered</p>
                                        <h6 class="mb-0">1320</h6>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 86%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="hstack gap-2">
                                        <p class="mb-0 flex-grow-1">Cancelled</p>
                                        <h6 class="mb-0">74</h6>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-8">
                                    <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 13%"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-height-100">
                        <div class="card-header d-flex">
                            <h5 class="card-title flex-grow-1 mb-0">Recent Activity</h5>
                            <div class="flex-shrink-0">
                                <a href="#!" class="btn btn-subtle-info btn-sm">View More <i class="ph-caret-right align-middle"></i></a>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div data-simplebar class="px-3" style="max-height: 258px;">
                                <div class="acitivity-timeline acitivity-main">
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                            <div class="avatar-title bg-success-subtle text-success rounded-circle">
                                                <i class="ph-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Purchased by James Price</h6>
                                            <p class="text-muted mb-2">Product noise evolve smartwatch </p>
                                            <small class="mb-0 text-muted">05:57 AM Today</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('template/dist/images/users/32/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                            <p class="text-muted mb-2">Allow users to like products in your WooCommerce store.</p>
                                            <small class="mb-0 text-muted">25 Dec, 2022</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-secondary-subtle text-secondary">
                                                    <i class="mdi mdi-sale fs-14"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Today offers by <a href="apps-ecommerce-seller-details.html" class="link-secondary">Digitech Galaxy</a></h6>
                                            <p class="text-muted mb-2">Offer is valid on orders of $230 Or above for selected products only.</p>
                                            <small class="mb-0 text-muted">12 Dec, 2022</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-warning-subtle text-warning">
                                                    <i class="ri-bookmark-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Favoried Product</h6>
                                            <p class="text-muted mb-2">Esther James have favorited product.</p>
                                            <small class="mb-0 text-muted">25 Nov, 2022</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-secondary-subtle text-secondary">
                                                    <i class="mdi mdi-sale fs-14"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                            <p class="text-muted mb-2">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                            <small class="mb-0 text-muted">22 Oct, 2022</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-info-subtle text-info">
                                                    <i class="ri-line-chart-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                            <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                            <small class="mb-0 text-muted">15 Oct, 2022</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Insight</h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">This Month<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">This Month</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="vstack gap-2">
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">The recognition that one has a mental illness</h6>
                                </div>
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">Review market characteristics and trends</h6>
                                </div>
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">Digital analytics data including site analytics</h6>
                                </div>
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">Check uikings theme and give customer support</h6>
                                </div>
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">Success stories and case studies</h6>
                                </div>
                                <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-square text-primary"></i>
                                    <h6 class="mb-0">Preferences & purchase activity</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Steex.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection