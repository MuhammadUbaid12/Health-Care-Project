<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:support@gmail.com"><i
										class="icofont-support-faq mr-2"></i>support@Care.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New
								York, USA </li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+23-345-67890">
								<span>Call Now : </span>
								<span class="h4">823-4565-13456</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<h3>
                    <?php

                    if (isset($_SESSION['patientDetails'])) {
                        $p_fname = $_SESSION['patientDetails']['p_fname'];
                        $p_lname = $_SESSION['patientDetails']['p_lname'];                        
                        echo "$p_fname ";
                        echo "$p_lname";
                    }
                     else {
                        echo "Patient details not found";
                    }
                    ?>
                    </h3>
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="../about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="../Disease.php">Diseases</a></li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="department.php" id="dropdown02"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i
									class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown02">
								<li><a class="dropdown-item" href="../department.php">Departments</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="doctor.php" id="dropdown03"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i
									class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="../doctor.php">Doctors</a></li>
								<li><a class="dropdown-item" href="appoinment.php">Appoinment</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="showAppointment.php"> Appointments</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="logoutPatient.php">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>