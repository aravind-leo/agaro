<?php
?>

<div class="container pat-main-container">
	<div class="profile-main-btn">

		<a href="../patient/patientProfileView" class="btn btn-primary">Save</a>
	</div>
	<div class="col-sm-2 text-sm-center">
		<div class="prfile-pic">
			<span class="pic"> <img
				src="http://localhost/public/images/profile-pic.jpg" alt="">


			</span>
			<div class="upload-txt">
				<a href="javascript:;">Upload Photo</a>
			</div>
			<h4>John Doe</h4>
			<p>PID1209452</p>
			<p class="text-muted">Torronto, Canada</p>
		</div>

	</div>
	<div class="col-sm-10">
		<div class="nav-bar-custom">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#tab1"
					aria-controls="home" role="tab" data-toggle="tab">Patient Info</a></li>
				<!-- <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">Patient Vitals</a></li> -->
				<li role="presentation"><a href="#tab3" aria-controls="messages"
					role="tab" data-toggle="tab">Primary Care Provider </a></li>
				<li role="presentation"><a href="#tab4" aria-controls="settings"
					role="tab" data-toggle="tab">Other Insurance Details</a></li>
				<li role="presentation"><a href="#tab5" aria-controls="settings"
					role="tab" data-toggle="tab">Emergency Contact Info</a></li>
				<li role="presentation"><a href="#tab6" aria-controls="settings"
					role="tab" data-toggle="tab">My Medical Condition</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tab1">
					<div class="patient-form">
						<div class="form-container">
							<form>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="name" name="name" required="required">
										<label for="input" class="control-label">Patient Name:</label><i
											class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="dob" name="dob" required="required"> <label
											for="pwd" for="input" class="control-label">DOB:</label><i
											class="bar"></i>
									</div>
									<div class="form-group">
										<select id="mStatus" name="mStatus">
											<option>Single</option>
											<option>Married</option>
											<option>Widowed</option>
											<option>Other</option>
										</select> <label class="control-label" for="select">Select
											Marital Status</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select id="gender" name="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select> <label class="control-label" for="select">Select
											Gender</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="aLine1" name="aLine1"
											required="required"> <label for="input" class="control-label">Address
											Line 1</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="aLine2" name="aLine2"
											required="required"> <label for="pwd" for="input"
											class="control-label">Address Line 2:</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select id="state" name="state">
											<option>Nova Scotia</option>
											<option>Torronto</option>
											<option>British Columbia</option>
										</select> <label class="control-label" for="select">Select
											Province/State</label><i class="bar"></i>
									</div>
								</div>

								<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<select id="city" name="city">
											<option>Nova Waterford</option>
										</select> <label class="control-label" for="select">Select
											City</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="zip" name="zip" required="required"> <label
											for="pwd" for="input" class="control-label">ZIP Code:</label><i
											class="bar"></i>
									</div>
									<!-- <div class="form-group">
                                            <input type="text" id="email" required="required">
                                            <label for="input" class="control-label">Residential Address:</label><i class="bar"></i>
                                        </div> -->
									<div class="form-group">
										<input type="text" id="hPhone" name="hPhone"
											required="required"> <label for="pwd" for="input"
											class="control-label">Home Phone:</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="wPhone" name="wPhone"
											required="required"> <label for="input" class="control-label">Work
											Phone</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="email" name="email" required="required">
										<label for="pwd" for="input" class="control-label">Email:</label><i
											class="bar"></i>
									</div>
								</div>
								<div class="col-sm-1"></div>
								<div class="clr"></div>
								<div class="btn-container">
									
									<div class="pull-right">
										<button class="btn btn-primary">Save</button>
									</div>
									<div class="clr"></div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<div role="tabpanel" class="tab-pane" id="tab3">
					<div class="patient-form">
						<div class="form-container">
							<form>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="email" required="required"> <label
											for="input" class="control-label">First Name:</label><i
											class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="pwd" required="required"> <label
											for="pwd" for="input" class="control-label">Last Name:</label><i
											class="bar"></i>
									</div>

									<!-- <div class="checkbox">
                                            <label>
                                            <input type="checkbox"/><i class="helper"></i> Did you refer by any Provider?
                                        </label>
                                        </div> -->
									<div class="form-group">
										<input type="text" id="pwd" required="required"> <label
											for="pwd" for="input" class="control-label">PCP ID:</label><i
											class="bar"></i>
									</div>


								</div>

								<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="email" required="required"> <label
											for="input" class="control-label">Middle Name:</label><i
											class="bar"></i>
									</div>



								</div>
								<div class="col-sm-1"></div>
								<div class="clr"></div>
								<div class="btn-container">
									
									<div class="pull-right">
										<button class="btn btn-primary">Save</button>
									</div>
									<div class="clr"></div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<div role="tabpanel" class="tab-pane" id="tab4">
					<div class="patient-form">
						<div class="form-container">
							<form>
								<br>
								<div class="col-md-12">
									<h4 class="mar-top-sm">Insurance Details</h4>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="insCName" name="insCName"
											required="required"> <label for="input" class="control-label">Insurance
											Company Name</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="insIdName" name="insIdName"
											required="required"> <label for="pwd" for="input"
											class="control-label">Insurance ID Number:</label><i
											class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="grpNum" name="grpNum"
											required="required"> <label for="pwd" for="input"
											class="control-label">Group Number:</label><i class="bar"></i>
									</div>
								</div>
								<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="effStart" name="effStart"
											required="required"> <label for="pwd" for="input"
											class="control-label">Effective Start Date:</label><i
											class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="effEnd" name="effEnd"
											required="required"> <label for="pwd" for="input"
											class="control-label">Effective End Date:</label><i
											class="bar"></i>
									</div>

								</div>

								<div class="col-sm-1"></div>
								<div class="clr"></div>
								<div class="col-md-12">
									<h4 class="mar-top-sm">Subscriber Details</h4>
								</div>
								<div class="col-sm-12">
									<p class="mar-top-sm">Is the patient same as Subscriber?</p>
									<div class="form-radio mar-top-sm">

										<div class="col-sm-3" style="padding-left: 0px;">
											<div class="radio">

												<label> <input type="radio" id="nameYes" name="nameYes" /><i
													class="helper"></i>Yes
												</label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="radio">
												<label> <input type="radio" id="nameNo" name="nameNo"
													checked="checked" /><i class="helper"></i>No
												</label>
											</div>
										</div>
									</div>
									<div class="clr"></div>
								</div>
								<div class="col-sm-5">

									<div class="form-group">
										<select id="patientRel" name="patientRel">
											<option>1. Spouse</option>
											<option>2. Daughter</option>
										</select> <label class="control-label" for="select">Patient
											relationship with subscriber</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<input type="text" id="subName" name="subName"
											required="required"> <label for="pwd" for="input"
											class="control-label">Subscriber Name:</label><i class="bar"></i>
									</div>
									<div class="clr"></div>
									<a href="javascript:;"> Add Secondary Insurance </a>
								</div>
								<div class="col-sm-1"></div>
								<div class="col-sm-5">

									<div class="form-group">
										<input type="text" id="subDob" name="subDob"
											required="required"> <label for="pwd" for="input"
											class="control-label">DOB:</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<select id="subGender" name="subGender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select> <label class="control-label" for="select">Select
											Gender</label><i class="bar"></i>
									</div>
								</div>
								<div class="col-sm-1"></div>

								<div class="clr"></div>
								<div class="btn-container">

									<div class="pull-right">
										<button class="btn btn-primary">Save</button>
									</div>
									<div class="clr"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab5">
					<div class="patient-form">
						<div class="form-container">
							<form>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="guardianName" name="guardianName"
											required="required"> <label for="input" class="control-label">Guardian/Authorized
											Representative Name:</label><i class="bar"></i>
									</div>


									<div class="form-group">
										<select id="guardianRelation" name="guardianRelation">
											<option>Father</option>
											<option>Mother</option>
											<option>Sibling</option>
										</select> <label class="control-label" for="select">Relation
											between Guardian/Authorized representative and patient:</label><i
											class="bar"></i>
									</div>

								</div>

								<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<input type="text" id="emergencyContact"
											name="emergencyContact" required="required"> <label for="pwd"
											for="input" class="control-label">Emergency contact number</label><i
											class="bar"></i>
									</div>
								</div>
								<div class="col-sm-1"></div>
								<div class="clr"></div>
								<div class="btn-container">
									<div class="pull-right">
										<button class="btn btn-primary">Save</button>
									</div>
									<div class="clr"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="tab6">
					<div class="patient-form">
						<div class="form-container">
							<form>
								<div class="col-sm-12">
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Please give
											details of Medical condition. If none, please state none.</label><i
											class="bar"></i>
									</div>

									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Please give
											details of any allergies (including to any drug). If none,
											please state none</label><i class="bar"></i>
									</div>

									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Please give
											details of any long term illness or injuries. If none, please
											state none.</label><i class="bar"></i>
									</div>
									<div class="form-group">
										<textarea required="required"></textarea>
										<label class="control-label" for="textarea">Please give
											details of any regular medication taken. If none, please
											state none.</label><i class="bar"></i>
									</div>

								</div>


								<div class="clr"></div>
								<div class="btn-container">
									
									<div class="pull-right">
										<button class="btn btn-primary">Save</button>
									</div>
									<div class="clr"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<!--OUTSIDE OF MAIN CONTAINER MODAL -->
