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
        <a href="index.php">
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
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pdv-tab" data-toggle="tab" href="#pdv">
                                            <span class="nav-text">Portfolio Daily Vitals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="bs-tab" data-toggle="tab" href="#bs" aria-controls="bs">
                                            <span class="nav-text">Business Snapshot</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="cpa-tab" data-toggle="tab" href="#cpa" aria-controls="cpa">
                                            <span class="nav-text">Credit Product Activity</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lsa-tab" data-toggle="tab" href="#lsa" aria-controls="lsa">
                                            <span class="nav-text">Lead Source Activity</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-5" id="myTabContent">
                                    <div class="tab-pane fade show active" id="pdv" role="tabpanel" aria-labelledby="home-tab">


                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b blueclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications of the Day</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">3</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$2000.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b blueclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications Under Review</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">1</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$500.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b blueclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications Approved</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">2</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$1200.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>


                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b blueclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications Declined</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">0</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$0.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b aquaclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications by New Clients</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">4</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$1400.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b aquaclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications by Existing Customers Under Review</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">5</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$2500.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b aquaclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications by Existing Customers Approved</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">10</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$4000.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b aquaclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loan Applications by Existing Customers Declined</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">2</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$800.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>


                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b orangeclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Loans in Collections</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">2</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$600.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b orangeclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Rescheduled Payments for Loans in Collections</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">4</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$1100.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>

                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b orangeclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Received Payments for Loans in Collections</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">2</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$1000.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>


                                            <div class="col-md-4 col-lg-4 col-xxl-3">
                                                <!--begin::Base Table Widget 9-->
                                                <div class="card card-custom gutter-b orangeclr-bg">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-light">Number of Loans in Charge-off</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <span class="label label-white label-inline font-weight-bolder mr-2">0</span>

                                                        </div>
                                                    </div>
                                                    <!--end::Header-->

                                                    <!--begin::Body-->
                                                    <div class="card-body py-2 my-3">

                                                        <h3 class="text-center text-light">$0.00</h3>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Base Table Widget 10-->
                                            </div>


                                            <!--begin::Row-->

                                            <!--end::Row-->
                                            <!--end::Dashboard-->
                                        </div>



                                        <div class="row">

                                            <div class="col-lg-6">
                                                <!--begin::Card-->
                                                <div class="card card-custom gutter-b">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h3 class="card-label">
                                                                Revenue Comparison Between 2022 - 2023
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!--begin::Chart-->
                                                        <div id="chart_3"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>

                                            <div class="col-lg-6">
                                                <!--begin::Card-->
                                                <div class="card card-custom gutter-b">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h3 class="card-label">
                                                                Revenue Breakup in 2023
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <!--begin::Chart-->
                                                        <div id="chart_4"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>



                                        </div>

                                        <!--end::Container-->
                                    </div>
                                    <div class="tab-pane fade" id="bs" role="tabpanel" aria-labelledby="bs-tab">Coming Soon</div>
                                    <div class="tab-pane fade" id="cpa" role="tabpanel" aria-labelledby="cpa-tab">Coming Soon</div>
                                    <div class="tab-pane fade" id="lsa" role="tabpanel" aria-labelledby="lsa-tab">Coming Soon</div>
                                </div>
                            </div>
                            <!--begin::Dashboard-->
                            <!--begin::Row-->

                            <!--end::Entry-->
                        </div>
                    </div>
                    <!--end::Content-->

                </div>
                <!--begin::Footer-->
                <?php include('footer.php') ?>
                <!--end::Footer-->
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->





        <!-- begin::User Panel-->
        <?php include('header_user_panel.php') ?>
        <!-- end::User Panel-->

        <?php include('script.php') ?>


</body>
<!--end::Body-->

</html>