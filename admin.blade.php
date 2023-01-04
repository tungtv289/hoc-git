<html lang="en"><head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Ewallet - Admin &amp; Dashboard" name="description">
    <meta content="VNPT EPAY" name="author">
    <link rel="shortcut icon" href="/assets/img/logo-epay.png">
    {{ HTML::style('crm/bootstrap.min.css') }}
    {{ HTML::style('crm/icons.min.css') }}
    {{ HTML::style('crm/app.min.css') }}
    {{ HTML::style('assets/css/cms.css') }}
    <style>
    .loading-overlay {
        display: none;
        background: rgba(255, 255, 255, 0.7);
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        z-index: 9998;
        align-items: center;
        justify-content: center;
    }
    .loading-overlay.is-active {
        display: flex;
    }
    .code {
        font-family: monospace;
        /*   font-size: .9em; */
        color: #dd4a68;
        background-color: rgb(238, 238, 238);
        padding: 0 3px;
    }
    </style>
    @yield('style')
    {{ HTML::style('crm/css/toasty-custom-styles.css') }}
    {{ HTML::script('crm/js/vue.js') }}
    {{ HTML::script('assets/ckeditor/ckeditor.js') }}
    <body data-layout="vertical" data-sidebar="dark" id="app">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/assets/img/logo-epay.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/assets/img/logo-epay.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
                                </span>
                            </a>

                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- Search -->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search"></span>
                            </div>
                        </form>

                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon-sm"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <form class="p-2">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-sm"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="noti-dot bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-15"> Notifications </h5>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar="init" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                        <h6 class="dropdown-header bg-light">New</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Justin Verduzco</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">New order has been placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h6 class="dropdown-header bg-light">Earlier</h6>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                            <i class="bx bx-cart"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item light-dark" id="mode-setting-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon-sm layout-mode-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-sm layout-mode-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
            </button>
        </div>
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="/assets/img/avatar-1.jpg" alt="Header Avatar">
            </button>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <a class="dropdown-item" href="#"><i class="bx bx-user-circle text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">My Account</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-chat text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Chat</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-buoy text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Support</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="#"><i class="bx bx-cog text-muted font-size-18 align-middle me-1"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                <a class="dropdown-item" href="/admin/logout"><i class="bx bx-log-out text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
            </div>
        </div>
    </div>
</div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="display: block;">
<!-- LOGO -->
<div class="navbar-brand-box">
    <a href="/admin" class="logo logo-dark">
        <span class="logo-sm">
            <img src="/assets/img/logo-epay.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
        </span>
    </a>
    <a href="/admin" class="logo logo-light">
        <span class="logo-lg">
            <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
        </span>
        <span class="logo-sm">
            <img src="/assets/img/logo-epay.png" alt="" height="22">
        </span>
    </a>
</div>
<button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
<i class="fa fa-fw fa-bars"></i>
</button>
<div data-simplebar="init" class="sidebar-menu-scroll"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu">Menu</li>
        <li>
            <a href="/admin/ekyc">
                <i class="bx bx-tachometer icon nav-icon"></i>
                <span class="menu-item" data-key="t-dashboards">Trang chủ</span>
                <span class="badge rounded-pill bg-success">5+</span>
            </a>
        </li>
        <li class="menu-title" data-key="t-applications">Chức năng</li>
        <li>
        <li>
            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                <i class="bx bxs-user-detail icon nav-icon"></i>
                <span class="menu-item" data-key="t-email">Duyệt thủ công</span>
            </a>
            <ul class="sub-menu mm-collapse" aria-expanded="false">
                <li><a href="/admin/ekyc" data-key="t-inbox">Danh sách</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.supportrequest') }}" aria-expanded="false">
                <i class="bx bx-dock-top icon nav-icon"></i>
                <span class="menu-item" data-key="t-email">Xử lý YCHT</span>
            </a>
        </li>
        <li>
            <a href="/admin/businesswallet" >
                <i class="bx bxs-user-detail icon nav-icon"></i>
                <span class="menu-item" data-key="t-email">Quản lý tài khoản doanh nghiệp</span>
            </a>
        </li>
</ul>
</div>
<!-- Sidebar -->
</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1037px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 38px; transform: translate3d(0px, 26px, 0px); display: block;"></div></div></div>
</div>
<!-- Left Sidebar End -->
<header id="page-topbar" class="ishorizontal-topbar" style="display: none;">
<div class="navbar-header">
<div class="d-flex">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/admin" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/img/logo-epay.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
            </span>
        </a>
        <a href="/admin" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/img/logo-epay.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/logo-epay.png" alt="" height="22"> <span class="logo-txt">Ewallet</span>
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
    <i class="fa fa-fw fa-bars"></i>
    </button>
    <div class="topnav active">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu active">

            <div class="collapse navbar-collapse active" id="topnav-menu-content">
                <ul class="navbar-nav active">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-tachometer"></i>
                            <span data-key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i class="bx bx-grid-alt"></i>
                            <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>
                            <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button">
                                    <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                    <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button">
                                    Ecommerce <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                    <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                    <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                    <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                    <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                    <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                    <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                    <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice" role="button"><span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact" role="button">
                                <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                <a href="contacts-profile.html" class="dropdown-item" data-key="t-user-settings">Profile</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
