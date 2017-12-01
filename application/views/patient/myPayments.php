<?php
?>

    <div class="container main-container">


        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Due Amount</th>
                    <th>Paid Amount</th>
                    <th>Transaction</th>
                    <th>Date</th>
                    <th>Payment Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>$90</td>
                    <td>$30</td>
                    <td>92823929834</td>
                    <td>11/15/2017</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>$234</td>
                    <td>$100</td>
                    <td>92823929834</td>
                    <td>08/10/2017</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>$117</td>
                    <td>$100</td>
                    <td>92823929834</td>
                    <td>05/10/2017</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>$237</td>
                    <td>$167</td>
                    <td>92823929834</td>
                    <td>04/01/2017</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>$259</td>
                    <td>$200</td>
                    <td>92823929834</td>
                    <td>02/01/2017</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>$279</td>
                    <td>$250</td>
                    <td>92823929834</td>
                    <td>11/15/2016</td>
                    <td>Paid</td>
                </tr>

		<tr>
                    <td>6</td>
                    <td>$279</td>
                    <td>$250</td>
                    <td>92823929834</td>
                    <td>11/15/2016</td>
                    <td>Paid</td>
                </tr>

		<tr>
                    <td>7</td>
                    <td>$108</td>
                    <td>$78</td>
                    <td>92823929834</td>
                    <td>08/10/2016</td>
                    <td>Paid</td>
                </tr>

		<tr>
                    <td>8</td>
                    <td>$252</td>
                    <td>$230</td>
                    <td>92823929834</td>
                    <td>05/10/2016</td>
                    <td>Paid</td>
                </tr>
		<tr>
                    <td>8</td>
                    <td>$111</td>
                    <td>$75</td>
                    <td>92823929834</td>
                    <td>04/01/2016</td>
                    <td>Paid</td>
                </tr>
            </tbody>
        </table>


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
                                                <option>Obstetrics and gynaecology</option>
						<option>Cardiology</option>
						<option>Nephrology</option>
						<option>Internal Medicine</option>
						<option>Neurology</option>
						<option>gynaecology</option>
						<option>Family Medicine</option>
						<option>Neonatal-Perinatal Medicine</option>
						<option>Pediatric Critical Care Medicine</option>
						<option>Pediatric Surgery</option>
						<option>Surgery</option>
                                            </select>
                                <label for="input" class="control-label">Select Speciality:</label><i class="bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" id="pwd" required="required" list="doc" name="docs">
                                <datalist id="doc">
                                    <option value="Thomas Cook">
				    	<option value="Tracy Sutherland">
                                       		 <option value="Mathew K Koshey">
                                            		<option value="Anil Sundharam">
                                                		<option value="Rebecca Sands">
									<option value="Dan Greenberg">
										<option value="Tom watson">
											<option value="Todd Brown">
												<option value="April stewert">
                                </datalist>
                                <label for="input" class="control-label">Know Your Doctor? Type Doctor Name</label><i class="bar"></i>
                          
                            </div>
                             <div class="form-group">
                                <select>
                                                <option>Initial</option>
						<option>Follow up</option>
						<option>Pre Operative</option>
						<option>Post Operative</option>
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
                            <a href="javascript:;">10:30</a>
                            <a href="javascript:;">11:00</a>
                            <a href="javascript:;">11:30</a>
                            <a href="javascript:;">12:00</a>
                            <a href="javascript:;">12:30</a>
                            <a href="javascript:;" class="disable">13:00</a>
                            <a href="javascript:;">14:00</a>
                            <a href="javascript:;">14:30</a>
                            <a href="javascript:;">15:00</a>
                            <a href="javascript:;">15:30</a>
                            <a href="javascript:;">16:00</a>
                            <a href="javascript:;">16:30</a>
                            <a href="javascript:;">17:00</a>
                            <a href="javascript:;">17:30</a>
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
                                <p>Obstetrics and gynaecology</p>
                            </div>
                            <div class="form-fill">
                            <label>Visit Type</label>
                            <p>Follow up</p>
                        </div>
                            <div class="form-fill">
                                <label>Doctor</label>
                                <p>Thomas Cook</p>
                            </div>
                            <div class="form-fill">
                                <label>Date</label>
                                <p>11/17/2017</p>
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
