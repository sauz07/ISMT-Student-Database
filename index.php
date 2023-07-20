<?php
include ('./includes/header.php');
?>
<div class="row">
	<div class="col-sm-6">
		<div class="page-header"><h3>Welcome to the system</h3></div>
		<p>This is simply a Student Database System of Department of Informational Technology. It contains every information of students studying and teachers working on the department.</p>
		<p>Please login below to commence further:</p>
		<br />
		<form class="login" action="./controller/login_controller.php" method="POST">
        <div class="form-group">
         <label for="username"><h4>Enter the Username</h4></label>
         <input id="username" class="form-control" type="text" name="username" placeholder="Your Username" required>
        </div>

        <div class="form-group">
         <label for="password"><h4>Enter the Password</h4></label>
         <input id="password"  class="form-control" type="password" name="password" placeholder="Your Password" required>
        </div>

        <button type="submit" class="center-block btn btn-primary" value="Login">Login</button>
  	  	</form>
	</div>
	<div class="col-sm-6">
		<div class="page-header"><h3>Quick Links</h3></div>
			<ul class="list-group">
			    <li class="list-group-item list-group-item-info"><h4><a href="https://ismt.edu.au"><strong>ISMT College</strong></a></h4></li>
			    <li class="list-group-item list-group-item-info"><h4><a href=""><strong>Department of Information Technology</strong></a></h4></li>
			    <li class="list-group-item list-group-item-info"><h4><a href="https://ismt.edu.au/contact/"><strong>Contacts for staffs and students</strong></a></h4></li>
			</ul>
	</div>
</div>

<?php
include ('./includes/footer.php');
?>
