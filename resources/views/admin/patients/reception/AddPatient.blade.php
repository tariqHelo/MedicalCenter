@extends("admin.dashboard")

@section("content")
                            <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>اضافة مريض جديد
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
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الإسم</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">نوع التعاقد</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<!--/row-->
												 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إسم المريض بالإنجليزي</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">جهة العمل</label>
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
															<label class="control-label col-md-3">رقم الهوية/رقم الاقامة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">كود الخصم *</label>
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
                                                            <label class="control-label col-md-3">Default Date Ranges</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group" id="defaultrange">
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn default date-range-toggle" type="button"><i class="fa fa-calendar"></i></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">كيف عرفت عنا</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
												</div>
                                                 <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                            <label class="control-label col-md-3">Large</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control input-large select2me" data-placeholder="Select...">
                                                                    <option value=""></option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                            </div>
                                                        </div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
											      <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">العمر</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
											       <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">النوع</label>
															<div class="col-md-9">
																<div class="radio-list">
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Male </label>
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> FeMale </label>
                                                                
                                                            </div>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
                                              <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">النوع</label>
															<div class="col-md-9">
																<div class="radio-list">
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Male </label>
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> FeMale </label>
                                                                
                                                            </div>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
                                              <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">النوع</label>
															<div class="col-md-9">
																<div class="radio-list">
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Male </label>
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> FeMale </label>
                                                                
                                                            </div>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
                                              <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">النوع</label>
															<div class="col-md-9">
																<div class="radio-list">
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Male </label>
                                                                <label class="radio-inline">
                                                                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> FeMale </label>
                                                                
                                                            </div>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                       
													</div>
													<!--/span-->
												</div>
                                            
											  <div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">إضافة دكتور</button>
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