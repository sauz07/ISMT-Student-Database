<?php
include ('../officer/includes/officer_header.php');
?>
<form name="std_form" method="POST" action="ku_cat_info_controller.php">
	<div class="form-group">
		<i>Fields marked as '<font color="red">*</font>' are <u>mandatory to fill</u>.</i>
		<div class="page-header">
			<h3>ISMT Test Information</h3>
		</div>
		<h4>ISMT Test Information :</h4>
		<div class="row">
			<div class="col-sm-4">
				<label class="control-label">Std ID:</label>
				<input type="text" class="form-control" name="ku_cat_id" value="" placeholder="Std id" required>
			</div>
			<div class="col-sm-4">
				<label class="control-label">Total Obtain Marks:</label>
				<input type="text" class="form-control" name="ku_cat_total" value="" placeholder="Total marks obtain in ISMT test" required>
			</div>
			<div class="col-sm-4">
				<label class="control-label">Rank:</label>
				<input type="text" class="form-control" name="rank" value="" placeholder="ISMT Rank" required>
			</div>
		</div>
		<h4>Marks Detail:</h4>
		<div class="row">
			<div class="col-sm-4">
				<label class="control-label">Software:</label>
				<input type="text" class="form-control" name="physics" value="" placeholder="Marks obtain in Software" required>
			</div>
			<div class="col-sm-4">
				<label class="control-label">Database:</label>
				<input type="text" class="form-control" name="chemistry" value="" placeholder="Marks obtain in Database" required>
			</div>
			<div class="col-sm-4">
				<label class="control-label">Networking:</label>
				<input type="text" class="form-control" name="math" value="" placeholder="Marks obtain in Networking" required>
			</div>
		</div>
		<br>
		<input type="submit" class="btn btn-success" name="submit" value="save" >
		<input type="reset" class="btn btn-info" name="clear" value="clear">
		<input type="button" class="btn btn-warning" name="cancel" value="cancel">
		
	</form>
</div>
<?php
include ('../includes/footer.php');
?>