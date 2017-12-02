<?php
?>
<div class="form-outer">
    <div class="form-left pull-left">
        <div class="parent-logo">
            <img src="http://localhost/public/images/parent-logo.png" alt="">
        </div>
    </div>
    <div class="form-right pull-right register-right">
        <h3 class="font-weight-normal">Create Your Account</h3>
        <div class="form-container">
          <form action="../user/create" id="accountForm" method="POST">
                <div class="form-group">
                    <input type="text" id="fName" name="fName" required="required">
                    <label for="input" class="control-label">First Name:</label><i class="bar"></i>
                </div>
                
                <input type="hidden" id="user" name="user" value="patient" required="required">
                <div class="form-group">
                    <input type="text" id="lName" name="lName" required="required">
                    <label for="input" class="control-label">Last Name:</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="text" id="dob" name="dob" required="required">
                    <label for="input" class="control-label">DOB</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <select name="gender" "id="gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <label class="control-label" for="select">Select Gender</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="text" id="email"  name="email" required="required">
                    <label for="input" class="control-label">Email address:</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="password" id="pwd" name="pwd" required="required">
                    <label for="pwd" for="input" class="control-label">Password:</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="password" id="rpwd" name="rpwd" required="required">
                    <label for="pwd" for="input" class="control-label">Re-type Password:</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="number" id="phone" name="phone" required="required">
                    <label for="input" class="control-label">Phone Number:</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <select name="state" id="state">
                        <option>Ontario</option>
                        <option>Quebec</option>
                        <option>British Columbia</option>
                        <option>Alberta</option>
                        <option>Nova Scotia</option>
                        <option>Newfoundland and Labrador</option>
                        <option>Saskatchewen</option>
                        <option>Manitoba</option>
                        <option>New Brunswick</option>
                        <option>Prince Edward Island</option>
                    </select>
                    <label class="control-label" for="select">Select Province/State</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <select name="city" id="city">
                        <option>Hamilton</option>
                        <option>Toronto</option>
                        <option>Ottawa</option>
                    </select>
                    <label class="control-label" for="select">Select City</label><i class="bar"></i>
                </div>


				<div id="loginButton" class="button-container">
					<INPUT  class="btn btn-block btn-primary"  type="submit" value="Register">
				</div>

                <div class="form-options">
                    <a href="../user/login" class="pull-left">Already Registered? Login</a>
                </div>

            </form>
        </div>
    </div>
</div>