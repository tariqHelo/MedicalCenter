@extends("admin.dashboard")

@section("content")
	<!-- BEGIN PAGE CONTENT-->
		<div class="row">
				<div class="col-md-12">
					<div class="tabbable-line boxless tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_2" data-toggle="tab">
								الفئات </a>
							</li>
							<li>
								<a href="#tab_5" data-toggle="tab">
								الخدمات </a>
							</li>
					
						</ul>
						<div class="tab-content">

							<div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>الفئات 
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
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">الإسم</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <div class="form-body">
												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">ملاحظات</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <div class="form-body">
                                            <div class="row">
											  <div class="col-md-9">
                                                 <label>النوع</label>
                                                    <div class="radio-list">
                                                        <label>
                                                        <input type="radio" name="toasts" value="success" checked/>المختبر </label>
                                                        <label>
                                                        <input type="radio" name="toasts" value="info"/>الإشعة </label>
                                                        <label>
                                                        <input type="radio" name="toasts" value="warning"/>الإدوية </label>
                                                        <label>
                                                        <input type="radio" name="toasts" value="error"/>كشف </label>
                                                    </div>
                                                 </div>
											  </div>
											 </div>
											 <div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">إضافة</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</form>
										<!-- END FORM-->
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
														الكشف
													</th>
													<th>
														النوع
													</th>
												
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														alex
													</td>
													<td>
														Alex Nilson
													</td>
													<td>
														1234
													</td>
												
												</tr>
												
												</tbody>
												</table>
											</div>
										</div>
										<!-- END EXAMPLE TABLE PORTLET-->
									</div>
								</div>
							</div>


							<div class="tab-pane" id="tab_5">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>الخدمات
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
										<form action="#" class="form-horizontal form-bordered">
											
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">الفئات</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">إسم الخدمة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">كود الخدمة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">السعر</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">تكلفة الخدمة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">صورة الخدمة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
											</div>
											<div class="form-body">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">مراجعة مجانية</label>
															<div class="col-md-9">
																	<input type="checkbox" class="icheck"></label>
															</div>
														</div>
													</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green"><i class="fa fa-check"></i> إضافة</button>
\															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
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
														كود 
													</th>
													<th>
														السعر 
													</th>
													<th>
														تكلفة الخدمة
													</th>
													<th>
														الفئات 
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
								</div>
							
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

    
@endsection