<div class="d-flex">
<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search icon-sm"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
    <form class="p-3">
        <div class="search-box">
            <div class="position-relative">
                <input type="text" class="form-control rounded" placeholder="Search here...">
                <i class="mdi mdi-magnify search-icon"></i>
            </div>
        </div>
    </form>
</div>
</div>
<div class="dropdown d-inline-block language-switch">
<button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
</button>
<div class="dropdown-menu dropdown-menu-end">
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
    </a>
</div>
</div>
<div class="dropdown d-inline-block">
<button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-sm"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
<span class="noti-dot bg-danger rounded-pill">3</span>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
<div class="p-3">
    <div class="row align-items-center">
        <div class="col">
            <h5 class="m-0 font-size-15"> Notifications </h5>
        </div>
        <div class="col-auto">
            <a href="javascript:void(0);" class="small"> Mark all as read</a>
        </div>
    </div>
</div>
<div data-simplebar="init" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
<a href="" class="text-reset notification-item">
    <div class="d-flex border-bottom align-items-start bg-light">
        <div class="flex-shrink-0">
            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
        </div>
        <div class="flex-grow-1">
            <h6 class="mb-1">Justin Verduzco</h6>
            <div class="text-muted">
                <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
            </div>
        </div>
    </div>
</a>
<a href="" class="text-reset notification-item">
    <div class="d-flex border-bottom align-items-start">
        <div class="flex-shrink-0">
            <div class="avatar-sm me-3">
                <span class="avatar-title bg-primary rounded-circle font-size-16">
                    <i class="bx bx-shopping-bag"></i>
                </span>
            </div>
        </div>
        <div class="flex-grow-1">
            <h6 class="mb-1">New order has been placed</h6>
            <div class="text-muted">
                <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
            </div>
        </div>
    </div>
</a>
<a href="" class="text-reset notification-item">
    <div class="d-flex border-bottom align-items-start">
        <div class="flex-shrink-0">
            <div class="avatar-sm me-3">
                <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                    <i class="bx bx-cart"></i>
                </span>
            </div>
        </div>
        <div class="flex-grow-1">
            <h6 class="mb-1">Your item is shipped</h6>
            <div class="text-muted">
                <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
            </div>
        </div>
    </div>
</a>
<a href="" class="text-reset notification-item">
    <div class="d-flex border-bottom align-items-start">
        <div class="flex-shrink-0">
            <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
        </div>
        <div class="flex-grow-1">
            <h6 class="mb-1">Salena Layfield</h6>
            <div class="text-muted">
                <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
            </div>
        </div>
    </div>
</a>
</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
<div class="p-2 border-top d-grid">
    <a class="btn btn-sm btn-link font-size-14 btn-block text-decoration-underline fw-bold text-center" href="javascript:void(0)">
        <span>View All <i class="bx bx-right-arrow-alt"></i></span>
    </a>
</div>
</div>
</div>
<div class="dropdown d-none d-sm-inline-block">
<button type="button" class="btn header-item light-dark" id="mode-setting-btn">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon-sm layout-mode-dark "><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-sm layout-mode-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
</button>
</div>
<div class="dropdown d-inline-block">
<button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
</button>
<div class="dropdown-menu dropdown-menu-end pt-0">
<a class="dropdown-item" href="contacts-profile.html"><i class="bx bx-user-circle text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">My Account</span></a>
<a class="dropdown-item" href="apps-chat.html"><i class="bx bx-chat text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Chat</span></a>
<a class="dropdown-item" href="pages-faqs.html"><i class="bx bx-buoy text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Support</span></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="#"><i class="bx bx-cog text-muted font-size-18 align-middle me-1"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
<a class="dropdown-item" href="auth-lock-screen.html"><i class="bx bx-lock text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
<a class="dropdown-item" href="auth-logout.html"><i class="bx bx-log-out text-muted font-size-18 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
</div>
</div>
</div>
</div>
</header>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
<div class="page-content">
<div class="container-fluid">
<!-- start page title -->
<div class="loading-overlay">
    <span class="fas fa-spinner fa-3x fa-spin"></span>
