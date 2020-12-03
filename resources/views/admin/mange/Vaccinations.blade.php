@extends("admin.dashboard")

@section("content")

	  <div class="portlet box yellow">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة تطعيمات
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
												<div class="form-group">
													<label class="col-md-3 control-label">الإختصار</label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="Enter text">
													</div>
												</div>
												
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">التطعيم ضد</label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="Enter text">
													</div>
												</div>
												
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">العمر</label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="شهر">
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label"></label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="سنة">
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">ملاحظات</label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="Enter text">
													</div>
												</div>
			
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">إضافة</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
			<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>DATA  Table
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
							<div class="table-responsive">
								<table class="table table-bordered">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 الإختصار
									</th>
									<th>
										 التطعيم ضد
									</th>
									<th>
										 الشهر
									</th>
									<th>
										السنة
									</th>
									<th>
										 ملاحظات
									</th>
								
                                    <th>
                                         STATES--
									</th>
								</tr>
								</thead>
								<tbody>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
@endsection