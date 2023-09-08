
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .doctor-img img{
            width: 150px;
            height: 250px;
            object-fit: cover;
            text-align: center;
            border-radius: 10px;
        }
        .content{
            text-align: center;
        }
        </style>
</head>
<body>
    

<section class="section doctors">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h2>Doctors</h2>
						<div class="divider mx-auto my-4"></div>
						<p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque,
							voluptate. Beatae officiis neque </p>
					</div>
				</div>
			</div>

			<div class="col-12 text-center  mb-5">
				<div class="btn-group btn-group-toggle " data-toggle="buttons">
					<label class="btn active ">
						<input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
					</label>
					<label class="btn ">
						<input type="radio" name="shuffle-filter" value="cat1" />Cardiology
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat2" />Dental
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat3" />Neurology
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat4" />Medicine
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat5" />Pediatric
					</label>
					<label class="btn">
						<input type="radio" name="shuffle-filter" value="cat6" />Traumatology
					</label>
				</div>
			</div>

			<div class="row shuffle-wrapper portfolio-gallery">
            <?php
            require_once('Admin/config.php');
            $query= "SELECT * FROM doctor";
            $result = mysqli_query($config,$query);
            while($row= mysqli_fetch_array($result))
             {
         
            ?>
				<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
					data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
					<div class="position-relative doctor-inner-box">
						<div class="doctor-profile">
							<div class="doctor-img">
								<img src="Admin/<?php echo $row['pic'] ?>" alt="doctor-image" class="img-fluid w-100">
							</div>
						</div>
						<div class="content mt-3">
							<h4 class="mb-0"><?php echo '<a href="doctor-profile.php?id=' . $row['docID'] . '">' . $row['addDoc_fname'] . '</a>' ?></h4>
							<p><?php echo $row['addDoc_specialist'] ?></p>
						</div>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</section>


    </body>
</html>