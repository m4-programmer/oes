<?php 
include_once 'dbConnection.php';
//session_start();

?>
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
</head>
<body>
	
	<div class="panel">
		<center><h3><b><u>Please Select Course Here</u></b> </h3></center>
	
<?php
 $q=mysqli_query($con,"SELECT * FROM courses  " );
  while ($rows=mysqli_fetch_array($q)) {
  $courses = $rows['course_id'];
  ?>
  <form action="" method="GET">
  	<input type="radio" name="courses">
  

  <?php
  echo($courses).'<br>';
  }



?>
</form>
</div>

<?php
// script to take radio value and update in database

 ?>
</body>
</html>