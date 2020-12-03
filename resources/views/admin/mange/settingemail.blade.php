@extends("admin.dashboard")

@section("content")

	   <div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>إعددات البريد الإلكتروني
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
							<form action="#" id="form_sample_1" class="form-horizontal">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
								


									<div class="form-group">
										<label class="control-label col-md-3">إرسال من &nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
										</div>
									</div>
                                    	<div class="form-group">
										<label class="control-label col-md-3">smpt client&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
											
										</div>
									</div>	<div class="form-group">
										<label class="control-label col-md-3">المستخدم&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
										
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">كلمة المرور&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
											
										</div>
									</div>
                                      <div class="form-group">
										<label class="control-label col-md-3">SSL <span class="required">
										</label>
										<div class="col-md-4">
											<div class="checkbox-list" data-error-container="#form_2_services_error">
												<label>
												<input type="checkbox" value="1" name="service"/> Service 1 </label>
											</div>
										</div>
									</div>
                                     <div class="form-group">
										<label class="control-label col-md-3">بورت&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
											
										</div>
									</div>
									
                                   <div class="form-group">
										<label class="control-label col-md-3">تفعيل <span class="required">
										</label>
										<div class="col-md-4">
											<div class="checkbox-list" data-error-container="#form_2_services_error">
												<label>
												<input type="checkbox" value="1" name="service"/> Service 1 </label>
											</div>
										</div>
									</div>
								</div>
                                	<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">   إضافة</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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
										 إرسال من 
									</th>
									<th>
										 SMPT Client
									</th>
									<th>
										 المستخدم
									</th>
									<th>
										كلمة المرور
									</th>
									<th>
										 بورت
									</th>
									<th>
										 SSL
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