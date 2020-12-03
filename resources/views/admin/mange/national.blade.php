@extends("admin.dashboard")

@section("content")

	<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable-line boxless tabbable-reversed">
						
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة الجنسية
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
													<label class="col-md-3 control-label">الإسم</label>
													<div class="col-md-4">
														<input type="text" class="form-control input-circle" placeholder="Enter text">
														<span class="help-block">
													    </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">الضريبة</label>
													<div class="col-md-4">
													 <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>

													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">إضافة</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						
							</div>
						</div>
					</div>
				</div>

                <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Table
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
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									 الجنسية
								</th>
								<th>
									 Status
								</th>
							</tr>
							</thead>
							<tbody>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			</div>
			<!-- END PAGE CONTENT-->


            

@endsection