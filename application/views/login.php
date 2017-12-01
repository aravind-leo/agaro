<?php

?>
<div class="form-outer">
<div class="form-left pull-left">
<div class="parent-logo">
<img src="http://localhost/public/images/parent-logo.png" alt="">
</div>
</div>
<div class="form-right pull-right">
<h3 class="font-weight-normal">Access Your Account</h3>
<div class="form-container">
			<form action="../user/authentication" id="loginForm" method="POST">
<div class="form-group">
<input type="text" id="email" name="email" required="required">
<label for="input" class="control-label">Email address:</label><i class="bar"></i>
</div>
<div class="form-group">
<input type="password" id="password" name="password" required="required">
<label for="pwd" for="input" class="control-label">Password:</label><i class="bar"></i>
</div>
<div class="checkbox">
<label>
<input type="checkbox"/><i class="helper"></i> Remember me
</label>
</div>
				<div id="loginButton" class="button-container">
					<INPUT  class="btn btn-block btn-primary"  type="submit" value="Login">
				</div>
<div class="form-options">
<a href="javascript:;" class="pull-left">Forgot Password ?</a>
<a href="../user/register" class="pull-right">Create Your Account</a>
</div>

</form>
</div>
</div>
</div>