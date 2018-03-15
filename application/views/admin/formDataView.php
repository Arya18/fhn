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
								Form Data
								
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							

							 <div class="clearfix">
								<div class="pull-left tableTools-container">
									<?php $attributes = array('method' =>'post','class' =>'form-search',);?>
										<?=form_open(base_url().'admin/formdata/search_keyword',$attributes);?>
												<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search"></i>

													<input type="text" class="search-query" name = "keyword" placeholder="Search By Name/Mobile/Family Id..."/>
												</span>
												<input class="btn btn-sm" type="submit" name= "search">
											<?=form_close();?>
												</div>
											
													
												
								
											<div class="pull-right tableTools-container">
												<a href="<?= base_url();?>admin/formdata/get_excel_data" class="btn btn-info">Export Excel</a></div>
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
													<th class="detail-col">Family Id</th>
													<th>Relationship</th>
													<th>Name</th>
													<th>Mobile</th>
													<th>Email</th>
													<th>Aadhar</th>
													<th>Status</th>
												</tr>
											</thead>

											<tbody>
												<?php if(isset($formList) && !empty($formList)):?>
												 <?php $sn=0; foreach ($formList as $fl):?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center"><?=++$sn;?></td>
													<td><?=$fl->family_id ?></td>
													<td><?=$fl->relationship ?></td>
													<td><?=$fl->name ?></td>
													<td><?=$fl->mobile ?></td>
													<td><?=$fl->email ?></td>
													<td><?=$fl->aadhar ?></td>
													

													

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<a href="<?=base_url();?>admin/formdata/formdata_edit/<?=$fl->id; ?>" class="btn btn-xs btn-info">
														<i class="ace-icon fa fa-pencil bigger-120"></i>
														</a>
												
														<a href="<?=base_url();?>admin/formdata/formdata_delete/<?=$fl->id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</a>
														
														<a href="<?=base_url();?>admin/formdata/formdata_view/<?=$fl->id; ?>" class="btn btn-xs btn-group">
															View
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