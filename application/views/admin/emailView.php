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
								Email Us
								
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
									<?php $attributes = array('method' =>'post','class' =>'form-horizontal','enctype'=>'multipart/form-data');?>
										<?=form_open(base_url().'admin/email/send_email',$attributes);?>
										
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5"name="name" />
										</div>
									</div>
								

										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email </label>

										<div class="col-sm-9">
											<input type="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" name="email" />

											
										</div>
									</div>

									<div class="space-4"></div>

									

									<div class="space-4"></div>
                                     <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="submit" class="btn btn-info" value="Send Email">
										</div>
									</div>

								<?=form_close();?>

							</div><!-- /.col -->

						</div><!-- /.row -->



					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/common/footer');?>
<!-- inline scripts related to this page -->
	