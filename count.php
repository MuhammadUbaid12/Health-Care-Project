<?php
include_once("Admin/config.php");
	$query = "SELECT count(docID) as total_doc  from doctor";
	$result = mysqli_query($config, $query);
	$doc = mysqli_fetch_array($result);

	$query = "SELECT count(dID) as total_depart from department";
	$result = mysqli_query($config, $query);
	$dept = mysqli_fetch_array($result);

	$query = "SELECT count(id) as total_patient from patient_details";
	$result = mysqli_query($config, $query);
	$patient = mysqli_fetch_array($result);
?>
<section class="cta-section">
		<div class="container">
			<div class="cta position-relative">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-doctor"></i>
							<span class="h3"><?php echo $doc['total_doc']; ?></span>
							<p>Doctors</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-flag"></i>
							<span class="h3"><?php echo $dept['total_depart']; ?></span>+
							<p>Department</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-badge"></i>
							<span class="h3"><?php echo $patient['total_patient']; ?></span>+
							<p>Patients</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>