</div>
@yield('content')
<!-- End Page-content -->
<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
2022 © Ewallet.
</div>
<div class="col-sm-6">
</div>
</div>
</div>
</footer>
</div>
<!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-sm mb-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> <span class="align-middle">Settings</span>
</a>
<div class="right-bar">
<div data-simplebar="init" class="h-100"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -17px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
<div class="rightbar-title d-flex align-items-center bg-primary p-3">
<h5 class="m-0 me-2 text-white">Settings</h5>
<a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
<i class="mdi mdi-close noti-icon"></i>
</a>
</div>
<!-- Settings -->
<hr class="m-0">
<div class="p-4">
<h6 class="mb-3">Choose Layout</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
<label class="form-check-label" for="layout-vertical">Vertical</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
<label class="form-check-label" for="layout-horizontal">Horizontal</label>
</div>
<h6 class="mt-4 mb-3 pt-2">Theme Mode</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
<label class="form-check-label" for="layout-mode-light">Light</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
<label class="form-check-label" for="layout-mode-dark">Dark</label>
</div>
<h6 class="mt-4 mb-3">Layout Width</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-width" id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
<label class="form-check-label" for="layout-width-fluid">Fluid</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
<label class="form-check-label" for="layout-width-boxed">Boxed</label>
</div>
<h6 class="mt-4 mb-3">Layout Position</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
<label class="form-check-label" for="layout-position-fixed">Fixed</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
<label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
</div>
<h6 class="mt-4 mb-3">Topbar Color</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
<label class="form-check-label" for="topbar-color-light">Light</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
<label class="form-check-label" for="topbar-color-dark">Dark</label>
</div>
<div id="sidebar-setting">
<h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
<label class="form-check-label" for="sidebar-size-default">Default</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
<label class="form-check-label" for="sidebar-size-compact">Compact</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
<label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
</div>
<h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
<label class="form-check-label" for="sidebar-color-light">Light</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
<label class="form-check-label" for="sidebar-color-dark">Dark</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
<label class="form-check-label" for="sidebar-color-brand">Brand</label>
</div>
</div>
<h6 class="mt-4 mb-3">Direction</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
<label class="form-check-label" for="layout-direction-ltr">LTR</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
<label class="form-check-label" for="layout-direction-rtl">RTL</label>
</div>
</div>
</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 812px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 90px;"></div></div></div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
{{ HTML::script('crm/metismenujs.min.js') }}
{{ HTML::script('crm/simplebar.min.js') }}
{{ HTML::script('crm/feather.min.js') }}
{{ HTML::script('assets/js/libs/jquery-2.0.2.min.js') }}
{{ HTML::script('assets/js/plugin/jquery-validate/jquery.validate.min.js') }}
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-toastr/toastr.min.css')}}"/>
<script src="{{asset('assets/bootstrap-toastr/toastr.min.js')}}"></script>
{{ HTML::script('crm/bootstrap.bundle.min.js') }}
{{ HTML::script('crm/js/custom.js') }}
{{ HTML::script('crm/js/toasty.js') }}
{{ HTML::script('crm/js/table-file.js') }}
{{ HTML::script('crm/js/components/info-bank-account.js') }}
{{ HTML::script('crm/js/moment.min.js') }}
{{ HTML::script('crm/js/vue-custom.js?v=6.1') }}
{{ HTML::script('crm/js/xlsx.js') }}
<!-- apexcharts -->
{{ HTML::script('crm/app.js') }}
@yield('scripts')
<script>
<<<<<<< HEAD
     $(document).ready(function() {
        @if (Session::has('message'))
            toast.success('{{ Session::get('message') }}', 3000);
        @endif

        @if (Session::has('error'))
            toast.error('{{ Session::get('error') }}', 3000);
=======
    $(function () {
        @if(Session::has('success'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.success("{{ session('success') }}", '', {timeOut: 20000});
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.error("{{ session('error') }}", '', {timeOut: 20000});
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.info("{{ session('info') }}", '', {timeOut: 20000});
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.warning("{{ session('warning') }}", '', {timeOut: 20000});
>>>>>>> cef82bdbaa376aefab27d83ba0a56632424937fe
        @endif
      });
     $(document).ready(function() {
        // @if (Session::has('message'))
        //     $('#toast-common strong').toggleClass("me-auto text-success")
        //     $('#toast-common .toast-body').text('{{ Session::get('message') }}')
        //     $('#toast-common').toast('show')
        // @endif

        // @if (Session::has('error'))
        //     var toast = new Toasty(options);
        //     $('#toast-common strong').toggleClass("me-auto text-danger")
        //     $('#toast-common .toast-body').text('{{ Session::get('error') }}')
        //     $('#toast-common').toast('show')
        // @endif
        $('.upload-image').click(function(){
            $('.input-upload-file').click();
        });
        $('.input-upload-file').change(function(){
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                $('.preview-image').attr('src', reader.result);
            };
            reader.readAsDataURL(event.target.files[0]);
        });
     })
    $('.btn-del').click(function () {
        var link = $.trim($(this).data('link'));
        console.log(link)
        $('#del-form').attr('action', link);
        $('#del-modal').modal('show');
    });
    $('#del-modal').on('hidden.bs.modal', function () {
        $(this).find('#del-form').trigger('reset');
    });
</script>
<svg id="SvgjsSvg1401" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1402"></defs><polyline id="SvgjsPolyline1403" points="0,0"></polyline><path id="SvgjsPath1404" d="M0 0 "></path></svg></body></html>
