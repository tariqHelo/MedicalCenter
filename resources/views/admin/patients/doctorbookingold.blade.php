@extends("admin.dashboard")

@section("content")
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>قائمة حجز الإطباء
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
							<form action="index.html" class="form-horizontal form-row-seperated">
								<div class="form-body">
								    <div class="form-group">
										<label class="control-label col-md-3">من </label>
										<div class="col-md-4">
											<div class="input-group" id="defaultrange">
												<input type="text" class="form-control">
												<span class="input-group-btn">
												<button class="btn default date-range-toggle" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
                                <div class="form-body">
								    <div class="form-group">
										<label class="control-label col-md-3">إلي</label>
										<div class="col-md-4">
											<div class="input-group" id="defaultrange">
												<input type="text" class="form-control">
												<span class="input-group-btn">
												<button class="btn default date-range-toggle" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> بحث</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
							
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>

@endsection


