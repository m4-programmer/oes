<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>M4 project || SCHOLARSHIP EXAM </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo' <script>alert("'.@$_GET['w'].'");</script> ';
}
?>



</head>
<body>
	<div class="container-fluid row bg" style="height: 100vh !important;">
		<div class="trans_bg">

			<div class="col-12 text-center logo mt-4" style="color: #fff">
				<h1 style="">Media Mall Scholarship Examination</h1>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<!-- ## -->
				<div class="col-md-4 panel my-auto">
					<form class="form-horizontal" name="form" action="login.php?q=index.php"  method="POST">
		   				<h2 class="text-center">Login Form</h2>
						<fieldset style="margin-top: 30px;">
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-12 control-label" for="name"></label>  
							  <div class="col-md-12">
							  <input id="name" name="name" placeholder="Enter your Login Details" class="form-control input-md" type="text">
							  </div>
							</div>
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-12 control-label" for="password"></label>
							  <div class="col-md-12">
							    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
							  </div>
							</div>
							
							<?php  if (@$_GET['w'])

							{ echo'<p style="color:red;font-size:15px;">'.@$_GET['w']; }

							?>
							<!-- Button -->
							<div class="form-group" style="margin-top: 30px;">
							  <label class="col-md-12 control-label" for=""></label>
							  <div class="col-md-12"> 
							    <input  type="submit" class="sub" value="Login" class="btn btn-primary"/>
							  </div>
							</div>

						</fieldset>
					</form>
				</div><!--col-md-6 end-->
			</div>
		</div>
	</div>

	<!-- <footer class="container-fluid">&copy</footer> -->
</body>