<?php
include ('../officer/includes/officer_header.php');
?>
<body>
	<form name="std_form" method="POST" action="educational_info_form_controller.php">
		<div class="form-group">
			<i>Fields marked as ' <font color="red">*</font>' are <u>mandatory to fill</u>.</i>
			<div class="page-header">
				<h3>Educational Information</h3>
			</div>
			<h4>School Level OR equivalent :</h4>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Examination</label>
						<input type="text" class="form-control" name="s_institute" value="" placeholder="student examination board" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Board:</label>
						<input type="text" class="form-control" name="s_examination_board" value="" placeholder="Board or control of examination" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Year:</label>
						<input type="text" class="form-control" name="s_exam_year" value="" placeholder="year of examination" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Aggregate Mark:</label>
						<input type="text" class="form-control" name="s_aggregate" value="" placeholder="Aggregate mark" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Roll no:</label>
						<input type="text" class="form-control" name="s_roll" value="" placeholder="examination roll number" required>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<h4>Higher Secondary Level Or equvalent:</h4>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Examination:</label>
						<input type="text" class="form-control" name="h_institute" value="" placeholder="Name of institute" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Board:</label>
						<input type="text" class="form-control" name="h_examination_board" value="" placeholder="Board or control of examination" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Year:</label>
						<input type="text" class="form-control" name="h_exam_year" value="" placeholder="year of examination" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Aggregate Mark(%):</label>
						<input type="text" class="form-control" name="h_aggregate" value="" placeholder="Aggregate mark" required>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Roll no:</label>
						<input type="text" class="form-control" name="h_roll" value="" placeholder="examination roll number" required>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<h4>Please Specify any graduation if he/she awarded:</h4>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Level :</label>
						<input type="level" class="form-control" name="std_Label" value="" placeholder="Enter level / type of graduation">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Institute:</label>
						<input type="text" class="form-control" name="o_institute" value="" placeholder="student examination board">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Board:</label>
						<input type="text" class="form-control" name="examinatio_board" value="" placeholder="Board or control of examination">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Year:</label>
						<input type="text" class="form-control" name="std_exam_year" value="" placeholder="year of examination">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Aggregate Mark(%):</label>
						<input type="text" class="form-control" name="aggregate" value="" placeholder="Aggregate mark">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">Roll no:</label>
						<input type="text" class="form-control" name="std_exam_roll" value="" placeholder="examination roll number">
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-success" name="submit" value="Save" >
			<input type="reset" class="btn btn-info" name="clear" value="Clear">
			<input type="button" class="btn btn-warning" name="cancel" value="Cancel">
		</form>
	</div>
	<?php
	include ('../includes/footer.php');
	?>