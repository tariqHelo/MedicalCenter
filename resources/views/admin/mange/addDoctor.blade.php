@extends("admin.dashboard")

@section("content")
                            <div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة دكتور
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
															<label class="control-label col-md-3">المستخدم</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إسم الإدارة</label>
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
															<label class="control-label col-md-3">كلمة المرور</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إسم الإدارة</label>
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
															<label class="control-label col-md-3">الإسم</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">العيادة</label>
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
															<label class="control-label col-md-3">البريد الإلكتروني</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إسم الشريحة</label>
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
															<label class="control-label col-md-3">العنوان</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="control-label col-md-3">مواعيد العمل </label>
                                                            <div class="input-group  input-large date-picker input-daterange " data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                <input type="text" class="form-control" name="from">
                                                                <span class="input-group-addon">
                                                                to </span>
                                                                <input type="text" class="form-control" name="to">
                                                            </div>
                                                         </div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-4">Start With Years</label>
                                                        <div class="col-md-8">
                                                            <div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                <input type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                </span>
                                                      </div>
                                                        <!-- /input-group -->
                                                    </div>
											    	</div>
												   </div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">التليفون</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الحد الاقصي للكشف الليومي الصباحي</label>
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
															<label class="control-label col-md-3">الموبايل</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الحد الاقصي لاعاده الكشف الليومي الصباحي</label>
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
															<label class="control-label col-md-3">رقم الهوية/رقم الإقامة</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
                                                <!--/row-->
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إختيار لغة</label>
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	عربي  </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	إنجليزي </label>
																</div>
															</div>
													</div>
													<!--/span-->
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label class="control-label col-md-3">   مواعيد العمل في المساء </label>
                                                                <div class="input-group  input-large date-picker input-daterange " data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                    <input type="text" class="form-control" name="from">
                                                                    <span class="input-group-addon">
                                                                    to </span>
                                                                    <input type="text" class="form-control" name="to">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
											    </div>
                                               <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">إضافة صورة</label>
															<input type="file" id="exampleInputFile1">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الحد الاقصي للكشف الليومي المسائي</label>
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
														
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">الحد الاقصي لاعاده الكشف الليومي المسائي</label>
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