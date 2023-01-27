<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>انا مهندس - لوحه التحكم</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/font.css')}}">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}">


    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                                                                 data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                                                                                                               data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                                                                                                              data-feather="message-square"></i></a></li>
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                                                                                         data-feather="moon"></i></a></li>

            <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                                                                         data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge rounded-pill bg-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto font">الاشعارات</h4>
                            <div class="badge rounded-pill badge-light-primary font">6 جديده</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-15.jpg"
                                                             alt="avatar" width="32" height="32"></div>
                                </div>

                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-3.jpg"
                                                             alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                        have 10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                        order updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="list-item d-flex align-items-center">
                            <h6 class="fw-bolder me-auto mb-0 font">تفعيل الاشعارات</h6>
                            <div class="form-check form-check-primary form-switch">
                                <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                <label class="form-check-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                        Server is down due to high CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                        month sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon"
                                                                       data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                    </p><small class="notification-text"> BLR Server using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                            notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                                                           id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Kareem Elbhrawy</span><span
                            class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                                                                            src="https://avatars.githubusercontent.com/u/106048522?v=4" alt="avatar" height="40"
                                                                                            width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                        class="dropdown-item fontSize  " href="page-profile.html"><i class="me-50 "
                                                                                     data-feather="user"></i> الصفحه الرئيسيه</a>

                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('dashbord/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('dashbord/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('dashbord/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('dashbord/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('dashbord/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Kareem Elbhrawy</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('dashbord/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('dashbord/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('dashbord/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75"
                                                            data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand">
                    href="html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo"></span>
                    <img src="{{asset('dashbord/app-assets/images/logo/logosm.svg')}}" height="40" viewbox="0 0 139 95" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <h2 class="brand-text  font " style="font-size: medium; color:#058f00 ;"> انا مهندس</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item fontSize"><a class="d-flex align-items-center " href="index.html"><i
                        data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الصفحه
                            الرئيسيه</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                <ul class="menu-content">

                    <li class="active fontSize"><a class="d-flex align-items-center "
                                                   href="dashboard-ecommerce.html"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="eCommerce">لوحه التحكم</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الكورسات والمقالات
                    </span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="app-email.html"><i
                        data-feather="compass"></i><span class="menu-title text-truncate"
                                                         data-i18n="Email">الدورات</span></a>
                <ul class="menu-content">

                    <li class=" fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">المدربين</span></a>
                    </li>
                    <li class=" fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الطلاب</span></a>
                    </li>
                    <li class=" fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">اضف دوره</span></a>
                    </li>
                    <li class=" fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الدورات</span></a>
                    </li>
                    <li class=" fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الشهادات</span></a>
                    </li>
                    <li><a class="d-flex align-items-center fontSize" href="app-ecommerce-shop.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">المقالات</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Details">اضف مقاله</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{asset('dashbord/')}}app-ecommerce-details.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Details">اضف قسم</span></a>
                    </li>

                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">المستخدمين</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                                                      data-i18n="User">المستخدمين</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">المستخدمين</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">المسؤولين</span></a>
                    </li>

                </ul>
            </li>
            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">التواصل
                        الاجتماعي</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="User">اعدادات
                            التواصل الاجتماعي</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">البوستات المنشوره</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">الحسابات المحظوره</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font"> التحكم ب
                        الموقع</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="User"> التحكم
                            ب الموقع</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">الشروط والاحكام </span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">سياسه الخصوصيه </span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    خطط الاسعار</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    حسابات التواصل الاجتماعي </span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    البرامع المستخدمه في العمل</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الدفع</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center fontSize" href="#"><i
                        data-feather="dollar-sign"></i><span class="menu-title text-truncate"
                                                             data-i18n="Pages">الدفع</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center fontSize" href="app-user-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                    data-i18n="List">مدفوعات الكورسات</span></a>
                        </li>
                        <li><a class="d-flex align-items-center fontSize" href="app-user-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                    data-i18n="List">مدفوعات المقالات</span></a>
                        </li>
                    </ul>
                </ul>
            </li>

        </ul></div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->

                    <!--/ Medal Card -->

                    <!-- Statistics Card -->

                </div>
            </section></div>
    </div>
    <!-- END: Content-->
    <div class="col-md-12">



        <div class="card">
            <div class="card-header">
                <h4 class="card-title font">بيانات الدوره</h4>
            </div>


            <div class="card-body">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label font" for="basicInput">عنوان المقاله</label>
                                <input type="text" class="form-control font  @error('tag1') is-invalid @enderror" id="basicInput"
                                       name="title" value="{{old('title')}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <label class="form-label font" for="basicInput">اختر صوره للدوره</label>
                        <div class="input-group mb-3 color">
                            <label class="input-group-text font color" for="inputGroupFile01">اختر</label>
                            <input type="file" class="form-control color  @error('img') is-invalid @enderror" id="inputGroupFile01" name="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label font" for="basicInput">شعار</label>
                            <input type="text" class="form-control font  @error('tag1') is-invalid @enderror" id="basicInput"
                                   placeholder="مثل الهندسه المدنيه" name="tag1" value="{{old('tag1')}}">
                            @error('tag1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="form-label font" for="basicInput">شعار2</label>
                            <input type="text" class="form-control font  @error('tag2') is-invalid @enderror" id="basicInput"
                                   placeholder="مثل الهندسه المدنيه" name="tag2" value="{{old('tag2')}}">
                            @error('tag2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="form-label font" for="basicInput">شعار3</label>
                            <input type="text" class="form-control font  @error('tag3') is-invalid @enderror" id="basicInput"
                                   placeholder="مثل الهندسه المدنيه" name="tag3" value="{{old('tag3')}}">
                            @error('tag3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label font" for="exampleFormControlTextarea1 ">اكتب المقاله</label>
                            <textarea class="form-control font @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"
                                      placeholder="مثل 'دوره تتيح لك التأهل ل سوق العمل'" name="description">{{old('description')}}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <label class="form-label font" for="basicSelect">اختر اسم القسم</label>
                            <select class="form-select font" id="basicSelect" name="category">
                                @foreach ($categories as $category)--}}
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>
                    <br>
                    <div class="col-xl-4 col-md-6 col-12 font ">
                        <button type="submit"  class="btn btn-gradient-success font">اضف</button>
                    </div>


                </form>

                {{--                    <div id="editor" placeholder=""   name="description"></div>--}}

            </div>



        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- END: Quill Js-->
    <script src="{{asset('dashbord/app-assets/js/script/quill.js')}}"></script>

    <script src="{{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('dashbord/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/forms/form-repeater.min.js')}}"></script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>



    <script>
        var toolbarOptions = ['code-block'];
        var quill = new Quill('#editor', {
            modules: { toolbar: true },
            theme: 'snow'
        });

    </script>

    <script type="text/javascript">
        function displaySelected(){
            var sel = document.getElementById("mySelect").selectedOptions;
            var result = "";
            for (var i=0; i < sel.length; i++){
                result += sel[i].text + " ";
            }
            document.getElementById("result").innerHTML = result;
        }
    </script>

</div>
</body>
<!-- END: Body-->

</html>
