<?php 
if (isset($_POST['submit'])) {
	echo "form submitted";
	// form 1
	echo $surname = $_POST['surname'];
	echo $fname = $_POST['fname'];
	$m_name = $_POST['m_name'];
	echo $dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$sta_ori = $_POST['s_o_or'];
	$lga = $_POST['lga'];
	$hometown = $_POST['hometown'];
	$per_address = $_POST["per_address"];
	$mobile = $_POST['mobile'];
	$cont_address = $_POST['cont_address'];
	$blood = $_POST['blood'];
	$genotype = $_POST['genotype'];
	$religion = $_POST['religion'];
	$email = $_POST['email'];
	//form data 2

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.divide{
			border-bottom: 5px solid black;
		}
		select{
	width:100%;
    padding: 5px 8px;
   
    border: 2px solid #ccc;
    border-radius:4px;
    background-color:#fff;
}
	</style>
</head>
<body>
<div class='container' >
		<center><h2 style="font-size: bold;text-transform: uppercase;"><b>Emergency Ward Information System</b></h2></center><hr>
		<div class='jumbotron  '>

			
<form class="needs-validation" method="post" action="">
	<h2 style="margin-top: -20px"><center>Patient Personal Information</center></h2>
	
	<div class="divide"></div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01" class="col-md-4" >Surname</label>
      <input type="text" class="form-control col-md-8"  name="surname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">First name</label>
      <input type="text" class="form-control" name="fname" required>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Middle name</label>
      <input type="text" class="form-control" name="m_name">
    </div>
  </div>
  <div class="form-row">
  	<div class="col-md-3">
   	<label for="validationCustom02">Date of Birth</label>
   	 <input type="date" name="dob" class="form-control" required>
   </div>
   <div class="col-md-2">
   	<label for="validationCustom02">Gender</label>
   	<select class="custom-select" style="width: 100%" required>
 		<option selected>...</option>
  		<option value="male">Male</option>
  		<option value="male">Female</option>
	</select>
   </div>
   
   <div class="col-md-2">
   	<label for="validationCustom02">Sate of Origin</label>
   	<select class="custom-select" required>
 		<option selected>...</option>
 		<option value="Enugu">Enugu</option>
  		<option value="male">load from database</option>
	</select>
   </div>
   <div class="col-md-2">
   	<label for="validationCustom02">LGA of Origin</label>
   	   	<select class="custom-select">
 			<option selected>...</option>
 			<option value="Oji-River">Oji-River</option>
  			<option value="male">load from database</option>
		</select>
   </div>
     	<div class="col-md-3">
   	<label for="validationCustom02">Home Town</label>
   	 <input type="text" name="home-town" class="form-control" required>
   </div>
  </div>
  <!-- third row -->
  <div class="form-row">
  	<div class="col-md-4">
   	<label for="validationCustom02">Permanent Adress</label>
   	 <input type="text" name="per-address" class="form-control"  required>
   </div>
   <div class="col-md-4">
   	<label for="validationCustom02">Mobile Phone</label>
   	<input type="text" name="phone_numb" class="form-control"  required>
   </div>	
   <div class="col-md-4">
   	<label for="validationCustom02">Contact address</label>
   	<input type="text" name="cont_address" class="form-control"  required>
   </div>	
 </div>
 <!-- last row -->
 <div class="form-row">
  	<div class="col-md-3">
   	<label for="validationCustom02">Blood group</label>
	   	<select class="custom-select">
	 			<option selected>...</option>
	 			<option value="Oji-River">O+</option>
	  			<option value="male">O-</option>
		</select>
   	 </div>
   	 <div class="col-md-3">
   	<label for="validationCustom02">Genotype</label>
	   	<select class="custom-select">
	 			<option selected>...</option>
	 			<option value="Oji-River">AA</option>
	  			<option value="male">AS</option>
	  			<option value="male">SS</option>
		</select>
   	 </div>
   <div class="col-md-3">
   	<label for="validationCustom02">Religion</label>
   	<select class="custom-select">
	 			<option selected>...</option>
	 			<option value="Oji-River">Christainity</option>
	  			<option value="male">Islamism</option>
	  			<option value="male">Others</option>
		</select>
   </div>	
   <div class="col-md-3">
   	<label for="validationCustom02">Email</label>
   	<input type="email" name="email" class="form-control"  required>
   </div>	
 </div>

 <center><h2 style="margin-top: 5px">Next of Kin Details</h2></center>
<div class="divide"></div>
 <div class="form-row">
  	<div class="col-md-4">
   	<label for="validationCustom02">Next of Kin fullname</label>
   	 <input type="text" name="kin_name" class="form-control"  required>
   </div>
   <div class="col-md-4">
   	<label for="validationCustom02">Next of Kin address</label>
   	 <input type="text" name="kin_address" class="form-control"  required>
   </div>	
   <div class="col-md-4">
   	<label>Next of Kin Mobile number</label>
   	 <input type="text" name="kin_no" class="form-control"  required>
   </div>
 </div>
 <div class="form-row">	
 	   <div class="col-md-6">
   	<label>Next of Kin Mobile Relationship</label>
   	<select class="custom-select">
	 			<option selected>...</option>
	 			<option value="Oji-River">Father</option>
	  			<option value="male">Mother</option>
	  			<option value="male">Sister</option>
	  			<option value="male">Brother</option>
	  			<option value="male">Others</option>

		</select>

   </div>
   <div class="col-md-6">
   	<label>Next of Kin  Email</label>
   	<input type="email" name="kin_email" class="form-control"  required>
   </div>

 </div>

	<H2><center><b>Medical History </b><small style="color:red; font-size: 12px">(Select as many that concerns you)</small></center></H2>
	 <div class="divide"></div>

<div class="form-row">

<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="diabetes" value="diabetes" >
  <label class="custom-control-label" >Diabetes</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Epilesy" value="Epilesy">
  <label class="custom-control-label" >Epilesy</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="sickle cell" value="sickle cell">
  <label class="custom-control-label" >Sickle Cell</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Hypertension" value="Hypertension">
  <label class="custom-control-label" >Hypertension</label>
</div>

<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Asthma" value="Asthma">
  <label class="custom-control-label" >Asthma</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Allergies" value="Allergies" >
  <label class="custom-control-label" >Allergies</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Previous_surgery" value="Previous surgery" >
  <label class="custom-control-label" >Previous Surgery</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="blind" value="blind" >
  <label class="custom-control-label" >Blind</label>
</div>
<div class="col-md-4 custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="Disabilities" value="Disabilities" >
  <label class="custom-control-label" >Disabilities</label>
</div>
<div class="col-md-12 custom-control custom-checkbox">
  <label><small class="text-danger">Details of Above or any other information concerning your health, symptoms you are feeling and when it started if possible</small></label>
  <textarea class="form-control is-invalid" name="text" placeholder="Write down a brief description of how you are feeling" required></textarea>
</div>
</div>
  
  <center><button style="margin-top: 5px;border-radius: 50%" name="submit" class="btn btn-primary" type="submit" >Submit form</button></center>
</form>


		</div>
	</div>
	<div class="jumbotron">
		<center>Hello, World</center>
	</div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>