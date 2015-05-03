<?php
if($_POST["message"]) {
    mail("gans220@gmail.com", "Form to email message", $_POST["message"], "From: uhp@supportivecities.com");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	
	<style type="text/css">
		textarea{
			
			margin-top:40px;
			margin-left:15px;
			
		}
		body{
			
			width:100%;
			height:100%;
			font-family: "Source Sans Pro";
			position:relative;
		}
		
		h2{
			
			margin: 1em auto;
			
		}
		
		.control-label{
			font-size: 1.5em;
			vertical-align: center;
			padding-top: 0 !important;
			font-weight: 100;
		}
		
		.form-control:focus {
			border-color: #F5A623;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(245, 166, 35, 0.6);
		}
		
		.formBanner{
			height:100%
			width:100%;
			background-image:url('images/map.jpg');
			background-size:cover;
			background-position: center;
			background-repeat: no-repeat;
			position:relative;
		}
		
		.overlay{
			background:rgba(253,251,223,0.8);
			position: relative;
			width: 100%;
			height: 100%;
		}
		
		.formBanner h2{
			color: #F5A623;
			height: 100%;
			margin: 0 auto;
			text-align: center;
			padding:15%;
			font-size: 5em;
		}
		form{
			
			margin-top: 3em;
			
		}
		
		.row{
			
			margin:0;
			
		}
	</style>
	
</head>
<body>

	<div class="formBanner">
		<div class="overlay">
			<h2>UHP Fellowship Application</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			<form method="post" action="form.php" class="form-horizontal">
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputEmail" placeholder="What's your name??!">
						</div>
					</div>
						
					<div class="form-group">
						<label for="inputAge" class="col-sm-2 control-label">Age</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputAge" placeholder="Age?? :/">
						</div>
					</div>
						
					<div class="form-group">
						<label for="checkboxGroup" class="col-sm-2 control-label" >Are you a</label>
						<div class="checkbox col-sm-5">
							<label><input type="checkbox" value="Journalist">Journalist or Freelance Writer</label>
						</div>
						<div class="checkbox col-sm-10 col-sm-offset-2">
							<label><input type="checkbox" value="Academic">Academic</label>
						</div>
						<div class="checkbox col-sm-10 col-sm-offset-2">
							<label><input type="checkbox" value="Photographer" >Photographer</label>
						</div>
						<div class="checkbox col-sm-10 col-sm-offset-2">
							<label><input type="checkbox" value="Cinematographer" >Cinematographer</label>
						</div>
						<div class="checkbox col-sm-10 col-sm-offset-2">
							<label><input type="checkbox" value="Others" >Others</label>
							<input id="othersText" type="textarea">
						</div>						
					</div>
						
					<div class="form-group">
						<label class="col-sm-12 control-label question" style="text-align:left;">What do you want to explore?</label>
						<textarea id="explore" class="answer form-control" rows="5" cols="70"></textarea>
					</div>
						
					<div class="form-group">
						<label class="col-sm-12 control-label question" style="text-align:left;">What makes you the right person to explore this project?</label>
						<textarea id="rightPerson" class="answer form-control" rows="5" cols="70"></textarea>
					</div>
						
					<div class="form-group">
						<label class="col-sm-12 control-label question" style="text-align:left;">Have you done any work in this area before?</label>
						<textarea id="prevExp" class="answer form-control" rows="5" cols="70"></textarea>
					</div>
						
					<div class="form-group">
						<label class="col-sm-12 control-label question" style="text-align:left;">What kind of collaborations would you benefit from?</label>
						<textarea id="benefit" class="answer form-control" rows="5" cols="70"></textarea>
					</div>
						
					<div class="col-sm-12 applyButtonContainer" style="text-align:left;">
						<input type="submit" value="Apply Now" class="btn btn-primary applyButton" />
					</div>
			</form>
		</div>
	</div>
</body>
</html>