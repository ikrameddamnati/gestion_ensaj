<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
<title>    Horizontal Layout | Minible - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="public/assets/images/favicon.ico">    <!-- Bootstrap Css -->
<link href="public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="public/assets/css/icons.min.css" id="icons-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /></head>


    <body data-layout="horizontal" data-topbar="colored">
    
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="http://minible-h-light.laravel.themesbrand.com/index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/logo-dark.png" alt="" height="20">
                    </span>
                </a>

                <a href="http://minible-h-light.laravel.themesbrand.com/index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="uil-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">
                    
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item waves-effect"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/us.jpg" alt="Header Language" height="16"> <span class="align-middle">English</span>
                                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    
                    <!-- item-->
                    <a href="http://minible-h-light.laravel.themesbrand.com/index/en" class="dropdown-item notify-item">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="http://minible-h-light.laravel.themesbrand.com/index/es" class="dropdown-item notify-item">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="http://minible-h-light.laravel.themesbrand.com/index/de" class="dropdown-item notify-item">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="http://minible-h-light.laravel.themesbrand.com/index/it" class="dropdown-item notify-item">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="http://minible-h-light.laravel.themesbrand.com/index/ru" class="dropdown-item notify-item">
                        <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-apps"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-bell"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-4.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Pornwisa yathongchai1</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                    <form id="logout-form" action="http://minible-h-light.laravel.themesbrand.com/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="pLeF3HMgxM86JuAI4O1ZFPOTxJ6GCIDiypG9s0vi">                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="http://minible-h-light.laravel.themesbrand.com/index">
                                <i class="uil-home-alt me-2"></i> Dashboard                            </a>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                                <i class="uil-flask me-2"></i>UI Elements <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-alerts" class="dropdown-item">Alerts</a>
                                            <a href="ui-buttons" class="dropdown-item">Buttons</a>
                                            <a href="ui-cards" class="dropdown-item">Cards</a>
                                            <a href="ui-carousel" class="dropdown-item">Carousel</a>
                                            <a href="ui-dropdowns" class="dropdown-item">Dropdowns</a>
                                            <a href="ui-grid" class="dropdown-item">Grid</a>
                                            <a href="ui-images" class="dropdown-item">Images</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-lightbox" class="dropdown-item">Lightbox</a>
                                            <a href="ui-modals" class="dropdown-item">Modals</a>
                                            <a href="ui-rangeslider" class="dropdown-item">Range Slider</a>
                                            <a href="ui-session-timeout" class="dropdown-item">Session Timeout</a>
                                            <a href="ui-progressbars" class="dropdown-item">Progress Bars</a>
                                            <a href="ui-sweet-alert" class="dropdown-item">Sweet-Alert</a>
                                            <a href="ui-tabs-accordions" class="dropdown-item">Tabs & Accordions</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-typography" class="dropdown-item">Typography</a>
                                            <a href="ui-video" class="dropdown-item">Video</a>
                                            <a href="ui-general" class="dropdown-item">General</a>
                                            <a href="ui-colors" class="dropdown-item">Colors</a>
                                            <a href="ui-rating" class="dropdown-item">Rating</a>
                                            <a href="ui-notifications" class="dropdown-item">Notifications</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                <i class="uil-apps me-2"></i>Apps <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="calendar" class="dropdown-item">Calendar</a>
                                <a href="chat" class="dropdown-item">Chat</a>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                        role="button">
                                        Email <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="email-inbox" class="dropdown-item">Inbox</a>
                                        <a href="email-read" class="dropdown-item">Read Email</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                        role="button">
                                        Ecommerce <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                        <a href="ecommerce-products" class="dropdown-item">Products</a>
                                        <a href="ecommerce-product-detail" class="dropdown-item">Product Detail</a>
                                        <a href="ecommerce-orders" class="dropdown-item">Orders</a>
                                        <a href="ecommerce-customers" class="dropdown-item">Customers</a>
                                        <a href="ecommerce-cart" class="dropdown-item">Cart</a>
                                        <a href="ecommerce-checkout" class="dropdown-item">Checkout</a>
                                        <a href="ecommerce-shops" class="dropdown-item">Shops</a>
                                        <a href="ecommerce-add-product" class="dropdown-item">Add Product</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                        role="button">
                                        Invoices <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                        <a href="invoices-list" class="dropdown-item">Invoice List</a>
                                        <a href="invoices-detail" class="dropdown-item">Invoice Detail</a>
                                    </div>
                                </div>
                                
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                        role="button">
                                        Contacts <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                        <a href="contacts-grid" class="dropdown-item">User Grid</a>
                                        <a href="contacts-list" class="dropdown-item">User List</a>
                                        <a href="contacts-profile" class="dropdown-item">Profile</a>
                                    </div>
                                </div>
                            </div>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                               >
                                <i class="uil-layers me-2"></i>Components <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                        role="button">
                                        Forms <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements" class="dropdown-item">Basic Elements</a>
                                        <a href="form-validation" class="dropdown-item">Validation</a></a>
                                        <a href="form-advanced" class="dropdown-item">Advanced Plugins</a>
                                        <a href="form-editors" class="dropdown-item">Editors</a>
                                        <a href="form-uploads" class="dropdown-item">File Upload</a>
                                        <a href="form-xeditable" class="dropdown-item">Xeditable</a>
                                        <a href="form-repeater" class="dropdown-item">Repeater</a>
                                        <a href="form-wizard" class="dropdown-item">Wizard</a>
                                        <a href="form-mask" class="dropdown-item">Mask</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                        role="button">
                                        Tables <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic" class="dropdown-item">Bootstrap Basic</a>
                                        <a href="tables-datatable" class="dropdown-item">Datatables</a>
                                        <a href="tables-responsive" class="dropdown-item">Responsive</a>
                                        <a href="tables-editable" class="dropdown-item">Editable</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                        role="button">
                                        Charts <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                        <a href="charts-apex" class="dropdown-item">Apex</a>
                                        <a href="charts-chartjs" class="dropdown-item">Chartjs</a>
                                        <a href="charts-flot" class="dropdown-item">Flot</a>
                                        <a href="charts-knob" class="dropdown-item">Jquery Knob</a>
                                        <a href="charts-sparkline" class="dropdown-item">Sparkline</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                        role="button">
                                        Icons <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="icons-unicons" class="dropdown-item">Unicons</a>
                                        <a href="icons-boxicons" class="dropdown-item">Boxicons</a>
                                        <a href="icons-materialdesign" class="dropdown-item">Material Design</a>
                                        <a href="icons-dripicons" class="dropdown-item">Dripicons</a>
                                        <a href="icons-fontawesome" class="dropdown-item">Font Awesome</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                        role="button">
                                        Maps <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google" class="dropdown-item">Google</a>
                                        <a href="maps-vector" class="dropdown-item">Vector</a>
                                        <a href="maps-leaflet" class="dropdown-item">Leaflet</a>
                                    </div>
                                </div>
                            </div>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                               >
                                <i class="uil-copy me-2"></i>Extra pages <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                        role="button">
                                        Authentication <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                        <a href="auth-login" class="dropdown-item">Login</a>
                                        <a href="auth-register" class="dropdown-item">Register</a>
                                        <a href="auth-recoverpw" class="dropdown-item">Recover Password</a>
                                        <a href="auth-lock-screen" class="dropdown-item">Lock Screen</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                        role="button">
                                        Utility <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                        <a href="pages-starter" class="dropdown-item">Starter Page</a>
                                        <a href="pages-maintenance" class="dropdown-item">Maintenance</a>
                                        <a href="pages-comingsoon" class="dropdown-item">Coming Soon</a>
                                        <a href="pages-timeline" class="dropdown-item">Timeline</a>
                                        <a href="pages-faqs" class="dropdown-item">FAQs</a>
                                        <a href="pages-pricing" class="dropdown-item">Pricing</a>
                                        <a href="pages-404" class="dropdown-item">Error 404</a>
                                        <a href="pages-500" class="dropdown-item">Error 500</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                               >
                                <i class="uil-window-section me-2"></i>Layouts <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                        role="button">
                                        Vertical <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                        <a href="layouts-dark-sidebar" class="dropdown-item">Dark Sidebar</a>
                                        <a href="layouts-compact-sidebar" class="dropdown-item">Compact Sidebar</a>
                                        <a href="layouts-icon-sidebar" class="dropdown-item">Icon Sidebar</a>
                                        <a href="layouts-boxed" class="dropdown-item">Boxed Width</a>
                                        <a href="layouts-preloader" class="dropdown-item">Preloader</a>
                                        <a href="layouts-colored-sidebar" class="dropdown-item">Colored Sidebar</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                        role="button">
                                        Horizontal <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                        <a href="layouts-horizontal" class="dropdown-item">Horizontal</a>
                                        <a href="layouts-hori-topbar-dark" class="dropdown-item">Dark Topbar</a>
                                        <a href="layouts-hori-boxed-width" class="dropdown-item">Boxed Width</a>
                                        <a href="layouts-hori-preloader" class="dropdown-item">Preloader</a>
                                    </div>
                                </div>
                            </div>
                        </li>
    
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                        <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Horizontal</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                    <li class="breadcrumb-item active">Horizontal</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="total-revenue-chart"></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                        <p class="text-muted mb-0">Total Revenue</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="orders-chart"> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                        <p class="text-muted mb-0">Orders</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="customers-chart"> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                        <p class="text-muted mb-0">Customers</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="growth-chart"></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                        <p class="text-muted mb-0">Growth</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Sales Analytics</h4>

                    <div class="mt-1">
                        <ul class="list-inline main-chart mb-0">
                            <li class="list-inline-item chart-border-left me-0 border-0">
                                <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">258</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                </h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">3.6</span>%<span
                                        class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p class="text-white font-size-18">Enhance your <b>Campaign</b> for better outreach <i
                                    class="mdi mdi-arrow-right"></i></p>
                            <div class="mt-4">
                                <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Upgrade
                                    Account!</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <img src="http://minible-h-light.laravel.themesbrand.com/assets/images/setup-analytics-amico.svg" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Top Selling Products</h4>


                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i>
                                Desktops </p>
                        </div>

                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 52%"
                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info me-2"></i> iPhones
                            </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-info" role="progressbar" style="width: 45%"
                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="45">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success me-2"></i>
                                Android </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 48%"
                                    aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning me-2"></i>
                                Tablets </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-warning" role="progressbar" style="width: 78%"
                                    aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                    <div class="row align-items-center g-0 mt-3">
                        <div class="col-sm-3">
                            <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-purple me-2"></i> Cables
                            </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="progress mt-1" style="height: 6px;">
                                <div class="progress-bar progress-bar bg-purple" role="progressbar" style="width: 63%"
                                    aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end Col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Locations</a>
                                <a class="dropdown-item" href="#">Revenue</a>
                                <a class="dropdown-item" href="#">Join Date</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Top Users</h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                    <tr>
                                        <td style="width: 20px;"><img
                                                src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-4.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Nevada</p>
                                        </td>
                                        <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$250.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-5.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas
                                            </p>
                                        </td>
                                        <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$110.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-6.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                California</p>
                                        </td>
                                        <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$420.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-7.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Montana</p>
                                        </td>
                                        <td><span class="badge bg-soft-warning font-size-12">Pending</span></td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$120.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-8.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Colorado</p>
                                        </td>
                                        <td><span class="badge bg-soft-info font-size-12">Active</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$112.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-2.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>
                                                Australia</p>
                                        </td>
                                        <td><span class="badge bg-soft-success font-size-12">Success</span></td>
                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger"
                                                data-feather="trending-down"></i>$120.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://minible-h-light.laravel.themesbrand.com/assets/images/users/avatar-1.jpg"
                                                class="avatar-xs rounded-circle " alt="..."></td>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India
                                            </p>
                                        </td>
                                        <td><span class="badge bg-soft-danger font-size-12">Cancel</span></td>
                                        <td class="text-muted fw-semibold text-end"><i
                                                class="icon-xs icon me-2 text-success"
                                                data-feather="trending-up"></i>$112.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Recent<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="#">Recent</a>
                                <a class="dropdown-item" href="#">By Users</a>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Recent Activity</h4>

                    <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 336px;">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <p class="text-muted mb-1 font-size-13">Today<small class="d-inline-block ms-1">12:20
                                        pm</small></p>
                                <p class="mt-0 mb-0">Andrei Coman magna sed porta finibus, risus
                                    posted a new article: <span class="text-primary">Forget UX
                                        Rowland</span></p>
                            </div>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">22 Jul, 2020 <small class="d-inline-block ms-1">12:36
                                    pm</small></p>
                            <p class="mt-0 mb-0">Andrei Coman posted a new article: <span class="text-primary">Designer
                                    Alex</span></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">18 Jul, 2020 <small class="d-inline-block ms-1">07:56
                                    am</small></p>
                            <p class="mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                Commented <span class="text-primary"> Developer Moreno</span></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">10 Jul, 2020 <small class="d-inline-block ms-1">08:42
                                    pm</small></p>
                            <p class="mt-0 mb-0">Zack Wetass, Chris combined Commented <span class="text-primary">UX
                                    Murphy</span></p>
                        </li>

                        <li class="feed-item">
                            <p class="text-muted mb-1 font-size-13">23 Jun, 2020 <small class="d-inline-block ms-1">12:22
                                    am</small></p>
                            <p class="mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace
                                Commented <span class="text-primary"> Developer Moreno</span></p>
                        </li>
                        <li class="feed-item pb-1">
                            <p class="text-muted mb-1 font-size-13">20 Jun, 2020 <small class="d-inline-block ms-1">09:48
                                    pm</small></p>
                            <p class="mt-0 mb-0">Zack Wetass, Chris combined Commented <span class="text-primary">UX
                                    Murphy</span></p>
                        </li>

                    </ol>

                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">

                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title">Social Source</h4>

                    <div class="text-center">
                        <div class="avatar-sm mx-auto mb-4">
                            <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                                <i class="mdi mdi-facebook text-primary"></i>
                            </span>
                        </div>
                        <p class="font-16 text-muted mb-2"></p>
                        <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a>
                        </h5>
                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                            venenatis faucibus tincidunt.</p>
                        <a href="#" class="text-reset font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="social-source text-center mt-3">
                                <div class="avatar-xs mx-auto mb-3">
                                    <span class="avatar-title rounded-circle bg-primary font-size-16">
                                        <i class="mdi mdi-facebook text-white"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-15">Facebook</h5>
                                <p class="text-muted mb-0">125 sales</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="social-source text-center mt-3">
                                <div class="avatar-xs mx-auto mb-3">
                                    <span class="avatar-title rounded-circle bg-info font-size-16">
                                        <i class="mdi mdi-twitter text-white"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-15">Twitter</h5>
                                <p class="text-muted mb-0">112 sales</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="social-source text-center mt-3">
                                <div class="avatar-xs mx-auto mb-3">
                                    <span class="avatar-title rounded-circle bg-pink font-size-16">
                                        <i class="mdi mdi-instagram text-white"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-15">Instagram</h5>
                                <p class="text-muted mb-0">104 sales</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 text-center">
                        <a href="#" class="text-primary font-size-14 fw-medium">View All Sources <i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Payment Method</th>
                                    <th>View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                    <td>Jamal Burnett</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $380
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                    <td>Juan Mitchell</td>
                                    <td>
                                        06 Oct, 2019
                                    </td>
                                    <td>
                                        $384
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                            <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                    <td>Barry Dick</td>
                                    <td>
                                        05 Oct, 2019
                                    </td>
                                    <td>
                                        $412
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                            <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                    <td>Ronald Taylor</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $404
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                    <td>Jacob Hunter</td>
                                    <td>
                                        04 Oct, 2019
                                    </td>
                                    <td>
                                        $392
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

                </div> <!-- content -->
            </div>
            <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Minible.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                </div>
            </div>
        </div>
    </div>
</footer>        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>



        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="public/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>
    
            <div class="mb-2">
                <img src=public/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="http://minible-h-light.laravel.themesbrand.com/assets/css/bootstrap-dark.min.css" data-appStyle="http://minible-h-light.laravel.themesbrand.com/assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>
    
            <div class="mb-2">
                <img src="public/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="http://minible-h-light.laravel.themesbrand.com/assets/css/app.rtl.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>    <!-- END Right Sidebar -->

    <!-- JAVASCRIPT -->
 <script src="public/assets/libs/jquery/jquery.min.js"></script>
 <script src="public/assets/libs/bootstrap/bootstrap.min.js"></script>
 <script src="public/assets/libs/metismenu/metismenu.min.js"></script>
 <script src="public/assets/libs/simplebar/simplebar.min.js"></script>
 <script src="public/assets/libs/node-waves/node-waves.min.js"></script>
 <script src="public/assets/libs/waypoints/waypoints.min.js"></script>
 <script src="public/assets/libs/jquery-counterup/jquery-counterup.min.js"></script>

     <!-- apexcharts -->
    <script src="public/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="public/assets/js/pages/dashboard.init.js"></script>

 <!-- App js -->
 <script src="public/assets/js/app.min.js"></script>
 
 </body>

</html>
