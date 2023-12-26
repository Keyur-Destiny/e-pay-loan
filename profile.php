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
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">General Info</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Documents</button>
								</li>
								
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
								<form class="form">
											<h3 class="font-size-h3 text-dark font-weight-bold mb-6">Personal Info</h3>
											<div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">First Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="First Name" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Middle Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="Middle Name" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Last Name</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="Last Name" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Email</label>
													<div class="col-lg-8">
														<input type="email" class="form-control" placeholder="Email" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Address</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="Address" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Postal Code</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="Postal Code" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Years At This Address</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" placeholder="Year At This Address" />
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Marital Status</label>
													<div class="col-lg-8">
														<select class="form-control font-size-h6" placeholder="Marital Status">
															<option class="font-size-h6">Single</option>
															<option class="font-size-h6">Married</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Gender</label>
													<div class="col-lg-8">
														<select class="form-control font-size-h6" placeholder="Gender">
															<option class="font-size-h6">Male</option>
															<option class="font-size-h6">Female</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Birthday</label>
													<div class="col-lg-8">
														<input class="form-control font-size-h6" type="date" value="2011-08-19" id="example-date-input">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Mobile Number</label>
													<div class="col-lg-8">
														<input class="form-control font-size-h6" type="text" placeholder="Mobile Number">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">SIN</label>
													<div class="col-lg-8">
														<input class="form-control font-size-h6" type="text" placeholder="SIN">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 font-size-h5 col-form-label">Driver's License</label>
													<div class="col-lg-8">
														<input class="form-control font-size-h6" type="text" placeholder="Driver's License">
													</div>
												</div>

												<div class="form-group row">
													<div class="col-lg-3 font-size-h5 col-form-label">
														<input type="submit" class="form-control btn-primary" value="Submit" />

														</label>
														<div class="col-lg-8">

														</div>
													</div>



												</div>


											</div>

									</form>
									<form class="form">
										<h3 class="font-size-h3 text-dark font-weight-bold mb-6">Update Password</h3>
										<div>
											<div class="form-group row">
												<label class="col-lg-3 font-size-h5 col-form-label">Current Password</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" placeholder="Current Password" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 font-size-h5 col-form-label">New Password</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" placeholder="New Password" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 font-size-h5 col-form-label">Confirm New Password</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" placeholder="Confirm New Password" />
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-3 font-size-h5 col-form-label">
													<input type="submit" class="form-control btn-primary" value="Submit" />

													</label>
													<div class="col-lg-8">

													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade mt-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<h5>
									Drop Your Files Here
								</h5>
								<div class="uppy pb-10 pt-10" id="kt_uppy_3">
                                    <div class="uppy-drag">
                                        <button type="button" class="uppy-Root uppy-u-reset uppy-DragDrop-container   uppy-DragDrop--isDragDropSupported" style="width: 100%; height: 100%">
                                            <input class="uppy-DragDrop-input" type="file" hidden="" name="files[]" multiple="" accept="image/*,video/*" />
                                            <div class="uppy-DragDrop-inner">
                                                <svg aria-hidden="true" focusable="false" class="uppy-c-icon uppy-DragDrop-arrow" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M11 10V0H5v10H2l6 6 6-6h-3zm0 0" fillRule="evenodd"></path>
                                                </svg>
                                                <div class="uppy-DragDrop-label">
                                                    Drop files here or <span class="uppy-DragDrop-browse">browse</span>
                                                </div>
                                                <span class="uppy-DragDrop-note"></span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="uppy-informer">
                                        <div class="uppy uppy-Informer" aria-hidden="true">
                                            <p role="alert"></p>
                                        </div>
                                    </div>
                                    <div class="uppy-progress">
                                        <div class="uppy uppy-ProgressBar" style="position: initial">
                                            <div class="uppy-ProgressBar-inner" style="width: 0%"></div>
                                            <div class="uppy-ProgressBar-percentage">0</div>
                                        </div>
                                    </div>
                                    <div class="uppy-thumbnails"></div>
                                </div>
								<h5>
									Download your Loan Statements
								</h5>
								
								</div>
							</div>

							<!--begin::Entry-->

						</div>
					</div>
				</div>
			</div>
		</div>



</body>
<!--end::Body-->

</html>