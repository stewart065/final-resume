<?php

        require_once "connection.php";
        session_start();

        if(!isset($_SESSION['uname'])){
            header('location:index.php');
         }
        if($_GET){

            
            $cpmy = $_GET['Comapny'];
            $pstn = $_GET['Position'];
            $yr = $_GET['Year'];
            $eprc = $_GET['Experience'];
           

            $sql="INSERT INTO `expr`(`ComapnyName`, `Position`, `YearMonth`, `Experience`) VALUES ('$cpmy','$pstn','$yr','$eprc')";
            $res =$con->query($sql);
                if($res)
                        header("Location:resume.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>exp ADD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    
<center>

	<div class="container">
		<div class="row gutters">
			<form action="" method="GET">
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="card h-100">
						<div class="card-body">
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Experience</h6>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Comapny Name</label>
										<input type="name"  class="form-control" id="Comapny" name="Comapny" placeholder="Enter Comapny Name" value="">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Position</label>
										<input type="name"  class="form-control" id="Comapny" name="Position" placeholder="Enter Position" value="">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Year&Month</label>
										<input type="date"  class="form-control" id="Comapny" name="Year" placeholder="Enter Comapny Name" value="">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Experience</label>
										<input type="name"  class="form-control" id="Comapny" name="Experience" placeholder="Enter Comapny Name" value="">
									</div>
							</div>
							
							
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="text-right">
										<a type="button" id="submit" href="resume.php"name="submit" class="btn btn-secondary">Cancel</a>
									
										<button type="submit" class="btn btn-success">SAVE</button>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div> 
			</div>
		</div>
	
	</form>
</center>

<style>
            body{margin-top:20px;
            color: #bcd0f7;
                background: #1A233A;
            }
            .account-settings .user-profile {
                margin: 0 0 1rem 0;
                padding-bottom: 1rem;
                text-align: center;
            }
            .account-settings .user-profile .user-avatar {
                margin: 0 0 1rem 0;
            }
            .account-settings .user-profile .user-avatar img {
                width: 90px;
                height: 90px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }
            .account-settings .user-profile h5.user-name {
                margin: 0 0 0.5rem 0;
            }
            .account-settings .user-profile h6.user-email {
                margin: 0;
                font-size: 0.8rem;
                font-weight: 400;
            }
            .account-settings .about {
                margin: 1rem 0 0 0;
                font-size: 0.8rem;
                text-align: center;
            }
            .card {
                background: #272E48;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 0;
                margin-bottom: 1rem;
            }
            .form-control {
                border: 1px solid #596280;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                font-size: .825rem;
                background: #1A233A;
                color: #bcd0f7;
            }

</style>
</body>
<script type="text/javascript"> </script>
</html>
