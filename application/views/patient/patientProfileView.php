<?php


?>

    <div class="container pat-main-container">
        <div class="profile-main-btn">
            <a href="../patient/patientProfile" class="btn btn-secondary">Edit</a>
            <!-- <button class="btn btn-primary">Save</button> -->
        </div>
        <div class="col-sm-2 text-sm-center">
            <div class="prfile-pic">
                <span class="pic">
                <img src="http://localhost/public/images/profile-pic.jpg" alt="">
                
                
            </span>
                <div class="upload-txt">
                    <a href="javascript:;">Upload Photo</a>
                </div>
                <h4>Jane Doe</h4>
                <p>PID1209452</p>
                <p>HCN12839787 <small><br>(Health Card Number)</small></p>
                <p class="text-muted">TX, USA</p>
		</div>

        </div>
        <div class="col-sm-10">
            <div class="nav-bar-custom">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Patient Info</a></li>
                    <!-- <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">Patient Vitals</a></li> -->
                    <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab">Primary Care Provider	</a></li>
                    <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab">Other Insurance Details</a></li>
                    <li role="presentation"><a href="#tab5" aria-controls="settings" role="tab" data-toggle="tab">Emergency Contact Info</a></li>
                    <li role="presentation"><a href="#tab6" aria-controls="settings" role="tab" data-toggle="tab">My Medical Condition</a></li>
                </ul>
                    
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="patient-form">
                            <div class="form-container">
                                <form>
                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>Patient Name:</label>
                                            <p>John Doe</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>DOB:</label>
                                            <p>12/12/1978</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Marital Status:</label>
                                            <p>Married</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Select Gender:</label>
                                            <p>Male</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Address Line 1:</label>
                                            <p>400 Pendragon Dr</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Address Line 2:</label>
                                            <p>Lot 101</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>State:</label>
                                            <p>TX</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-1"></div>


                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>Select City:</label>
                                            <p>Lewisville</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>ZIP Code:</label>
                                            <p>75056</p>
                                        </div>
                                        <!-- <div class="form-fill">
                                            <label>Residential Address:</label>
                                            <p>Canada</p>
                                        </div> -->
                                        <div class="form-fill">
                                            <label>Home Phone:</label>
                                            <p>16178493235</p>
                                        </div>
                                       
                                        <div class="form-fill">
                                            <label>Work Phone:</label>
                                            <p>16173456780</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Email:</label>
                                            <p>Jane.Doe@abc.com</p>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="col-sm-1"></div>
                                    <div class="clr"></div>
                                    
                                </form>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="patient-form">
                            <div class="form-container">
                                <form>

                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>BP:</label>
                                            <p>NA</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Temp:</label>
                                            <p>NA</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Ht:</label>
                                            <p>NA</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>BMI:</label>
                                            <p>NA</p>
                                        </div>
                                        
                                    </div>
                                

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>HR:</label>
                                            <p>NA</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>RR:</label>
                                            <p>NA</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>WT:</label>
                                            <p>NA</p>
                                        </div>
                                        

                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="clr"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <div class="patient-form">
                            <div class="form-container">
                                <form>
                                    <div class="col-sm-5">

                                        <div class="form-fill">
                                            <label>First Name:</label>
                                            <p>Albert</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Last Name:</label>
                                            <p>Joseph</p>
                                        </div>
                                        
                                        <!-- <div class="checkbox">
                                                <label>
                                                <input type="checkbox" checked/><i class="helper"></i> Did you refer by any Provider?
                                            </label>
                                        </div> -->
                                        <div class="form-fill">
                                            <label>PCP ID:</label>
                                            <p>PRO1234333</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>Middle Name:</label>
                                            <p>N</p>
                                        </div>                                       
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="clr"></div>
                                    
                                </form>
                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                            <div class="patient-form">
                                <div class="form-container">
                                    <form><br>
                                        <div class="col-md-12"> <h4 class="mar-top-sm">Insurance Details</h4></div>
                                        <div class="col-sm-5">
                                            <div class="form-fill">
                                                <label>Insurance Company Name:</label>
                                                <p>Blue of Texas</p>
                                            </div>
                                            <div class="form-fill">
                                                <label>Insurance ID Number:</label>
                                                <p>BCBS14232323</p>
                                            </div>  
                                            <div class="form-fill">
                                                <label>Group Number:</label>
                                                <p>GRP101</p>
                                            </div> 
                                            
                                                                                            
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5">
                                            <div class="form-fill">
                                                <label>Effective Start Date:</label>
                                                <p>01/01/2018</p>
                                            </div>  
                                            <div class="form-fill">
                                                <label>Effective End Date:</label>
                                                <p>12/31/2019</p>
                                            </div>                                  
                                            
                                        </div>
    
                                        <div class="col-sm-1"></div>
                                        <div class="clr"></div>
                                        <div class="col-md-12"> <h4 class="mar-top-sm">Subscriber Details</h4></div>
                                        <div class="col-sm-12">
                                                <p class="mar-top-sm">Is the patient same as Subscriber?</p>                                
                                                <div class="form-radio mar-top-sm">
                                                    
                                                    
                                                    <div class="col-sm-3" style="padding-left:0px;">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="radio" checked="checked" disabled/><i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clr"></div>
                                        </div>
                                        <div class="col-sm-5">    
                                                <div class="form-fill">
                                                    <label>Patient relationship with subscriber:</label>
                                                    <p>Spouse</p>
						</div>  
                                                <div class="form-fill">
                                                    <label>Subscriber Name:</label>
                                                    <p>John Doe</p>
                                                </div>    
                                            
                                            
                                            <div class="clr"></div>
                                            
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5">
                                            <div class="form-fill">
                                                <label>DOB:</label>
                                                <p>12/31/1987</p>
                                            </div>  
                                            <div class="form-fill">
                                                <label>Select Gender:</label>
                                                <p>Male</p>
                                            </div> 
                                            
                                        </div>
                                        <div class="col-sm-1"></div>
                                        
                                        <div class="clr"></div>
                                        <div class="btn-container">
                                            <div class="pull-left">
                                                <button class="btn btn-secondary">Prev</button>
                                            </div>
                                            <div class="pull-right">
                                                <button class="btn btn-primary">Next</button>
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
                                        <div class="form-fill">
                                            <label>Guardian/Authorized Representative Name:</label>
                                            <p>John Doe</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Relation between Guardian/Authorized representative and patient:</label>
                                            <p>Spouse</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-fill">
                                            <label>Emergency contact number:</label>
                                            <p>902-802-9692</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="clr"></div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab6">
                        <div class="patient-form">
                            <div class="form-container">
                                <form>
                                    <div class="col-sm-12">

                                        <div class="form-fill">
                                            <label>Please give details of Medical condition. If none, please state none.:</label>
                                            <p>Pregant</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Please give details of any allergies (including to any drug). If none, please state none:</label>
                                            <p>Egg, Dust</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Please give details of any long term illness or injuries. If none, please state none:</label>
                                            <p>Hypertension</p>
                                        </div>
                                        <div class="form-fill">
                                            <label>Please give details of any regular medication taken. If none, please state none:</label>
                                            <p>Htn Dolo 500</p>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                    
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
                                            </select>
                                <label for="input" class="control-label">Select Speciality:</label><i class="bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" id="pwd" required="required" list="doc" name="docs">
                                <datalist id="doc">
                                    <option value="Andrew Mathew">
                                        <option value="John Mathew">
                                            <option value="Brick Wall">
                                                <option value="Bonebrake">
                                </datalist>
                                <label for="input" class="control-label">Know Your Doctor? Type Doctor Name</label><i class="bar"></i>
                       
                            </div>
                            <div class="form-group">
                                <select>
                                                <option>Initial</option>
                                            </select>
                                <label for="input" class="control-label">Visit Type:</label><i class="bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="date" id="pwd" required="required">
                                <label for="input" class="control-label">Select Date:</label><i class="bar"></i>
                            </div>
    
                        </div>
                        <div class="time-slot">
                            <a href="javascript:;">09:00</a>
                            <a href="javascript:;">09:30</a>
                            <a href="javascript:;">10:00</a>
                            <a href="javascript:;">11:00</a>
                            <a href="javascript:;">12:00</a>
                            <a href="javascript:;" class="disable">13:00</a>
                            <a href="javascript:;">14:00</a>
                            <a href="javascript:;">15:00</a>
                            <a href="javascript:;">16:00</a>
                            <a href="javascript:;">16:40</a>
                            <a href="javascript:;">17:50</a>
                            <a href="javascript:;">18:10</a>
                            <a href="javascript:;">19:00</a>
                            <a href="javascript:;">19:30</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#book-appointment-confirm">Continue</button>
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
                            <label>Visit Type</label>
                            <p>Initial</p>
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
                            <label>
                                <input type="checkbox" checked id="pay-now-check" /><i class="helper"></i> Pay Now
                            </label>
                        </div>
    
                        <div class="payment-container">
                            <br>
                            <p><strong>Select Payment Method </strong></p>
                            <br>
                            <div class="col-sm-4">
                                <div class="form-radio mar-top-sm">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" checked="checked"/><i class="helper"></i>Credit Card
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-4">
                                <div class="form-radio mar-top-sm">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"/><i class="helper"></i>Debit Card
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
                                    <input type="text" id="pwd" required="required">
                                    <label for="input" class="control-label">Card Number:</label><i class="bar"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="pwd" required="required">
                                    <label for="input" class="control-label">Card Holder Name:</label><i class="bar"></i>
                                </div>
    
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group mar-top-sm">
                                    <input type="text" id="pwd" required="required">
                                    <label for="input" class="control-label">CVV</label><i class="bar"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4">
                                <div class="form-group mar-top-sm">
                                    <input type="text" id="pwd" required="required">
                                    <label for="input" class="control-label">Expiry Month</label><i class="bar"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4">
                                <div class="form-group mar-top-sm">
                                    <input type="text" id="pwd" required="required">
                                    <label for="input" class="control-label">Expiry Year</label><i class="bar"></i>
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
