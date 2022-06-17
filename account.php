<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Media Academy Scholarship Exam 2021</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
    <div class="header">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           <span class="logo" style="color: orange" >Media Mall Scholarship Exam</span>
   </div>
    <div class="col-md-6  col-sm-6 col-xs-12">
      <?php
     include_once 'dbConnection.php';
    session_start();
      if(!(isset($_SESSION['email']))){
             header("location:index.php"); }
    else{
    $name = $_SESSION['name'];
    $email=$_SESSION['email'];

    include_once 'dbConnection.php';
    echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
    }?>
    </div>
    </div>
    </div>
<div class="bg4">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Dashboard</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
      
		</ul>
       

      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">



<!-- i disabled timer here
<h3><b>Timer: </b> <span id="countdown" class="timer"></span></h3>
-->
<!--home start-->
<?php if(@$_GET['q']==1) {
$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
?>
<center><div class="alert alert-success" role="alert">please start with the exam category of your choice when you are done with that one, choose the next category until you are done. Thanks</div></center>
<?php
echo  '<div class="pael">';
echo '';
echo '';
echo'<div class="table-responsive-sm table-responsive-md"><table class="table table-striped table-bordered table-sm title1">
<thead class="thead-danger"><tr><td><b>S.N.</b></td><td><b>Exam Category</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td></td></tr></thead>';
$SN=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];//Exam Title
	$total = $row['total'];//total questions
	$correct = $row['correct'];//mark for each correct questions
    $time = $row['time'];// time limit for each exam questions
	$eid = $row['eid'];//unique key for each question
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$SN++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$correct*$total.'</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start </b></span></a></b></td></tr>';
}
/* */
else
{
echo '<tr style="color:#99cc32"><td>'.$SN++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$correct*$total.'</td>
	<td><b>
 
  </b></td></tr>';
  // <a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red" disable><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>E</b>
}
$c=0;

}

echo '</table></div>';
echo '<center><div class="alert alert-warning " role="alert">please when you are done with the exams for each category, use the signout button, to log out.<br> Thanks';
echo '</div></center>';

echo'</div>';
// to check if number of subject for a unique user in rank table equals to no. of subject in title of quiz table
$q12=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');


}?>
<!-- -->


<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n']; // where is n define
$total=@$_GET['t']; // where is t define

//define how many result we want per page
$result_per_page = 1;  
//timer
$result = mysqli_query($con,"SELECT * FROM quiz where eid='$eid'") or die('Error');
while ($row = mysqli_fetch_array($result)) {
$time = $row['time'];
$_SESSION['time'] = $time * 60;
echo '
<script>
  // Exam Timer to collect timer value from database or php
var seconds = '.$_SESSION['time'];
echo'
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById("countdown").innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById("countdown").innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval("secondPassed()", 1000);
</script>';
}

// show Subject title
$sub = "";
$q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid'  " );
while($row=mysqli_fetch_array($q) )
{
$title=$row['title'];
}
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );

echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<div id='.$sn.'>
<center><h3><b><u>'.$title.' Exam</u></b></h3></center><br>
<b>Question &nbsp;'.$sn.'  of '.$total.'&nbsp;:: <br />'.$qns.'</b><br /><br />';// added div with id sn.

}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );

echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
// end of file ?>

<input type="radio" name="ans" value="<?php echo $optionid?>"><?php echo ' '.$option?><br /><br />

<?php

}

echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
/*
echo' <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
     <a class="page-link" href="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'&ans='.$option.' tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    
';
$count = 1;
$increment = 0;

$sql = "SELECT * from questions where eid = '$eid'";
$check = mysqli_query($con,$sql);

while ( $row = mysqli_fetch_array($check)) {
  
  echo ' <li class="page-item ">
     <a class="page-link" href="update.php?q=quiz&step=2&eid='.$eid.'&n='.$increment.'&t='.$total.'&qid='.$qid.'" >'.$count.'</a>
    </li>';
    $increment++;
  $count++;
}

echo '  <li class="page-item">
      <a class="page-link" href="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'">Next</a>
    </li>
  </ul>
</nav>
';*/

echo '</div>';

//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
/*
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
 $eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['correct'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table>';


echo'</div>';

}*/
?>
<!--quiz end-->
</div></div></div></div>



</body>
</html>
