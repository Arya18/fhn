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
								Edit User Info
								
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
									<?php $attributes = array('method' =>'post','class' =>'form-horizontal','enctype'=>'multipart/form-data');?>
										<?=form_open(base_url().'admin/user/update_user',$attributes);?>
										<?php if(isset($singleuserData) && !empty($singleuserData)):?>
                        
                                 <input type="hidden" id="id" name="id" class="col-xs-10 col-sm-5" value="<?=$singleuserData['id']?>" />
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleuserData['user_name'];?>" class="col-xs-10 col-sm-5" name="name" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?=$singleuserData['user_username'];?>" class="col-xs-10 col-sm-5" name="username"/>
										</div>
									</div>

										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email </label>

										<div class="col-sm-9">
											<input type="email" id="form-field-1" value="<?=$singleuserData['user_email'];?>" class="col-xs-10 col-sm-5" name="email" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" value="<?=$singleuserData['user_password'];?>" class="col-xs-10 col-sm-5" name="password" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"><!-- use atleast one capital letter & one Special Char & one digit --></span>
											</span>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Status </label>

										<div class="col-sm-9">
											
											<select class="col-xs-10 col-sm-5" id="status" name="status">
					                    <option value="enable" <?php if($singleuserData['status']=='enable'){echo 'selected';} ?>>enable</option>
                                          	<option value = "disable" <?php if($singleuserData['status']=='disable'){echo 'selected';} ?>>disable</option>
					                  </select>

											</span>
										</div>
									</div>

									<div class="space-4"></div>
                                     <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="updateuser" class="btn btn-info" value="Update User">
										</div>
									</div>
                             <?php endif;?>
								<?=form_close();?>

							</div><!-- /.col -->
						
						</div><!-- /.row -->



					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/common/footer');?>
<!-- inline scripts related to this page -->
		