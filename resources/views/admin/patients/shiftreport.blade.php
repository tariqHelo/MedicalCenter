@extends("admin.dashboard")

@section("content")

		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>إقفال يومية
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
										<label class="control-label col-md-3">Default</label>
										<div class="col-md-4">
											<select class="bs-select form-control">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</select>
										</div>
									</div>
						        	<div class="form-group">
										<label class="control-label col-md-3">التاريخ والوقت</label>
										<div class="col-md-4">
											<div class="input-group date form_datetime">
												<input type="text" size="16" readonly class="form-control">
												<span class="input-group-btn">
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
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
							<div id="form_modal11" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Sample Form in Modal</h4>
										</div>
										<div class="modal-body">
											<form action="#" class="form-horizontal" role="form">
												<div class="form-group">
													<label class="control-label col-md-4">Default</label>
													<div class="col-md-8">
														<select class="bs-select form-control">
															<option>Mustard</option>
															<option>Ketchup</option>
															<option>Relish</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Disabled</label>
													<div class="col-md-8">
														<select class="bs-select form-control" disabled>
															<option>Mustard</option>
															<option>Ketchup</option>
															<option>Relish</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Grouped</label>
													<div class="col-md-8">
														<select class="bs-select form-control">
															<optgroup label="Picnic">
															<option>Mustard</option>
															<option>Ketchup</option>
															<option>Relish</option>
															</optgroup>
															<optgroup label="Camping">
															<option>Tent</option>
															<option>Flashlight</option>
															<option>Toilet Paper</option>
															</optgroup>
														</select>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn green" data-dismiss="modal">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>

@endsection