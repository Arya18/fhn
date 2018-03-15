<?php $this->load->view('admin/common/head');?>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<?php $this->load->view('admin/common/header');?>
		</div>

		<div class="main-container ace-save-state" id="main-container">
		<div id="sidebar" class="sidebar responsive ace-save-state">
				
				 <?php $this->load->view('admin/common/sidebar');?>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">User Profile</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Information View
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							<div id="user-profile-1" class="user-profile row">

								
										<div class="col-xs-12 col-sm-4">
										
										<div class="info-head"><h4>Personal Details</h4></div>
                                          <div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Relationship </div>
													<div class="profile-info-value">
													<?=$singleformData['relationship'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Family ID </div>
													<div class="profile-info-value">
														<?=$singleformData['family_id'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Full Name </div><div class="profile-info-value">
														<?=$singleformData['name'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Caste </div>

													<div class="profile-info-value">
														<?=$singleformData['caste'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Gender </div>

													<div class="profile-info-value">
														<?=$singleformData['gender'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Date of Birth </div>
													<div class="profile-info-value">
														<?=$singleformData['date_of_birth'];?>
													</div>
												</div>


                                                    <div class="profile-info-row">
													<div class="profile-info-name"> place of birth</div>
													<div class="profile-info-value">
													<?=$singleformData['place_of_birth'];?>
													</div>
												</div>

												 <div class="profile-info-row">
													<div class="profile-info-name"> Marital Status</div>

													<div class="profile-info-value">
														<?=$singleformData['marital_status'];?>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name">
                                                   Qualification</div>

													<div class="profile-info-value">
														<?=$singleformData['education'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">
                                                   Occupation</div>

													<div class="profile-info-value">
														<?=$singleformData['occupation'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">
                                                   Honour/Award</div>

													<div class="profile-info-value">
														<?=$singleformData['award'];?>
													</div>
												</div>


											</div>

											<div class="space-20"></div>

										

										</div>
										
										<div class="col-xs-12 col-sm-4">
											
											<div class="info-head"><h4>Address</h4></div>
                                          <div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Address</div>
													<div class="profile-info-value">
													<?=$singleformData['present_address'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">District </div>
													<div class="profile-info-value">
														<?=$singleformData['present_district'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">state </div><div class="profile-info-value">
														<?=$singleformData['present_state'];?>
													</div>
												</div>

												<div class="profile-info-row">
												<div class="profile-info-name">pincode </div>

													<div class="profile-info-value">
														<?=$singleformData['present_pincode'];?>
													</div>
												</div>

													<div class="profile-info-row">
													<div class="profile-info-name"> Address</div>
													<div class="profile-info-value">
													<?=$singleformData['permanent_address'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> District </div>
													<div class="profile-info-value">
														<?=$singleformData['permanent_district'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> state </div><div class="profile-info-value">
														<?=$singleformData['permanent_state'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> pincode </div>

													<div class="profile-info-value">
														<?=$singleformData['permanent_pincode'];?>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Country </div>

													<div class="profile-info-value">
														<?=$singleformData['country'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> other Country Address</div>

													<div class="profile-info-value">
														<?=$singleformData['other_country_address'];?>
													</div>
												</div>

												
											</div>

											<div class="space-20"></div>

										

										</div>
                                      
                                      <div class="col-xs-12 col-sm-4">
                                      	
										<div class="info-head"><h4>contact info</h4></div>
                                          <div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Email </div>
													<div class="profile-info-value">
													<?=$singleformData['email'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Mobile</div>
													<div class="profile-info-value">
														<?=$singleformData['mobile'];?>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Aadhar </div><div class="profile-info-value">
														<?=$singleformData['aadhar'];?>
													</div>
												</div>


										


											</div>

											<div class="space-20"></div>

										

										</div>


									</div>
							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/common/footer');?>
