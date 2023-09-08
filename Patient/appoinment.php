<?php
include_once("./header.php");
?>
<?php
include_once("nav_bar.php");
?>


<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Book your Seat</span>
                    <h1 class="text-capitalize mb-5 text-lg">appointment</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appointment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">Call for an Emergency Service!</span>
                    <h2 class="text-color mt-3">+84 789 1256 </h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Book an appointment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit
                        . Iste dolorum atque similique praesentium soluta.</p>

						<form id="#" class="appointment-form" method="POST" 
						action="./appointmentQuery.php">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="app_specialist" class="form-control" id="specialist">
									<option>Select Specialist</option>
									
									<?php
									include_once("./config.php");
									$result = mysqli_query($config, "SELECT DISTINCT addDoc_specialist FROM doctor ORDER BY addDoc_specialist ASC");									
									while ($row = mysqli_fetch_array($result)) {
										echo "<option value='" . $row['addDoc_specialist'] . "'>" . $row['addDoc_specialist'] . "</option>";
									}
									
									?>

                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-6">
							<div class="form-group">
								<select class="form-control" name="app_doctor" id="fname">
								<option value="">Select Doctor</option>
								</select>
							</div>
							</div>
                            <!--  -->
					

                            <div class="col-lg-6">
                                <div class="form-group">
								<select class="form-control" name="app_available" id="availability">
								<option value="">Availability</option>
								</select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="app_date" id="time" type="date" class="form-control" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="app_patient" id="name" type="text" class="form-control"
                                        placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="app_number" id="phone" type="Number" class="form-control"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="app_message" id="message" class="form-control" rows="6"
                                placeholder="Your Message"></textarea>
                        </div>
                        <input name="submitAppointment" type="submit" class="btn btn-main btn-round-full" value="Make appointment">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php
include_once("./footer.php");
?>

<?php
include_once("appoint_script.php");
?>

