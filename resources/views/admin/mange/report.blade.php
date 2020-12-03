
@extends("admin.dashboard")

@section("content")

	<div class="row">
				<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box purple ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> تقرير الزيارات
							</div>
							<div class="tools">
								<a href="" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="" class="reload">
								</a>
								<a href="" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" role="form">
								<div class="form-body">
									
									<div class="form-group">
										<label class="control-label col-md-3">التاريخ</label>
										<div class="col-md-3">
											<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
												<input type="text" class="form-control" readonly>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
                                    	<div class="form-group">
										<label class="control-label col-md-3">التاريخ</label>
										<div class="col-md-3">
											<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
												<input type="text" class="form-control" readonly>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions right1">
									<button type="submit" class="btn green">بحث</button>
								</div>
                                <div class="form-actions" >
									<button type="submit" class="btn green">طباعة</button>
								</div>
							</form>

						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				</div>
			</div>
@endsection
