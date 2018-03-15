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
								Add User
								
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
									<?php $attributes = array('method' =>'post','class' =>'form-horizontal','enctype'=>'multipart/form-data');?>
										<?=form_open(base_url().'admin/user/add_user',$attributes);?>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5"name="name" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="User Name" class="col-xs-10 col-sm-5" name="username"/>
										</div>
									</div>

										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email </label>

										<div class="col-sm-9">
											<input type="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" name="email" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" name="password" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"><!-- use atleast one capital letter & one Special Char & one digit --></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>
                                     <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="adduser" class="btn btn-info" value="Add USer">
										</div>
									</div>

								<?=form_close();?>

							</div><!-- /.col -->

							<div class="clearfix">
								<div class="pull-left tableTools-container">
									<?php $attributes = array('method' =>'post','class' =>'',);?>
										<?=form_open(base_url().'admin/user/search_keyword',$attributes);?>
												
													<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search"></i>

													<input type="text" class="search-query" name = "keyword" placeholder="Search By Name..."/>
												</span>
												<input class="btn btn-sm" type="submit" name= "search">
													<?=form_close();?>
												</div>
												
								
											<div class="pull-right tableTools-container">
												<a href="<?= base_url();?>admin/user/get_csv_report" class="btn btn-info">Export Csv</a></div>
										</div>
							<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>No</th>
													<th class="detail-col">Name</th>
													<th>User Name</th>
													<th>Email</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php if(isset($userList) && !empty($userList)):?>
												 <?php $sn=0; foreach ($userList as $ul):?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center"><?=++$sn;?></td>
													<td><?=$ul->user_name ?></td>
													<td><?=$ul->user_username ?></td>
													<td class="hidden-480"><?=$ul->user_email ?></td>
													

													<td class="hidden-480">
														<?php $status_color = ($ul->status=='enable')?'label-success':'label-danger'; ?>
														<span class="label label-sm <?=$status_color;?>"><?=$ul->status ?></span>
													</td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?=base_url();?>admin/user/user_edit/<?=$ul->id; ?>" class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
															</a>

															<a href="<?=base_url();?>admin/user/delete/<?=$ul->id; ?>" class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</a>
														</div>

													</td>
												</tr>
                                               <?php endforeach;?>
                                              <?php else:?>
                                              <tr><td>No records found</td></tr>
                                              <?php endif;?>
											</tbody>
										</table>
									</div><!-- /.span -->
										<p><?php  if(isset($links)) {echo $links;} ?></p>
						</div><!-- /.row -->



					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $this->load->view('admin/common/footer');?>
<!-- inline scripts related to this page -->
		<script type="text/javascript">
               var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
		</script>