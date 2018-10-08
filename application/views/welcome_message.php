<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Administration HealthyDiet</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="style/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="style/animate.min.css" rel="stylesheet"/>

	<!--  Paper Dashboard core CSS    -->
	<link href="style/paper-dashboard.css" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="style/demo.css" rel="stylesheet" />


	<!--  Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="style/themify-icons.css" rel="stylesheet">

</head>
<body>

	<div class="wrapper">
		<div class="card">
			<div class="header">
				<h4 class="title">Login</h4>
			</div>
			<div class="content">
				<form>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control border-input" placeholder="Username" value="michael23">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control border-input" placeholder="Password" >
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-info btn-fill btn-wd">Iniciar Sessão</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
