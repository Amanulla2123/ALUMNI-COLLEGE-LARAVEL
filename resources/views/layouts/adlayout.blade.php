<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <!-- - var description  = ""-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ADMIN DASHBOARD</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Ecommerce</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Details</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>UI Elements</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Data List</span><span class="badge badge badge-primary badge-pill float-right mr-2">New</span></a>
                    <ul class="menu-content">
                        <li><a href="data-list-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">List View</span></a>
                        </li>
                        <li><a href="data-thumb-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Thumb View">Thumb View</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Content">Content</span></a>
                    <ul class="menu-content">
                        <li><a href="content-grid.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Grid">Grid</span></a>
                        </li>
                        <li><a href="content-typography.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Typography">Typography</span></a>
                        </li>
                        <li><a href="content-text-utilities.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Text Utilities">Text Utilities</span></a>
                        </li>
                        <li><a href="content-syntax-highlighter.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax Highlighter</span></a>
                        </li>
                        <li><a href="content-helper-classes.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="colors.html"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">Colors</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-eye"></i><span class="menu-title" data-i18n="Icons">Icons</span></a>
                    <ul class="menu-content">
                        <li><a href="icons-feather.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Feather">Feather</span></a>
                        </li>
                        <li><a href="icons-font-awesome.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Font Awesome">Font Awesome</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                    <ul class="menu-content">
                        <li><a href="card-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a href="card-advance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a href="card-statistics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a href="card-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="card-actions.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-briefcase"></i><span class="menu-title" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a href="component-alerts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a href="component-buttons-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a href="component-breadcrumbs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a href="component-carousel.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a href="component-collapse.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a href="component-dropdowns.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a href="component-list-group.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a href="component-modals.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a href="component-pagination.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a href="component-navs-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a href="component-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Navbar">Navbar</span></a>
                        </li>
                        <li><a href="component-tabs-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a href="component-pills-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a href="component-tooltips.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                        <li><a href="component-popovers.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a href="component-badges.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a href="component-pill-badges.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a href="component-progress.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a href="component-media-objects.html"><i class="feather icon-circle"></i><span class="menu-item">Media Objects</span></a>
                        </li>
                        <li><a href="component-spinner.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a href="component-bs-toast.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Toasts">Toasts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
                    <ul class="menu-content">
                        <li><a href="ex-component-avatar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a href="ex-component-chips.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="ex-component-divider.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Divider">Divider</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Forms &amp; Tables</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a href="form-select.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Select">Select</span></a>
                        </li>
                        <li><a href="form-switch.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a href="form-checkbox.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a href="form-radio.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a href="form-inputs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Input">Input</span></a>
                        </li>
                        <li><a href="form-input-groups.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a href="form-number-input.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a href="form-textarea.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a href="form-date-time-picker.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="form-layout.html"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li class=" nav-item"><a href="form-wizard.html"><i class="feather icon-package"></i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a href="form-validation.html"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a href="table.html"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Table">Table</span></a>
                </li>
                <li class=" nav-item"><a href="table-datatable.html"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Datatable">Datatable</span></a>
                </li>
                <li class=" nav-item"><a href="table-ag-grid.html"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="ag-grid">agGrid Table</span><span class="badge badge badge-primary badge-pill float-right mr-2">New</span></a>
                </li>
                <li class=" navigation-header"><span>pages</span>
                </li>
                <li class="active nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Profile</span></a>
                </li>
                <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
                </li>
                <li class=" nav-item"><a href="page-faq.html"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
                </li>
                <li class=" nav-item"><a href="page-knowledge-base.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
                </li>
                <li class=" nav-item"><a href="page-search.html"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
                </li>
                <li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Starter kit</span></a>
                    <ul class="menu-content">
                        <li><a href="../../../starter-kit/ltr/vertical-menu-template/sk-layout-2-columns.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="2 columns">2 columns</span></a>
                        </li>
                        <li><a href="../../../starter-kit/ltr/vertical-menu-template/sk-layout-fixed-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fixed navbar">Fixed navbar</span></a>
                        </li>
                        <li><a href="../../../starter-kit/ltr/vertical-menu-template/sk-layout-floating-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Floating navbar">Floating navbar</span></a>
                        </li>
                        <li><a href="../../../starter-kit/ltr/vertical-menu-template/sk-layout-fixed.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fixed layout">Fixed layout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a href="auth-login.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="auth-register.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="auth-forgot-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="auth-reset-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                        </li>
                        <li><a href="auth-lock-screen.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                        </li>
                        <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                        <li><a href="chart-echarts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Echarts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>
                <li class=" navigation-header"><span>Extensions</span>
                </li>
                <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i class="feather icon-alert-circle"></i><span class="menu-title" data-i18n="Sweet Alert">Sweet Alert</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-toastr.html"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Toastr">Toastr</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="feather icon-sliders"></i><span class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-file-uploader.html"><i class="feather icon-upload-cloud"></i><span class="menu-title" data-i18n="File Uploader">File Uploader</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-quill-editor.html"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Quill Editor">Quill Editor</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-tour.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Tour">Tour</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-clipboard.html"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Clipboard">Clipboard</span></a>
                </li>
                <li class=" nav-item"><a href=" ext-component-plyr.html"><i class="feather icon-film"></i><span class="menu-title" data-i18n="Media player">Media player</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-context-menu.html"><i class="feather icon-more-horizontal"></i><span class="menu-title" data-i18n="Context Menu">Context Menu</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-swiper.html"><i class="feather icon-smartphone"></i><span class="menu-title" data-i18n="swiper">swiper</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-i18n.html"><i class="feather icon-globe"></i><span class="menu-title" data-i18n="l18n">l18n</span></a>
                </li>
                <li class=" navigation-header"><span>Others</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" navigation-header"><span>Support</span>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    @yield('content')
    <!-- BEGIN: Content-->
 
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/js/core/app-menu.js"></script>
    <script src="assets/js/core/app.js"></script>
    <script src="assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/js/scripts/pages/user-profile.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>