<!-- Modal -->
<div class="modal fade" id="book-appointment" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Book Appointment</h4>
			</div>
			<div class="modal-body">
				<div class="form-container">
					<div class="form-group">
						<select>
							<option>Cardiology</option>
						</select> <label for="input" class="control-label">Select
							Speciality:</label><i class="bar"></i>
					</div>
					<div class="form-group">
						<input type="text" id="pwd" required="required" list="doc"
							name="docs">
						<datalist id="doc">
							<option value="Andrew Mathew">
							
							
							<option value="John Mathew">
							
							
							<option value="Brick Wall">
							
							
							<option value="Bonebrake">
						
						</datalist>
						<label for="input" class="control-label">Select Doctor:</label><i
							class="bar"></i>
						<p class="mar-top-sm">Know Your Doctor? Type Doctor Name</p>






					</div>
					<div class="form-group">
						<input type="text" id="pwd" required="required"> <label
							for="input" class="control-label">Select Date:</label><i
							class="bar"></i>
					</div>

				</div>
				<div class="time-slot">
					<a href="javascript:;">09:00</a> <a href="javascript:;">09:30</a> <a
						href="javascript:;">10:00</a> <a href="javascript:;">10:30</a> <a
						href="javascript:;">11:00</a> <a href="javascript:;">11:30</a> <a
						href="javascript:;">12:00</a> <a href="javascript:;">12:30</a> <a
						href="javascript:;" class="disable">13:00</a> <a
						href="javascript:;">14:00</a> <a href="javascript:;">14:30</a> <a
						href="javascript:;">15:00</a> <a href="javascript:;">15:30</a> <a
						href="javascript:;">16:00</a> <a href="javascript:;">16:30</a> <a
						href="javascript:;">17:00</a> <a href="javascript:;">17:30</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal"
					data-toggle="modal" data-target="#book-appointment-confirm">Continue</button>
			</div>
		</div>

	</div>
