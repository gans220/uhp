<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Fellowship Application</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css" media="all" />
</head>
<body>
	
	<div class="banner" id="apply">
		<div class="appbannerImage">
			<div class="bannerHeading">
				<h1>Apply</h1>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class='justified'>The UHP Fellowship seeks to provide enthusiastic individuals with the editorial and technical support needed to execute innovative projects capturing the transformation of our urban spaces. </p>
					<p class='justified'>UHP is interested in all forms of storytelling - audio, video, image, data and text. We expect our fellows to be proficient in at least one of these areas so that they can optimally collaborate with their peers. If you have a complex story to tell about the City and a vision to utilize the potential of new media tools, please apply to be a UHP fellow through the form below.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>UHP Fellowship Application</h2>
					<form method="get" action="" class="form-horizontal">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="What's your name??!">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputAge" class="col-sm-2 control-label">Age</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputAge" placeholder="Age??">
							</div>
						</div>
						
						<div class="form-group">
							<label for="checkboxGroup" class="col-sm-2 control-label" >Are you a</label>
							<div class="checkbox col-sm-5">
								<label><input type="checkbox" value="">Journalist or Freelance Writer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="">Academic</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Photographer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Cinematographer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Others</label>
								<input id="othersText" type="textarea" value="" >
							</div>						
						</div>
						
						<div class="form-group">
							<label class="col-sm-4 control-label question">What do you want to explore?</label>
							<textarea id="explore" class="col-sm-offset-2 answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">What makes you the right person to explore this project?</label>
							<textarea id="rightPerson" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">Have you done any work in this area before?</label>
							<textarea id="prevExp" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">What kind of collaborations would you benefit from?</label>
							<textarea id="benefit" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="col-sm-12 applyButtonContainer">
							<input type="submit" value="Apply Now" class="btn btn-primary applyButton" />
						</div>
					</form>
				</div>
			</div>
			
		</div>		
	</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>

<!--
<div class="banner" id="apply">
		<div class="appbannerImage">
			<div class="bannerHeading">
				<h1>Apply</h1>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class='justified'>The UHP Fellowship seeks to provide enthusiastic individuals with the editorial and technical support needed to execute innovative projects capturing the transformation of our urban spaces. </p>
					<p class='justified'>UHP is interested in all forms of storytelling - audio, video, image, data and text. We expect our fellows to be proficient in at least one of these areas so that they can optimally collaborate with their peers. If you have a complex story to tell about the City and a vision to utilize the potential of new media tools, please apply to be a UHP fellow through the form below.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>UHP Fellowship Application</h2>
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="What's your name??!">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputAge" class="col-sm-2 control-label">Age</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputAge" placeholder="Age??">
							</div>
						</div>
						
						<div class="form-group">
							<label for="checkboxGroup" class="col-sm-2 control-label" >Are you a</label>
							<div class="checkbox col-sm-5">
								<label><input type="checkbox" value="">Journalist or Freelance Writer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="">Academic</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Photographer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Cinematographer</label>
							</div>
							<div class="checkbox col-sm-10 col-sm-offset-2">
								<label><input type="checkbox" value="" >Others</label>
								<input id="othersText" type="textarea" value="" >
							</div>						
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">What do you want to explore?</label>
							<textarea id="explore" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">What makes you the right person to explore this project?</label>
							<textarea id="rightPerson" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">Have you done any work in this area before?</label>
							<textarea id="prevExp" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 control-label question">What kind of collaborations would you benefit from?</label>
							<textarea id="benefit" class="answer form-control" rows="10" cols="70"></textarea>
						</div>
						
						<div class="col-sm-12 applyButtonContainer">
							<input type="submit" value="Apply Now" class="btn btn-primary applyButton" />
						</div>
					</form>
				</div>
			</div>
			
		</div>		
	</div>-->