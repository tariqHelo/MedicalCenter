@extends("admin.dashboard")

@section("content")

     <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>بيانات عامة
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
												<!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الإسم بالإنجليزية</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">التليفون</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
											    <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الإسم </label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">الموبايل</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
                                                <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">المحافظة بالانجليزية</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">الموبيل</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
                                                <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">المحافظة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">البريد الالكتروني</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
                                                <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">المدينة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">الموقع الالكتروني</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
												</div>
                                                <!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">العنوان</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
												     	<div class="form-group">
												 			<label class="control-label col-md-3">إضافة ملف</label>
															<div class="col-md-9">
										                    	<input type="file" id="exampleInputFile">
															</div>
														</div>
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
					 </div>
                     
@endsection