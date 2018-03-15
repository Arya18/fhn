<?php $this->load->view('admin/common/head');?>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
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
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Edit Information
								
							</h1>
						</div><!-- /.page-header -->



						<div class="row">

						<h3 class="form-heading center">Personal Details</h3>
							<?php if(isset($singleformData) && !empty($singleformData)):?>
									<?php $attributes = array('method' =>'post','class' =>'form-horizontal','enctype'=>'multipart/form-data');?>
									<?=form_open(base_url().'admin/formdata/formdata_update',$attributes);?>
                        
                                 <input type="hidden" id="id" name="id" class="col-xs-10 col-sm-5" value="<?=$singleformData['id']?>" />

							<div class="col-sm-6">								
                           <div class="row">
                           	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Relationship </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['relationship'];?>" class="col-xs-11" name="relationship"/>
										</div>
									</div>
                           </div>
							</div>


							<div class="col-sm-6">
							   <div class="row">
                           	      <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Family ID </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['family_id'];?>" class="col-xs-11" name="family_id"/>
										</div>
									</div>
								</div>
                       </div>


							<div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['name'];?>" class="col-xs-11" name="name"/>

										</div>
									</div>
								</div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Caste </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['caste'];?>" class="col-xs-11" name="caste"/>

										</div>
									</div>
								</div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Gender </label>

										<div class="col-sm-9">
											<select class="col-xs-11" id="gender" name="gender">
					                    <option value="male" <?php if($singleformData['gender']=='male'){echo  'selected';}?>>Male</option>
					                    <option value="female" <?php if($singleformData['gender']=='female'){echo  'selected';}?>>Female</option>
					                    <option value="other" <?php if($singleformData['gender']=='other'){echo  'selected';}?>>Other</option>
					                  </select>


										</div>
									</div>
								</div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date of birth </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['date_of_birth'];?>" class="col-xs-11" name="date_of_birth"/>

										</div>
									</div>
								</div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Place of Birth </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['place_of_birth'];?>" class="col-xs-11" name="place_of_birth"/>

										</div>
									</div>
								</div>
                          </div>
                          

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Martial Status </label>

										<div class="col-sm-9">
											<select class="col-xs-11" id="marital_status" name="marital_status">
					                    <option value="married" <?php if($singleformData['marital_status']=='married'){echo 'selected';} ?>>Married</option>
                                          	<option value = "unmarried" <?php if($singleformData['marital_status']=='unmarried'){echo 'selected';} ?>>Un married</option>
					                  </select>

										</div>
									</div>
								</div>
                          </div>

                           <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Education </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['education'];?>" class="col-xs-11" name="education"/>

										</div>
									</div>
								</div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Occupation</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['occupation'];?>" class="col-xs-11" name="occupation"/>

										</div>
									  </div>
								 </div>
                          </div>
                           
                           <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Award</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['award'];?>" class="col-xs-11" name="award"/>

										</div>
									  </div>
								 </div>
                          </div>
                       <div style="clear:both;">
								
                          </div>


                       <h3 class="form-heading center">Address</h3>

                        <h4 class="form-heading">Present Address</h4>

                         <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['present_address'];?>" class="col-xs-11" name="present_address"/>

										</div>
									  </div>
								 </div>
                          </div>

                        <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">District</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['present_district'];?>" class="col-xs-11" name="present_district"/>

										</div>
									  </div>
								 </div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">State</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['present_state'];?>" class="col-xs-11" name="present_state"/>

										</div>
									  </div>
								 </div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pincode</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['present_pincode'];?>" class="col-xs-11" name="present_pincode"/>

										</div>
									  </div>
								 </div>
                          </div>
                           <h4 class="form-heading">Permanent Address</h4>

                         <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['permanent_address'];?>" class="col-xs-11" name="permanent_address"/>

										</div>
									  </div>
								 </div>
                          </div>

                        <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">District</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['permanent_district'];?>" class="col-xs-11" name="permanent_district"/>

										</div>
									  </div>
								 </div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">State</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['permanent_state'];?>" class="col-xs-11" name="permanent_state"/>

										</div>
									  </div>
								 </div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pincode</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['permanent_pincode'];?>" class="col-xs-11" name="permanent_pincode"/>

										</div>
									  </div>
								 </div>
                          </div>
                        

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Country</label>
                                        <div class="col-sm-9">
										<select class="col-xs-11" id="country" name="country">
					                    <option value="India" <?php if($singleformData['country']=='India'){echo  'selected';}?>>India</option>
					                    <option value="Other" <?php if($singleformData['country']=='Other'){echo  'selected';}?>>Other</option>
					                    
					                  </select>

									</div>
									  </div>
								 </div>
                          </div>

                          <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Other Country Address</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['other_country_address'];?>" class="col-xs-11" name="other_country_address"/>

										</div>
									  </div>
								 </div>
                          </div>


                          <h3 class="form-heading center">Contact Information</h3>
                           
                            <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email Id</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['email'];?>" class="col-xs-11" name="email"/>

										</div>
									  </div>
								 </div>
                          </div>

                           <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile no</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['mobile'];?>" class="col-xs-11" name="mobile"/>

										</div>
									  </div>
								 </div>
                          </div>

                           <div class="col-sm-6">
								<div class="row">
                           	     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aadhar</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleformData['aadhar'];?>" class="col-xs-11" name="aadhar"/>

										</div>
									  </div>
								 </div>
                          </div>


                          <div class="col-md-offset-3 col-md-9">
							<input type="submit" name="update_data" class="btn btn-info" value="Update Data">
							</div>

							 <?=form_close();?>
                             <?php endif;?>


						
						</div><!-- /.row -->



					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/common/footer');?>
<!-- inline scripts related to this page -->
	 
		
  <script>
  function change_tab(value){
    if(value!='' && value!='undefined'){
      if(value=='Self'){
        $('.family_id_msg').removeClass('hide');
        $('.family_id_mobile').addClass('hide');
      }
      else{
        $('.family_id_msg').addClass('hide');
        $('.family_id_mobile').removeClass('hide');
      }
    }
    else{
    $('.family_id_mobile').addClass('hide');
    $('.family_id_msg').removeClass('hide');
      
    }
  }

  </script>

  <script>
             function filladd()
        {
             if(filltoo.checked == true) 
             {
             var present_address =document.getElementById("present_address").value;
             var present_district =document.getElementById("present_district").value;
             var present_state =document.getElementById("present_state").value;
             var present_pin =document.getElementById("present_pin").value;

            var present_address =present_address ;
            var present_district =present_district ;
            var present_state =present_state ;
            var present_pin =present_pin ;

             document.getElementById("permanent_address").value = present_address;
             document.getElementById("permanent_district").value = present_district;
             document.getElementById("permanent_state").value = present_state;
             document.getElementById("permanent_pin").value = present_pin;
            
             }
            // else if(filltoo.checked == false)
             else 
             {
               document.getElementById("permanent_address").value='';
               document.getElementById("permanent_district").value='';
               document.getElementById("permanent_state").value='SELECT STATE';
               document.getElementById("permanent_pin").value='';
               
             }
     }

</script>