<?php
include ('../officer/includes/officer_header.php');
//echo $_SESSION['p_id'];
?>

	<div class="row">
		<div class="col-sm-offset-3 col-sm-3">
			<div class="tile tile-green">
				<div class="tile-main">
					Register Student
					<span class="fas fa-user-graduate"></span>
				</div>
				<div class="tile-link">
					<a href="std_personal_info_form.php"> Proceed</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="tile tile-blue">
				<div class="tile-main">
					View Students
					<span class="fas fa-clipboard-list"></span>
				</div>
				<div class="tile-link">
					<a href="liststudent.php"> Proceed</a>
				</div>
			</div>
		</div>
	</div>

<!-- <div class="page-header"><h3>Choose the form</h3></div>
<div class="row">
	<div class="col-sm-4">
		<a href="std_personal_info_form.php">Personal Info Form</a>
	</div>
	<div class="col-sm-4">
		<a href="educational_info_form.php">Educational Info Form</a>
	</div>
</div> -->
<?php
include ('../includes/footer.php');
?>