</div>


<!-- Modal 2-->
<div class="modal fade" id="book-appointment-confirm" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Book Appointment</h4>
			</div>
			<div class="modal-body">
				<div class="form-container">
					<div class="form-fill">
						<label>Speciality</label>
						<p>Cardiology</p>
					</div>
					<div class="form-fill">
						<label>Doctor</label>
						<p>Anderson Mathew</p>
					</div>
					<div class="form-fill">
						<label>Date</label>
						<p>10/10/2017</p>
					</div>

				</div>
				<div class="time-slot">
					<a href="javascript:;" class="active">18:00</a>

				</div>
				<div class="checkbox">
					<label> <input type="checkbox" checked id="pay-now-check" /><i
						class="helper"></i> Pay Now
					</label>
				</div>

				<div class="payment-container">
					<br>
					<p>
						<strong>Select Payment Method </strong>
					</p>
					<br>
					<div class="col-sm-4">
						<div class="form-radio mar-top-sm">
							<div class="radio">
								<label> <input type="radio" name="radio" checked="checked" /><i
									class="helper"></i>Credit Card
								</label>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-radio mar-top-sm">
							<div class="radio">
								<label> <input type="radio" name="radio" /><i class="helper"></i>Debit
									Card
								</label>
							</div>
						</div>
					</div>
					<!-- <div class="col-sm-4">
                                <div class="form-radio mar-top-sm">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"/><i class="helper"></i>ACH
                                        </label>
                                    </div>
                                </div>
                            </div> -->
					<div class="col-sm-12">
						<div class="form-group mar-top-sm">
							<input type="text" id="pwd" required="required"> <label
								for="input" class="control-label">Card Number:</label><i
								class="bar"></i>
						</div>
						<div class="form-group">
							<input type="text" id="pwd" required="required"> <label
								for="input" class="control-label">Card Holder Name:</label><i
								class="bar"></i>
						</div>

					</div>
					<div class="col-xs-2">
						<div class="form-group mar-top-sm">
							<input type="text" id="pwd" required="required"> <label
								for="input" class="control-label">CVV</label><i class="bar"></i>
						</div>
					</div>
					<div class="col-sm-3 col-xs-4">
						<div class="form-group mar-top-sm">
							<input type="text" id="pwd" required="required"> <label
								for="input" class="control-label">Expiry Month</label><i
								class="bar"></i>
						</div>
					</div>
					<div class="col-sm-3 col-xs-4">
						<div class="form-group mar-top-sm">
							<input type="text" id="pwd" required="required"> <label
								for="input" class="control-label">Expiry Year</label><i
								class="bar"></i>
						</div>
					</div>
					<div class="clr"></div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
			</div>
		</div>

	</div>
</div>
