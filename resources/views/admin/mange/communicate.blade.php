@extends("admin.dashboard")

@section("content")
<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box purple ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>إعددادات الإتصال
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
										<label class="col-md-3 control-label">إسم المؤسسة </label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">إسم المؤسسة إنجليزي</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 control-label">مكان الشعار</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Default Input">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">تنبية</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-lg" placeholder="Large Input">
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">بيانات الاإتصال <span class="required">
										 </span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
								<div class="form-actions right1">
									<button type="submit" class="btn green">حفظ</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->

@endsection