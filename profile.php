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
                    <div class="example-preview">
                        <ul class="nav nav-tabs nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Link</a>
                            </li>
                            <!-- <li class="nav-item dropdown"> -->
                        
                               
                             </li>
                           
                        </ul>
                        <div class="tab-content mt-5" id="myTabContent">
                            <div class="tab-pane fade active show" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                            <div class="card-body">
	 	 <!--begin::Form-->
	 	 <form class="form" id="kt_form">
	 	 	 <div class="row">
	 	 	 	 <div class="col-xl-2"></div>
	 	 	 	 <div class="col-xl-8">
	 	 	 	 	 <div class="my-5">
	 	 	 	 	 	 <h3 class="text-dark font-weight-bold mb-10">Customer Info:</h3>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">First Name</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="First Name">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Middle Name</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Middle Name">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Last Name</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Last Name ">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Contact Phone</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <div class="input-group input-group-solid">
	 	 	 	 	 	 	 	 	 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
	 	 	 	 	 	 	 	 	 <input type="text" class="form-control form-control-solid" value="+45678967456" placeholder="Phone">
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 <span class="form-text text-muted">We'll never share your email with anyone else.</span>
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Email Address</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <div class="input-group input-group-solid">
	 	 	 	 	 	 	 	 	 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
	 	 	 	 	 	 	 	 	 <input type="text" class="form-control form-control-solid" value="nick.watson@loop.com" placeholder="Email">
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Address</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Address ">
	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Postal Code</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Postal Code">
	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Year at this Address</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Year at this Address">
	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 </div>
	 	 	 	 	 <div class="separator separator-dashed my-10"></div>
	 	 	 	 	 <div class="my-5">
	 	 	 	 	 	 <h3 class=" text-dark font-weight-bold mb-10">Address Details:</h3>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Country</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <select class="form-control form-control-solid">
	 	 	 	 	 	 	 	 	 <option value="AF">Afghanistan</option>
	 	 	 	 	 	 	 	 	 <option value="AX">Åland Islands</option>
	 	 	 	 	 	 	 	 	 <option value="AL">Albania</option>
	 	 	 	 	 	 	 	 	 <option value="DZ">Algeria</option>
	 	 	 	 	 	 	 	 	 <option value="AS">American Samoa</option>
	 	 	 	 	 	 	 	 	 <option value="AD">Andorra</option>
	 	 	 	 	 	 	 	 	 <option value="AO">Angola</option>
	 	 	 	 	 	 	 	 	 <option value="AI">Anguilla</option>
	 	 	 	 	 	 	 	 	 <option value="AQ">Antarctica</option>
	 	 	 	 	 	 	 	 	 <option value="AG">Antigua and Barbuda</option>
	 	 	 	 	 	 	 	 	 <option value="AR">Argentina</option>
	 	 	 	 	 	 	 	 	 <option value="AM">Armenia</option>
	 	 	 	 	 	 	 	 	 <option value="AW">Aruba</option>
	 	 	 	 	 	 	 	 	 <option value="AU">Australia</option>
	 	 	 	 	 	 	 	 	 <option value="AT">Austria</option>
	 	 	 	 	 	 	 	 	 <option value="AZ">Azerbaijan</option>
	 	 	 	 	 	 	 	 	 <option value="BS">Bahamas</option>
	 	 	 	 	 	 	 	 	 <option value="BH">Bahrain</option>
	 	 	 	 	 	 	 	 	 <option value="BD">Bangladesh</option>
	 	 	 	 	 	 	 	 	 <option value="BB">Barbados</option>
	 	 	 	 	 	 	 	 	 <option value="BY">Belarus</option>
	 	 	 	 	 	 	 	 	 <option value="BE">Belgium</option>
	 	 	 	 	 	 	 	 	 <option value="BZ">Belize</option>
	 	 	 	 	 	 	 	 	 <option value="BJ">Benin</option>
	 	 	 	 	 	 	 	 	 <option value="BM">Bermuda</option>
	 	 	 	 	 	 	 	 	 <option value="BT">Bhutan</option>
	 	 	 	 	 	 	 	 	 <option value="BO">Bolivia, Plurinational State of</option>
	 	 	 	 	 	 	 	 	 <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	 	 	 	 	 	 	 	 	 <option value="BA">Bosnia and Herzegovina</option>
	 	 	 	 	 	 	 	 	 <option value="BW">Botswana</option>
	 	 	 	 	 	 	 	 	 <option value="BV">Bouvet Island</option>
	 	 	 	 	 	 	 	 	 <option value="BR">Brazil</option>
	 	 	 	 	 	 	 	 	 <option value="IO">British Indian Ocean Territory</option>
	 	 	 	 	 	 	 	 	 <option value="BN">Brunei Darussalam</option>
	 	 	 	 	 	 	 	 	 <option value="BG">Bulgaria</option>
	 	 	 	 	 	 	 	 	 <option value="BF">Burkina Faso</option>
	 	 	 	 	 	 	 	 	 <option value="BI">Burundi</option>
	 	 	 	 	 	 	 	 	 <option value="KH">Cambodia</option>
	 	 	 	 	 	 	 	 	 <option value="CM">Cameroon</option>
	 	 	 	 	 	 	 	 	 <option value="CA">Canada</option>
	 	 	 	 	 	 	 	 	 <option value="CV">Cape Verde</option>
	 	 	 	 	 	 	 	 	 <option value="KY">Cayman Islands</option>
	 	 	 	 	 	 	 	 	 <option value="CF">Central African Republic</option>
	 	 	 	 	 	 	 	 	 <option value="TD">Chad</option>
	 	 	 	 	 	 	 	 	 <option value="CL">Chile</option>
	 	 	 	 	 	 	 	 	 <option value="CN">China</option>
	 	 	 	 	 	 	 	 	 <option value="CX">Christmas Island</option>
	 	 	 	 	 	 	 	 	 <option value="CC">Cocos (Keeling) Islands</option>
	 	 	 	 	 	 	 	 	 <option value="CO">Colombia</option>
	 	 	 	 	 	 	 	 	 <option value="KM">Comoros</option>
	 	 	 	 	 	 	 	 	 <option value="CG">Congo</option>
	 	 	 	 	 	 	 	 	 <option value="CD">Congo, the Democratic Republic of the</option>
	 	 	 	 	 	 	 	 	 <option value="CK">Cook Islands</option>
	 	 	 	 	 	 	 	 	 <option value="CR">Costa Rica</option>
	 	 	 	 	 	 	 	 	 <option value="CI">Côte d'Ivoire</option>
	 	 	 	 	 	 	 	 	 <option value="HR">Croatia</option>
	 	 	 	 	 	 	 	 	 <option value="CU">Cuba</option>
	 	 	 	 	 	 	 	 	 <option value="CW">Curaçao</option>
	 	 	 	 	 	 	 	 	 <option value="CY">Cyprus</option>
	 	 	 	 	 	 	 	 	 <option value="CZ">Czech Republic</option>
	 	 	 	 	 	 	 	 	 <option value="DK">Denmark</option>
	 	 	 	 	 	 	 	 	 <option value="DJ">Djibouti</option>
	 	 	 	 	 	 	 	 	 <option value="DM">Dominica</option>
	 	 	 	 	 	 	 	 	 <option value="DO">Dominican Republic</option>
	 	 	 	 	 	 	 	 	 <option value="EC">Ecuador</option>
	 	 	 	 	 	 	 	 	 <option value="EG">Egypt</option>
	 	 	 	 	 	 	 	 	 <option value="SV">El Salvador</option>
	 	 	 	 	 	 	 	 	 <option value="GQ">Equatorial Guinea</option>
	 	 	 	 	 	 	 	 	 <option value="ER">Eritrea</option>
	 	 	 	 	 	 	 	 	 <option value="EE">Estonia</option>
	 	 	 	 	 	 	 	 	 <option value="ET">Ethiopia</option>
	 	 	 	 	 	 	 	 	 <option value="FK">Falkland Islands (Malvinas)</option>
	 	 	 	 	 	 	 	 	 <option value="FO">Faroe Islands</option>
	 	 	 	 	 	 	 	 	 <option value="FJ">Fiji</option>
	 	 	 	 	 	 	 	 	 <option value="FI">Finland</option>
	 	 	 	 	 	 	 	 	 <option value="FR">France</option>
	 	 	 	 	 	 	 	 	 <option value="GF">French Guiana</option>
	 	 	 	 	 	 	 	 	 <option value="PF">French Polynesia</option>
	 	 	 	 	 	 	 	 	 <option value="TF">French Southern Territories</option>
	 	 	 	 	 	 	 	 	 <option value="GA">Gabon</option>
	 	 	 	 	 	 	 	 	 <option value="GM">Gambia</option>
	 	 	 	 	 	 	 	 	 <option value="GE">Georgia</option>
	 	 	 	 	 	 	 	 	 <option value="DE">Germany</option>
	 	 	 	 	 	 	 	 	 <option value="GH">Ghana</option>
	 	 	 	 	 	 	 	 	 <option value="GI">Gibraltar</option>
	 	 	 	 	 	 	 	 	 <option value="GR">Greece</option>
	 	 	 	 	 	 	 	 	 <option value="GL">Greenland</option>
	 	 	 	 	 	 	 	 	 <option value="GD">Grenada</option>
	 	 	 	 	 	 	 	 	 <option value="GP">Guadeloupe</option>
	 	 	 	 	 	 	 	 	 <option value="GU">Guam</option>
	 	 	 	 	 	 	 	 	 <option value="GT">Guatemala</option>
	 	 	 	 	 	 	 	 	 <option value="GG">Guernsey</option>
	 	 	 	 	 	 	 	 	 <option value="GN">Guinea</option>
	 	 	 	 	 	 	 	 	 <option value="GW">Guinea-Bissau</option>
	 	 	 	 	 	 	 	 	 <option value="GY">Guyana</option>
	 	 	 	 	 	 	 	 	 <option value="HT">Haiti</option>
	 	 	 	 	 	 	 	 	 <option value="HM">Heard Island and McDonald Islands</option>
	 	 	 	 	 	 	 	 	 <option value="VA">Holy See (Vatican City State)</option>
	 	 	 	 	 	 	 	 	 <option value="HN">Honduras</option>
	 	 	 	 	 	 	 	 	 <option value="HK">Hong Kong</option>
	 	 	 	 	 	 	 	 	 <option value="HU">Hungary</option>
	 	 	 	 	 	 	 	 	 <option value="IS">Iceland</option>
	 	 	 	 	 	 	 	 	 <option value="IN">India</option>
	 	 	 	 	 	 	 	 	 <option value="ID">Indonesia</option>
	 	 	 	 	 	 	 	 	 <option value="IR">Iran, Islamic Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="IQ">Iraq</option>
	 	 	 	 	 	 	 	 	 <option value="IE">Ireland</option>
	 	 	 	 	 	 	 	 	 <option value="IM">Isle of Man</option>
	 	 	 	 	 	 	 	 	 <option value="IL">Israel</option>
	 	 	 	 	 	 	 	 	 <option value="IT">Italy</option>
	 	 	 	 	 	 	 	 	 <option value="JM">Jamaica</option>
	 	 	 	 	 	 	 	 	 <option value="JP">Japan</option>
	 	 	 	 	 	 	 	 	 <option value="JE">Jersey</option>
	 	 	 	 	 	 	 	 	 <option value="JO">Jordan</option>
	 	 	 	 	 	 	 	 	 <option value="KZ">Kazakhstan</option>
	 	 	 	 	 	 	 	 	 <option value="KE">Kenya</option>
	 	 	 	 	 	 	 	 	 <option value="KI">Kiribati</option>
	 	 	 	 	 	 	 	 	 <option value="KP">Korea, Democratic People's Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="KR">Korea, Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="KW">Kuwait</option>
	 	 	 	 	 	 	 	 	 <option value="KG">Kyrgyzstan</option>
	 	 	 	 	 	 	 	 	 <option value="LA">Lao People's Democratic Republic</option>
	 	 	 	 	 	 	 	 	 <option value="LV">Latvia</option>
	 	 	 	 	 	 	 	 	 <option value="LB">Lebanon</option>
	 	 	 	 	 	 	 	 	 <option value="LS">Lesotho</option>
	 	 	 	 	 	 	 	 	 <option value="LR">Liberia</option>
	 	 	 	 	 	 	 	 	 <option value="LY">Libya</option>
	 	 	 	 	 	 	 	 	 <option value="LI">Liechtenstein</option>
	 	 	 	 	 	 	 	 	 <option value="LT">Lithuania</option>
	 	 	 	 	 	 	 	 	 <option value="LU">Luxembourg</option>
	 	 	 	 	 	 	 	 	 <option value="MO">Macao</option>
	 	 	 	 	 	 	 	 	 <option value="MK">Macedonia, the former Yugoslav Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="MG">Madagascar</option>
	 	 	 	 	 	 	 	 	 <option value="MW">Malawi</option>
	 	 	 	 	 	 	 	 	 <option value="MY">Malaysia</option>
	 	 	 	 	 	 	 	 	 <option value="MV">Maldives</option>
	 	 	 	 	 	 	 	 	 <option value="ML">Mali</option>
	 	 	 	 	 	 	 	 	 <option value="MT">Malta</option>
	 	 	 	 	 	 	 	 	 <option value="MH">Marshall Islands</option>
	 	 	 	 	 	 	 	 	 <option value="MQ">Martinique</option>
	 	 	 	 	 	 	 	 	 <option value="MR">Mauritania</option>
	 	 	 	 	 	 	 	 	 <option value="MU">Mauritius</option>
	 	 	 	 	 	 	 	 	 <option value="YT">Mayotte</option>
	 	 	 	 	 	 	 	 	 <option value="MX">Mexico</option>
	 	 	 	 	 	 	 	 	 <option value="FM">Micronesia, Federated States of</option>
	 	 	 	 	 	 	 	 	 <option value="MD">Moldova, Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="MC">Monaco</option>
	 	 	 	 	 	 	 	 	 <option value="MN">Mongolia</option>
	 	 	 	 	 	 	 	 	 <option value="ME">Montenegro</option>
	 	 	 	 	 	 	 	 	 <option value="MS">Montserrat</option>
	 	 	 	 	 	 	 	 	 <option value="MA">Morocco</option>
	 	 	 	 	 	 	 	 	 <option value="MZ">Mozambique</option>
	 	 	 	 	 	 	 	 	 <option value="MM">Myanmar</option>
	 	 	 	 	 	 	 	 	 <option value="NA">Namibia</option>
	 	 	 	 	 	 	 	 	 <option value="NR">Nauru</option>
	 	 	 	 	 	 	 	 	 <option value="NP">Nepal</option>
	 	 	 	 	 	 	 	 	 <option value="NL">Netherlands</option>
	 	 	 	 	 	 	 	 	 <option value="NC">New Caledonia</option>
	 	 	 	 	 	 	 	 	 <option value="NZ">New Zealand</option>
	 	 	 	 	 	 	 	 	 <option value="NI">Nicaragua</option>
	 	 	 	 	 	 	 	 	 <option value="NE">Niger</option>
	 	 	 	 	 	 	 	 	 <option value="NG">Nigeria</option>
	 	 	 	 	 	 	 	 	 <option value="NU">Niue</option>
	 	 	 	 	 	 	 	 	 <option value="NF">Norfolk Island</option>
	 	 	 	 	 	 	 	 	 <option value="MP">Northern Mariana Islands</option>
	 	 	 	 	 	 	 	 	 <option value="NO">Norway</option>
	 	 	 	 	 	 	 	 	 <option value="OM">Oman</option>
	 	 	 	 	 	 	 	 	 <option value="PK">Pakistan</option>
	 	 	 	 	 	 	 	 	 <option value="PW">Palau</option>
	 	 	 	 	 	 	 	 	 <option value="PS">Palestinian Territory, Occupied</option>
	 	 	 	 	 	 	 	 	 <option value="PA">Panama</option>
	 	 	 	 	 	 	 	 	 <option value="PG">Papua New Guinea</option>
	 	 	 	 	 	 	 	 	 <option value="PY">Paraguay</option>
	 	 	 	 	 	 	 	 	 <option value="PE">Peru</option>
	 	 	 	 	 	 	 	 	 <option value="PH">Philippines</option>
	 	 	 	 	 	 	 	 	 <option value="PN">Pitcairn</option>
	 	 	 	 	 	 	 	 	 <option value="PL">Poland</option>
	 	 	 	 	 	 	 	 	 <option value="PT">Portugal</option>
	 	 	 	 	 	 	 	 	 <option value="PR">Puerto Rico</option>
	 	 	 	 	 	 	 	 	 <option value="QA">Qatar</option>
	 	 	 	 	 	 	 	 	 <option value="RE">Réunion</option>
	 	 	 	 	 	 	 	 	 <option value="RO">Romania</option>
	 	 	 	 	 	 	 	 	 <option value="RU">Russian Federation</option>
	 	 	 	 	 	 	 	 	 <option value="RW">Rwanda</option>
	 	 	 	 	 	 	 	 	 <option value="BL">Saint Barthélemy</option>
	 	 	 	 	 	 	 	 	 <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	 	 	 	 	 	 	 	 	 <option value="KN">Saint Kitts and Nevis</option>
	 	 	 	 	 	 	 	 	 <option value="LC">Saint Lucia</option>
	 	 	 	 	 	 	 	 	 <option value="MF">Saint Martin (French part)</option>
	 	 	 	 	 	 	 	 	 <option value="PM">Saint Pierre and Miquelon</option>
	 	 	 	 	 	 	 	 	 <option value="VC">Saint Vincent and the Grenadines</option>
	 	 	 	 	 	 	 	 	 <option value="WS">Samoa</option>
	 	 	 	 	 	 	 	 	 <option value="SM">San Marino</option>
	 	 	 	 	 	 	 	 	 <option value="ST">Sao Tome and Principe</option>
	 	 	 	 	 	 	 	 	 <option value="SA">Saudi Arabia</option>
	 	 	 	 	 	 	 	 	 <option value="SN">Senegal</option>
	 	 	 	 	 	 	 	 	 <option value="RS">Serbia</option>
	 	 	 	 	 	 	 	 	 <option value="SC">Seychelles</option>
	 	 	 	 	 	 	 	 	 <option value="SL">Sierra Leone</option>
	 	 	 	 	 	 	 	 	 <option value="SG">Singapore</option>
	 	 	 	 	 	 	 	 	 <option value="SX">Sint Maarten (Dutch part)</option>
	 	 	 	 	 	 	 	 	 <option value="SK">Slovakia</option>
	 	 	 	 	 	 	 	 	 <option value="SI">Slovenia</option>
	 	 	 	 	 	 	 	 	 <option value="SB">Solomon Islands</option>
	 	 	 	 	 	 	 	 	 <option value="SO">Somalia</option>
	 	 	 	 	 	 	 	 	 <option value="ZA">South Africa</option>
	 	 	 	 	 	 	 	 	 <option value="GS">South Georgia and the South Sandwich Islands</option>
	 	 	 	 	 	 	 	 	 <option value="SS">South Sudan</option>
	 	 	 	 	 	 	 	 	 <option value="ES">Spain</option>
	 	 	 	 	 	 	 	 	 <option value="LK">Sri Lanka</option>
	 	 	 	 	 	 	 	 	 <option value="SD">Sudan</option>
	 	 	 	 	 	 	 	 	 <option value="SR">Suriname</option>
	 	 	 	 	 	 	 	 	 <option value="SJ">Svalbard and Jan Mayen</option>
	 	 	 	 	 	 	 	 	 <option value="SZ">Swaziland</option>
	 	 	 	 	 	 	 	 	 <option value="SE">Sweden</option>
	 	 	 	 	 	 	 	 	 <option value="CH">Switzerland</option>
	 	 	 	 	 	 	 	 	 <option value="SY">Syrian Arab Republic</option>
	 	 	 	 	 	 	 	 	 <option value="TW">Taiwan, Province of China</option>
	 	 	 	 	 	 	 	 	 <option value="TJ">Tajikistan</option>
	 	 	 	 	 	 	 	 	 <option value="TZ">Tanzania, United Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="TH">Thailand</option>
	 	 	 	 	 	 	 	 	 <option value="TL">Timor-Leste</option>
	 	 	 	 	 	 	 	 	 <option value="TG">Togo</option>
	 	 	 	 	 	 	 	 	 <option value="TK">Tokelau</option>
	 	 	 	 	 	 	 	 	 <option value="TO">Tonga</option>
	 	 	 	 	 	 	 	 	 <option value="TT">Trinidad and Tobago</option>
	 	 	 	 	 	 	 	 	 <option value="TN">Tunisia</option>
	 	 	 	 	 	 	 	 	 <option value="TR">Turkey</option>
	 	 	 	 	 	 	 	 	 <option value="TM">Turkmenistan</option>
	 	 	 	 	 	 	 	 	 <option value="TC">Turks and Caicos Islands</option>
	 	 	 	 	 	 	 	 	 <option value="TV">Tuvalu</option>
	 	 	 	 	 	 	 	 	 <option value="UG">Uganda</option>
	 	 	 	 	 	 	 	 	 <option value="UA">Ukraine</option>
	 	 	 	 	 	 	 	 	 <option value="AE">United Arab Emirates</option>
	 	 	 	 	 	 	 	 	 <option value="GB">United Kingdom</option>
	 	 	 	 	 	 	 	 	 <option value="US" selected="">United States</option>
	 	 	 	 	 	 	 	 	 <option value="UM">United States Minor Outlying Islands</option>
	 	 	 	 	 	 	 	 	 <option value="UY">Uruguay</option>
	 	 	 	 	 	 	 	 	 <option value="UZ">Uzbekistan</option>
	 	 	 	 	 	 	 	 	 <option value="VU">Vanuatu</option>
	 	 	 	 	 	 	 	 	 <option value="VE">Venezuela, Bolivarian Republic of</option>
	 	 	 	 	 	 	 	 	 <option value="VN">Viet Nam</option>
	 	 	 	 	 	 	 	 	 <option value="VG">Virgin Islands, British</option>
	 	 	 	 	 	 	 	 	 <option value="VI">Virgin Islands, U.S.</option>
	 	 	 	 	 	 	 	 	 <option value="WF">Wallis and Futuna</option>
	 	 	 	 	 	 	 	 	 <option value="EH">Western Sahara</option>
	 	 	 	 	 	 	 	 	 <option value="YE">Yemen</option>
	 	 	 	 	 	 	 	 	 <option value="ZM">Zambia</option>
	 	 	 	 	 	 	 	 	 <option value="ZW">Zimbabwe</option>
	 	 	 	 	 	 	 	 </select>
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Address Line 1</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="District 6 1352 W. Olive Ave">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Address Line 2</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Fresno 559-488-4020">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">City</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Polo Alto">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">State / Province / Region</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Los Angeles">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Zip / Postal Code</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="780456">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3"></label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 </div> 
	 	 	 	 	 <div class="separator separator-dashed my-10"></div>
	 	 	 	 	 <div class="my-52">
	 	 	 	 	 	 <h3 class=" text-dark font-weight-bold mb-10">Update Password</h3>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Login verification</label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
	 	 	 	 	 	 	 	 <div class="form-text text-muted mt-3">
	 	 	 	 	 	 	 	 	 After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
	 	 	 	 	 	 	 	 	 <a href="#">Learn more</a>.
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
	 	 	 	 	 	 <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Current Password </label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Nick">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">New Password </label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Nick">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         <div class="form-group row">
	 	 	 	 	 	 	 <label class="col-3">Confirm New Password </label>
	 	 	 	 	 	 	 <div class="col-9">
	 	 	 	 	 	 	 	 <input class="form-control form-control-solid" type="text" value="Nick">
	 	 	 	 	 	 </div>
	 	 	 	 	 	 </div>
                         

</body>
<!--end::Body-->

</html>