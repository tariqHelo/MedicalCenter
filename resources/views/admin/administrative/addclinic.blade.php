@extends("admin.dashboard")

@section("content")
                           <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة عيادة
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
															<div class="form-group">
														<label class="col-md-3 control-label">Checkboxes</label>
														 <div class="col-md-9">
															<div class="radio-list">
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> Checkbox 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> radio 1 </label>
																<label>
																<input type="radio"> Checkbox 1</label>
															</div>
														</div>
								                	</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-3 control-label">Checkboxes</label>
														<div class="col-md-9">
															<div class="checkbox-list">
																<label>
																<input type="checkbox"> Checkbox 1 </label>
																<label>
																<input type="checkbox"> Checkbox 1 </label>
																<label>
																<input type="checkbox"> Checkbox 1 </label>
																<label>
																<input type="checkbox"> Checkbox 1 </label>
																<label>
																<input type="checkbox"> Checkbox 1 </label>
																<label>
																<input type="checkbox"> Checkbox 1 </label>
															</div>
														</div>
				
								                	</div>
													<div class="form-group">
															<label class="control-label col-md-3">الفئات</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الإسم</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
														
													</div>
												</div>
											    <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">أرقام طوارئ</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
													
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">بيانات أخري</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
													
													</div>
												</div>
													<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="exampleInputFile" class="col-md-3 control-label">إضافة مرفقات عيادة</label>
															<div class="col-md-9">
																<input type="file" id="exampleInputFile">
							
															</div>
														</div>
													</div>
													
													<!--/span-->
													<div class="col-md-6">
													
													</div>
												</div>
											  <div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">إضافة </button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
									<!-- BEGIN EXAMPLE TABLE PORTLET-->
										<div class="portlet box blue">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-edit"></i>Editable Table
												</div>
												<div class="tools">
													<a href="javascript:;" class="collapse">
													</a>
													<a href="#portlet-config" data-toggle="modal" class="config">
													</a>
													<a href="javascript:;" class="reload">
													</a>
													<a href="javascript:;" class="remove">
													</a>
												</div>
											</div>
											<div class="portlet-body">
												<div class="table-toolbar">
													<div class="row">
														<div class="col-md-6">
															<div class="btn-group">
																<button id="sample_editable_1_new" class="btn green">
																Add New <i class="fa fa-plus"></i>
																</button>
															</div>
														</div>
														<div class="col-md-6">
															<div class="btn-group pull-right">
																<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
																</button>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		Print </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		Save as PDF </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		Export to Excel </a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
												<thead>
												<tr>
													<th>
														#
													</th>
													<th>
														الإسم 
													</th>
												
													<th>
														STATE 
													</th>
													
			
												</tr>
												</thead>
												<tbody>
												<tr>
												
												
												</tr>
												
												</tbody>
												</table>
											</div>
										</div>
										<!-- END EXAMPLE TABLE PORTLET-->
					 </div>
               
@endsection