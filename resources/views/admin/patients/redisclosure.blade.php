@extends("admin.dashboard")

@section("content")

	<div class="row">
				<div class="col-md-12">
						<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box purple ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> إعادة الكشف
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
										<label class="col-md-3 control-label">Default Input</label>
										<div class="col-md-6">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
                                        <button type="button" class="btn red">بحث</button>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
										<div class="col-md-6">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
                                       <button type="button" class="btn red">بحث</button>

									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
										<div class="col-md-6">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
                                       <button type="button" class="btn red">بحث</button>

									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">Default Input</label>
                                        <div class="radio-list">
											<label class="radio-inline">
											<input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Option 1 </label>
											<label class="radio-inline">
											<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> Option 2 </label>
						
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Default Select</label>
										<div class="col-md-6">
											<select class="form-control">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">Default Select</label>
										<div class="col-md-6">
											<select class="form-control">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Advance Datetimepicker</label>
										<div class="col-md-6">
											<div class="input-group date form_datetime" data-date="2012-12-21T15:25:00Z">
												<input type="text" size="16" readonly class="form-control">
												<span class="input-group-btn">
												<button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
										</div>
									</div>
									
								</div>
								<div class="form-actions right1" align="center">
									<button type="submit" class="btn green ">حفظ</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
              </div>
   </div>

@endsection