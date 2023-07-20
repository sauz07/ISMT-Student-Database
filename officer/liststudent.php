<?php
include ('../officer/includes/officer_header.php');
include_once '../includes/mysql_connect.php';
error_reporting(0);
?>
<div class="row">
	<div class="col-sm-6 pull-right">
		<input type="text" class="form-control" id="filter" placeholder="Search name or ID">
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="col-sm-12">
		<?php
		$sql = $db->query("select * from personal_info where personal_id in (select registration_id from student_info)");
		$c=0;
		while($res = $sql->fetch_object())
		{
			$c++;
		?>
		<div class="panel panel-info list-student-names">
			<div class="panel-heading">
				<h4 class="panel-title" data-toggle="collapse" data-target="#collapse<?php echo $c; ?>">
				<?php echo $res->personal_id." - ".$res->first_name." ".$res->middle_name." ".$res->last_name ?>
				</h4>
			</div>
			<div id="collapse<?php echo $c; ?>" class="panel-collapse collapse">
				<div class="panel-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home<?php echo $res->personal_id; ?>" aria-controls="home" role="tab" data-toggle="tab">Basic Info</a></li>
						<li role="presentation"><a href="#profile<?php echo $res->personal_id; ?>" aria-controls="profile" role="tab" data-toggle="tab">Address</a></li>
						<li role="presentation"><a href="#messages<?php echo $res->personal_id; ?>" aria-controls="messages" role="tab" data-toggle="tab">Contact</a></li>
						<li role="presentation"><a href="#settings<?php echo $res->personal_id; ?>" aria-controls="settings" role="tab" data-toggle="tab">Education</a></li>
						<li role="presentation"><a href="#KU_CAT<?php echo $res->personal_id; ?>" aria-controls="KU_CAT" role="tab" data-toggle="tab">Test Information</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active form-horizontal" id="home<?php echo $res->personal_id; ?>">
							<div class="col-sm-6">
								<label class="control-label">Registration Number</label>
								<div class="form-control"><?php echo $res->personal_id ?></div>
							</div>
							<div class="col-sm-6">
								<label class="control-label">Citizenship No</label>
								<div class="form-control"><?php echo $res->citizenship_number ?></div>
							</div>
							<div class="col-sm-4">
								<label class="control-label">First Name:</label>
								<div class="form-control"><?php echo $res->first_name ?></div>
							</div>
							<div class="col-sm-4">
								<label class="control-label">Middle Name:</label>
								<div class="form-control"><?php echo $res->middle_name ?></div>
							</div>
							<div class="col-sm-4">
								<label class="control-label">Last Name:</label>
								<div class="form-control"><?php echo $res->last_name ?></div>
							</div>
							
							<div class="col-sm-4">
								<label class="control-label">Gender:</label>
								<div class="form-control"><?php echo $res->gender ?></div>
							</div>
							<div class="col-sm-4">
								<label class="control-label">Date of Birth (A.D.):</label>
								<div class="form-control"><?php echo $res->dob_ad ?></div>
							</div>
							<div class="col-sm-4">
								<label class="control-label">Date of Birth (B.S.)</label>
								<div class="form-control"><?php echo $res->dob_bs ?></div>
							</div>
							<div class="col-sm-4">
								<label for="birth_town">Birth Town:</label>
								<div class="form-control"><?php echo $res->birth_town ?></div>
							</div>
							<div class="col-sm-4">
								<label for="birth_district">Birth District:</label>
								<div class="form-control"><?php echo $res->birth_district ?></div>
							</div>
							<div class="col-sm-4">
								<label for="birth_country">Birth Country:</label>
								<div class="form-control"><?php echo $res->birth_country ?></div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane form-horizontal" id="profile<?php echo $res->personal_id; ?>">
							<h4>Permanent Address:</h4>
							
							<div class="col-sm-3">
								<label for="permanent_address_town">Town:</label>
								<div class="form-control"><?php echo $res->permanent_address_town ?></div>
							</div>
							<div class="col-sm-3">
								<label for="permanent_address_district">District:</label>
								<div class="form-control"><?php echo $res->permanent_address_district ?></div>
							</div>
							<div class="col-sm-3">
								<label for="permanent_address_country">Country:</label>
								<div class="form-control"><?php echo $res->permanent_address_country ?></div>
							</div>
							<div class="col-sm-3">
								<label for="permanent_address_contact">Contact:</label>
								<div class="form-control"><?php echo $res->permanent_address_contact ?></div>
							</div>
							
							<h4>Temporary Address:</h4>
							
							<div class="col-sm-3">
								<label for="temporary_address_town">Town:</label>
								<div class="form-control"><?php echo $res->temporary_address_town ?></div>
							</div>
							<div class="col-sm-3">
								<label for="temporary_address_district">District:</label>
								<div class="form-control"><?php echo $res->temporary_address_district ?></div>
							</div>
							<div class="col-sm-3">
								<label for="temporary_address_country">Country:</label>
								<div class="form-control"><?php echo $res->temporary_address_country ?></div>
							</div>
							<div class="col-sm-3">
								<label for="temporary_address_contact">Contact:</label>
								<div class="form-control"><?php echo $res->temporary_address_contact ?></div>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane" id="messages<?php echo $res->personal_id; ?>">
							<div class="col-sm-4">
								<label for="personal_contact_email">E-mail Address:</label>
								<div class="form-control"><?php echo $res->personal_contact_email ?></div>
							</div>
							<div class="col-sm-4">
								<label for="personal_contact_phone">Phone Number:</label>
								<div class="form-control"><?php echo $res->personal_contact_phone ?></div>
							</div>
							<div class="col-sm-4">
								<label for="personal_contact_mobile">Mobile Number:</label>
								<div class="form-control"><?php echo $res->personal_contact_mobile ?></div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $res->personal_id; ?>">
							<?php
							$getEdu = $db->query("select * from educational_background_info where personal_id = '".$res->personal_id."'");
							$setEdu = $getEdu->fetch_object();
							?>
							<h4>School Level OR equivalent :</h4>
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Examination:</label>
									<div class="form-control"><?php echo $setEdu->s_examination ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Board:</label>
									<div class="form-control"><?php echo $setEdu->s_institute ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Year:</label>
									<div class="form-control"><?php echo $setEdu->s_exam_year ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Aggregate Mark:</label>
									<div class="form-control"><?php echo $setEdu->s_aggrigrate_marks ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Roll no:</label>
									<div class="form-control"><?php echo $setEdu->s_exam_roll ?></div>
								</div>
							</div>
							<div class="clearfix"></div>
							<h4>Higher Secondary Level Or equvalent:</h4>
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Examination:</label>
									<div class="form-control"><?php echo $setEdu->h_examination ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Board:</label>
									<div class="form-control"><?php echo $setEdu->h_institute ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Year:</label>
									<div class="form-control"><?php echo $setEdu->h_exam_year ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Aggregate Mark:</label>
									<div class="form-control"><?php echo $setEdu->h_aggrigrate_marks ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Roll no:</label>
									<div class="form-control"><?php echo $setEdu->h_exam_roll ?></div>
								</div>
							</div>
							<div class="clearfix"></div>
							<h4>Please Specify any graduation if he/she awarded:</h4>
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Examination:</label>
									<div class="form-control"><?php echo $setEdu->o_examination ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Board:</label>
									<div class="form-control"><?php echo $setEdu->o_institute ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Year:</label>
									<div class="form-control"><?php echo $setEdu->o_exam_year ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Aggregate Mark:</label>
									<div class="form-control"><?php echo $setEdu->o_aggrigrate_marks ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Roll no:</label>
									<div class="form-control"><?php echo $setEdu->o_exam_roll ?></div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="KU_CAT<?php echo $res->personal_id; ?>">
							<?php
							$getKUCAT = $db->query("select * from ku_cat where personal_id = '".$res->personal_id."'");
							$setKUCAT = $getKUCAT->fetch_object();
							?>
							<h4>TBC Test Information :</h4>
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Std ID:</label>
									<div class="form-control"><?php echo $setKUCAT->ku_cat_id ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Total Obtain Marks:</label>
									<div class="form-control"><?php echo $setKUCAT->ku_cat_score ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Rank:</label>
									<div class="form-control"><?php echo $setKUCAT->ku_cat_rank ?></div>
								</div>
							</div>
							<h4>Marks Detail:</h4>
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Software:</label>
									<div class="form-control"><?php echo $setKUCAT->physics ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Database:</label>
									<div class="form-control"><?php echo $setKUCAT->chemistry ?></div>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Networking:</label>
									<div class="form-control"><?php echo $setKUCAT->math ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<div id="noitem"><p>Search did not match</p></div>
	</div>
</div>
<?php
include ('../includes/footer.php');
?>
<script type="text/javascript">
	$(function(){
		$('#noitem').hide();
		$("#filter").keyup(function() {

      // Retrieve the input field text and reset the count to zero
      var filter = $(this).val(),
        count = 0;

      // Loop through the comment list
      $('.panel .panel-heading h4.panel-title').each(function() {


        // If the list item does not contain the text phrase fade it out
        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
          $(this).parent().parent().hide();  // MY CHANGE
          $('#noitem').show();

          // Show the list item if the phrase matches and increase the count by 1
        } else {
          $(this).parent().parent().show(); // MY CHANGE
          $('#noitem').hide();
          count++;
        }

      });

    });
	})
</script>