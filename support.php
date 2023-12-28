<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<?php include('head.php') ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="./assets/media/logos/epayloan-logo.png" />
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->



            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg><!--end::Svg Icon--></span> </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <!--begin::Aside-->
            <?php include('sidebar.php') ?>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <?php include('header.php') ?>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <?php include('subheader.php') ?>
                    <!--end::Subheader-->

                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container-fluid dashboard">

                            <div class="example-preview">

                                <div class="tab-content p-0" id="myTabContent">
                                    <div class="tab-pane fade show active" id="pdv" role="tabpanel" aria-labelledby="home-tab">












                                        <div class="card-header border-0 pt-6 pb-0">
                                            <div class="card-title">
                                                <h3 class="card-label">
                                                </h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline mr-2">


                                                    <!--begin::Dropdown Menu-->
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi flex-column navi-hover py-2">
                                                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                                                Choose an option:
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i class="la la-print"></i></span>
                                                                    <span class="navi-text">Print</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i class="la la-copy"></i></span>
                                                                    <span class="navi-text">Copy</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                                    <span class="navi-text">Excel</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                                    <span class="navi-text">CSV</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                                    <span class="navi-text">PDF</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                    <!--end::Dropdown Menu-->
                                                </div>
                                                <!--end::Dropdown-->

                                                <!--begin::Button-->

                                                <!--end::Button-->
                                            </div>

                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-1">

                                                    </div>

                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-2 mt-2">
                                                                <span class="font-size-base">From</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="date" class="form-control form-control-sm" />
                                                            </div>
                                                            <div class="col-1 mt-2">
                                                                <span class="font-size-base">To</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="date" class="form-control form-control-sm" />
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="col-5">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <button class="form-control btn btn-lg btn-success">
                                                                    Assign To
                                                                </button>
                                                            </div>
                                                            <div class="col-6">

                                                                <a href="./support_new_ticket.php" class="form-control btn btn-lg btn-success">
                                                                    + New Ticket
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-10">
                                                    <div class="col-3">
                                                        <div class="row no-gutters" id="kt_datatable_length">
                                                            <div class="col-2 mt-2">
                                                                <span>Show</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <span>entries</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6"></div>
                                                    <div class="col-3">
                                                        <div class="row" id="kt_datatable_length">
                                                            <div class="col-3 mt-2">
                                                                <span>Search:</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="kt_datatable">
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mt-2">

                                                    <table class="table table-bordered table-checkable dataTable no-footer dtr-inline collapsed" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 9%;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">ID</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 7%;" aria-label="Order ID: activate to sort column ascending"></th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 12%;" aria-label="Country: activate to sort column ascending">Ticket Subject</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 15%;" aria-label="Ship City: activate to sort column ascending">Ticket Created By</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 10%;" aria-label="Ship Address: activate to sort column ascending">Customer</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 10%;" aria-label="Company Agent: activate to sort column ascending">Assignee</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 10%;" aria-label="Company Name: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 10%;" aria-label="Ship Date: activate to sort column ascending">Date Created</th>
                                                                <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 17%;" aria-label="Action: activate to sort column ascending">Action</th>
                                                            </tr>
                                                        </thead>
                                                    </table>

                                                </div>



                                            </div>
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Footer-->
                                        <!--end::Footer-->
                                    </div>

                                    <!--end::Wrapper-->
                                </div>

                                <!--end::Page-->
                            </div>

                        </div>

                    </div>
                    

                </div>
                <?php include('footer.php') ?>
            </div>
            <!--end::Main-->





            <!-- begin::User Panel-->
            <?php include('header_user_panel.php') ?>
            <!-- end::User Panel-->


            <!--begin::Quick Cart-->
            <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
                    <h4 class="font-weight-bold m-0">
                        Shopping Cart
                    </h4>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="offcanvas-content">
                    <!--begin::Wrapper-->
                    <div class="offcanvas-wrapper mb-5 scroll-pull">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between py-8">
                            <div class="d-flex flex-column mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">
                                    iBlender
                                </a>
                                <span class="text-muted">
                                    The best kitchen gadget in 2020
                                </span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                                    <span class="text-muted mr-1">for</span>
                                    <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2"><i class="ki ki-minus icon-xs"></i></a>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon"><i class="ki ki-plus icon-xs"></i></a>
                                </div>
                            </div>
                            <a href="#" class="symbol symbol-70 flex-shrink-0">
                                <img src="./assets/media/stock-600x400/img-1.jpg" title="" alt="" />
                            </a>
                        </div>
                        <!--end::Item-->

                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between py-8">
                            <div class="d-flex flex-column mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">
                                    SmartCleaner
                                </a>
                                <span class="text-muted">
                                    Smart tool for cooking
                                </span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                                    <span class="text-muted mr-1">for</span>
                                    <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2"><i class="ki ki-minus icon-xs"></i></a>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon"><i class="ki ki-plus icon-xs"></i></a>
                                </div>
                            </div>
                            <a href="#" class="symbol symbol-70 flex-shrink-0">
                                <img src="./assets/media/stock-600x400/img-2.jpg" title="" alt="" />
                            </a>
                        </div>
                        <!--end::Item-->

                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between py-8">
                            <div class="d-flex flex-column mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">
                                    CameraMax
                                </a>
                                <span class="text-muted">
                                    Professional camera
                                    for edge cutting shots
                                </span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                                    <span class="text-muted mr-1">for</span>
                                    <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2"><i class="ki ki-minus icon-xs"></i></a>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon"><i class="ki ki-plus icon-xs"></i></a>
                                </div>
                            </div>
                            <a href="#" class="symbol symbol-70 flex-shrink-0">
                                <img src="./assets/media/stock-600x400/img-3.jpg" title="" alt="" />
                            </a>
                        </div>
                        <!--end::Item-->

                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between py-8">
                            <div class="d-flex flex-column mr-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                    4D Printer
                                </a>
                                <span class="text-muted">
                                    Manufactoring unique objects
                                </span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                                    <span class="text-muted mr-1">for</span>
                                    <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2"><i class="ki ki-minus icon-xs"></i></a>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon"><i class="ki ki-plus icon-xs"></i></a>
                                </div>
                            </div>
                            <a href="#" class="symbol symbol-70 flex-shrink-0">
                                <img src="./assets/media/stock-600x400/img-4.jpg" title="" alt="" />
                            </a>
                        </div>
                        <!--end::Item-->

                        <!--begin::Separator-->
                        <div class="separator separator-solid"></div>
                        <!--end::Separator-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between py-8">
                            <div class="d-flex flex-column mr-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                    MotionWire
                                </a>
                                <span class="text-muted">
                                    Perfect animation tool
                                </span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                                    <span class="text-muted mr-1">for</span>
                                    <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2"><i class="ki ki-minus icon-xs"></i></a>
                                    <a href="#" class="btn btn-xs btn-light-success btn-icon"><i class="ki ki-plus icon-xs"></i></a>
                                </div>
                            </div>
                            <a href="#" class="symbol symbol-70 flex-shrink-0">
                                <img src="./assets/media/stock-600x400/img-8.jpg" title="" alt="" />
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Purchase-->
                    <div class="offcanvas-footer">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                            <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-7">
                            <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                            <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
                        </div>
                    </div>
                    <!--end::Purchase-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Quick Cart-->

            <!--begin::Quick Panel-->
            <div id="kt_quick_panel" class="offcanvas offcanvas-right py-10 px-10">
                <!--begin::Header-->

                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5" kt-hidden-height="40" style="">
                    <h3 class="font-weight-bold m-0">
                        Notifications

                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>



                <!--end::Header-->

                <!--begin::Content-->
                <div class="offcanvas-content">
                    <div class="tab-content">
                        <div class="pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                            <!--begin::Nav-->
                            <div class="navi navi-icon-circle navi-spacer-x-0">
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold font-size-lg">
                                                5 new user generated report
                                            </div>
                                            <div class="text-muted">
                                                Reports based on sales
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                2 new items submited
                                            </div>
                                            <div class="text-muted">
                                                by Grog John
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                79 PSD files generated
                                            </div>
                                            <div class="text-muted">
                                                Reports based on sales
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                $2900 worth producucts sold
                                            </div>
                                            <div class="text-muted">
                                                Total 234 items
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                4.5h-avarage response time
                                            </div>
                                            <div class="text-muted">
                                                Fostest is Barry
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                3 Defence alerts
                                            </div>
                                            <div class="text-muted">
                                                40% less alerts thar last week
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                Avarage 4 blog posts per author
                                            </div>
                                            <div class="text-muted">
                                                Most posted 12 time
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                16 authors joined last week
                                            </div>
                                            <div class="text-muted">
                                                9 photodrapehrs, 7 designer
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                2 new items have been submited
                                            </div>
                                            <div class="text-muted">
                                                by Grog John
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                2.8 GB-total downloads size
                                            </div>
                                            <div class="text-muted">
                                                Mostly PSD end AL concepts
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                $2900 worth producucts sold
                                            </div>
                                            <div class="text-muted">
                                                Total 234 items
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                7 new user generated report
                                            </div>
                                            <div class="text-muted">
                                                Reports based on sales
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="navi-item">
                                    <div class="navi-link rounded">
                                        <div class="symbol symbol-50 mr-3">
                                            <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold  font-size-lg">
                                                4.5h-avarage response time
                                            </div>
                                            <div class="text-muted">
                                                Fostest is Barry
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Tabpane-->

                        <!--begin::Tabpane-->

                        <!--end::Tabpane-->

                        <!--begin::Tabpane-->

                        <!--end::Tabpane-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Quick Panel-->

            <!--begin::Chat Panel-->
            <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <!--begin::Header-->
                            <div class="card-header align-items-center px-4 py-3">
                                <div class="text-left flex-grow-1">
                                    <!--begin::Dropdown Menu-->
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg><!--end::Svg Icon--></span> </button>
                                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
                                                            <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>

                                                <li class="navi-separator my-3"></li>

                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
                                                            <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                    <!--end::Dropdown Menu-->
                                </div>
                                <div class="text-center flex-grow-1">
                                    <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                                    <div>
                                        <span class="label label-dot label-success"></span>
                                        <span class="font-weight-bold text-muted font-size-sm">Active</span>
                                    </div>
                                </div>
                                <div class="text-right flex-grow-1">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                        <i class="ki ki-close icon-1x"></i>
                                    </button>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Scroll-->
                                <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                                    <!--begin::Messages-->
                                    <div class="messages">
                                        <!--begin::Message In-->
                                        <div class="d-flex flex-column mb-5 align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40 mr-3">
                                                    <img alt="Pic" src="./assets/media/users/300_12.jpg" />
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                    <span class="text-muted font-size-sm">2 Hours</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                How likely are you to recommend our company
                                                to your friends and family?
                                            </div>
                                        </div>
                                        <!--end::Message In-->

                                        <!--begin::Message Out-->
                                        <div class="d-flex flex-column mb-5 align-items-end">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-muted font-size-sm">3 minutes</span>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-40 ml-3">
                                                    <img alt="Pic" src="./assets/media/users/300_21.jpg" />
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                Hey there, we’re just writing to let you know
                                                that you’ve been subscribed to a repository on GitHub.
                                            </div>
                                        </div>
                                        <!--end::Message Out-->

                                        <!--begin::Message In-->
                                        <div class="d-flex flex-column mb-5 align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40 mr-3">
                                                    <img alt="Pic" src="./assets/media/users/300_21.jpg" />
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                    <span class="text-muted font-size-sm">40 seconds</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                Ok, Understood!
                                            </div>
                                        </div>
                                        <!--end::Message In-->

                                        <!--begin::Message Out-->
                                        <div class="d-flex flex-column mb-5 align-items-end">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-muted font-size-sm">Just now</span>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-40 ml-3">
                                                    <img alt="Pic" src="./assets/media/users/300_21.jpg" />
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                You’ll receive notifications for all issues, pull requests!
                                            </div>
                                        </div>
                                        <!--end::Message Out-->

                                        <!--begin::Message In-->
                                        <div class="d-flex flex-column mb-5 align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40 mr-3">
                                                    <img alt="Pic" src="./assets/media/users/300_12.jpg" />
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                    <span class="text-muted font-size-sm">40 seconds</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                            </div>
                                        </div>
                                        <!--end::Message In-->

                                        <!--begin::Message Out-->
                                        <div class="d-flex flex-column mb-5 align-items-end">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-muted font-size-sm">Just now</span>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-40 ml-3">
                                                    <img alt="Pic" src="./assets/media/users/300_21.jpg" />
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed
                                            </div>
                                        </div>
                                        <!--end::Message Out-->

                                        <!--begin::Message In-->
                                        <div class="d-flex flex-column mb-5 align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40 mr-3">
                                                    <img alt="Pic" src="./assets/media/users/300_12.jpg" />
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                    <span class="text-muted font-size-sm">40 seconds</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                Most purchased Business courses during this sale!
                                            </div>
                                        </div>
                                        <!--end::Message In-->

                                        <!--begin::Message Out-->
                                        <div class="d-flex flex-column mb-5 align-items-end">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-muted font-size-sm">Just now</span>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-40 ml-3">
                                                    <img alt="Pic" src="./assets/media/users/300_21.jpg" />
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                                            </div>
                                        </div>
                                        <!--end::Message Out-->
                                    </div>
                                    <!--end::Messages-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Body-->

                            <!--begin::Footer-->
                            <div class="card-footer align-items-center">
                                <!--begin::Compose-->
                                <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <div class="mr-3">
                                        <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                                        <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                    </div>
                                </div>
                                <!--begin::Compose-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Chat Panel-->

            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop">
                <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                            <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg><!--end::Svg Icon--></span>
            </div>
            <!--end::Scrolltop-->


            <!--begin::Demo Panel-->
            <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
                    <h4 class="font-weight-bold m-0">
                        Select A Demo
                    </h4>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="offcanvas-content">
                    <!--begin::Wrapper-->
                    <div class="offcanvas-wrapper mb-5 scroll-pull">
                        <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo1.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo1/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo2.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo2/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo3.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo4.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo5.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo6.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo7.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo8.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo9.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo10.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo11.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo11/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo12.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo12/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo12/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo13.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="https://keenthemes.com/metronic/preview/demo13/index.html" class="btn font-weight-bold btn-primary btn-shadow " target="_blank">Default</a>
                                <a href="https://keenthemes.com/metronic/preview/demo13/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo14.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo15.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo16.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo17.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo18.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo19.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo20.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo21.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo22.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo23.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo24.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo25.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo26.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo27.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo28.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo29.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                        <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                        <div class="overlay rounded-lg mb-8 offcanvas-demo ">
                            <div class="overlay-wrapper rounded-lg">
                                <img src="./assets//../../../../../../doc/assets/img/demos/demo30.png" alt="" class="w-100" />
                            </div>
                            <div class="overlay-layer">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>

                            </div>
                        </div>
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Purchase-->
                    <div class="offcanvas-footer">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">
                            Buy Metronic Now!
                        </a>
                    </div>
                    <!--end::Purchase-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Demo Panel-->

            <?php include('script.php') ?>


</body>
<!--end::Body-->

</html>