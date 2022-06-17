<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || DASHBOARD </title>
<link  rel="stylesheet" href="../css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="../css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="../css/main.css">
 <link  rel="stylesheet" href="../css/font.css">
 <script src="../js/jquery.js" type="text/javascript"></script>

  <script src="../js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo" style="color: orange;margin-left: 10px;">Admin Panel</span></div>
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];;

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>


</div></div>
<!-- admin start-->

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
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">User</a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash.php?q=2">Ranking</a></li>
		<!--<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="#">Add Users</a></li>-->
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5 || @$_GET['q']==6) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="dash.php?q=4">Add Quiz</a></li>
            <li><a href="dash.php?q=5">Remove Quiz</a></li>
           
			
          </ul>
        </li><li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
		
      </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php

 if(@$_GET['q']==0) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$correct = $row['correct'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td style="color: #111;font-size:19px"><b>'.$title.'</b></td><td>'.$total.'</td><td>'.$correct.'</td><td>'.$time.'&nbsp;min</td>';
  //echo'<td><b><a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"  ></span>&nbsp;<span class="title1"><b>Edit</b></span></a></b></td></tr>';
   

}
}
$c=0;
echo '</table></div></div>';

}

//ranking start
if(@$_GET['q']== 2) 
{
  $q=mysqli_query($con,"SELECT * FROM history" )or die('Error232');
  while ($row = mysqli_fetch_array($q)) {
    $subject = $row['subject'];
    $email = $row['email'];
  }
  if (mysqli_num_rows($q) == 0) {
    echo  '<div class="panel title"><div class="table-responsive">

<table class="table table-striped title1" >
<tr style="color:red; text-align:center;"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Subject</b></td><td><b>Score</b></td><td><b>...</b></td></tr>';
  $q=mysqli_query($con,"DELETE  FROM rank   " )or die('Error(delete)');
  
  }else{

$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY email ASC " )or die('Error223');
?>
<div class="pnel tile"><div class="table  table-dark">
    <h2 style="text-align:center"><u>Result Overview</u></h2>
<table class="table table-striped table-bordered title1" >
<tr style="color:red; text-align:center;">
  <td><b>Rank</b></td>
  <td><b>Name</b></td>
  <td><b>Gender</b></td>
  <td><b>Subject</b></td>
  <td><b>...</b></td>
</tr>
<?php 
echo  '';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$score=$row['score'];

$program=$row['subject'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE regno='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];

}
$q12=mysqli_query($con,"SELECT * FROM quiz WHERE title='$program' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$eid=$row['eid'];
$total=$row['total'];
$correct=$row['total'];
}
$scorelogic = ($correct * 100)/$total;
$s =floor($scorelogic).'%';
$c++;
echo '<tr><td style="color:#99cc32;"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$program.'</td>
  <td><a href="dash.php?q=8&email='.$e.'&eid='.$eid.'&subject='.$program.'&name='.$name.'" class="pull-right btn  btn-primary" ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>View Result</b></span></a>
</td>
';
}
echo '</table></div></div>';
}
}

?>
<?php
// view result
if(@$_GET['q']== 8 && @$_GET['email']) 
{
$eid=@$_GET['eid'];
$email = @$_GET['email'];
$subject = @$_GET['subject'];
$stuname = @$_GET['name'];
echo  '<div class="panel">
<center><b><u><h1 class="title" style="color:#660033">'.strtoupper($stuname).' '.$subject.' Result Overview</h1></u></b><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');

echo '<tr ><td style="color:#66CCFF">Total Questions</td>
      <td style="color:#99cc32">right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td> 
    <td style="color:red">Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td>
    <td style="color:#66CCFF">Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td></tr>';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['correct'];
$qa=$row['level'];
echo '<tr ><td>'.$qa.'hi</td>
    <td>'.$r.'</td> 
   <td>'.$w.'</td>
    <td>'.$s.'</td></tr>';
}
echo '</table>';
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' AND subject = '$subject' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
  $s = $row['score'];
  echo $s.'+'.$qa;
$s=floor(($row['score'] * 100)/$qa).'%' ;
echo '<h2 style="color:#990000">Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span> '.$s.'</h2>';
}

echo '<a href="dash.php?q=2" class="pull-right btn  btn-primary" ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Go Back</b></span></a>
</div>';

}


?>

<!--home closed-->
<!--users start-->
<?php if(@$_GET['q']==1) {
$alert = @$_GET['email'];
$result = mysqli_query($con,"SELECT * FROM user ") or die('Error');

echo  '<div class="panel">
    <center><a href="#" class="btn  btn-success " data-toggle="modal" data-target="#addusers"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Add Users</b></span></a><br>'; 
 if (@$_GET['email']) {
  
  echo  '<div class="alert alert-danger" style="margin-top:8px" role="alert"><strong>'.
            $alert
            .'</strong> 
  <a type="button" href="dash.php?q=1" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </a>
</div>
    ';}

echo '</center>';
echo'
<div class="table-responsive"><table class="table table-striped title1" style="margin-top:8px">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>program</b></td><td><b>Email</b></td><td><b>Reg No==Password</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$regno = $row['regno'];
	$gender = $row['gender'];
    $email = $row['email'];
	$program = $row['program'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$program.'</td><td>'.$email.'</td><td>'.$regno.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div></div>';

}?>
<!--user end-->

<!--feedback start-->
<?php if(@$_GET['q']==3) {
//$result = mysqli_query($con," SELECT * from user ") or die('Error');
  ?>

  <div class="panel">

   
  <?php

/*	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
}*/
echo '</table></div></div>';
}
?>
<!--feedback closed-->


<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
    
  </div>
</div>
-->
<!-- Text input
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
    
  </div>
</div>
-->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4"  method="POST">
<fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br />
<!-- Question input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
  </div>
</div>

<!-- Option A input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Option B input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Option C input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Option D input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
    
  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
   <option value="a">Select answer for question '.$i.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?><!--add quiz step 2 end-->

<!--remove quiz-->
<?php if(@$_GET['q']==5) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$correct = $row['correct'];
    $time = $row['time'];
	$eid = $row['eid'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$correct*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=rmquiz&eid='.$eid.'&subject='.$title.'&" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
$c=0;
echo '</table></div></div>';

}
?>

<!-- modal start for edit button-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Edit</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST" action="update.php?q=edit "  >
<fieldset>


<!-- Text Topics-->
<div class="form-group">
  <label class="col-md-3 control-label" for="topics">Topic</label>  
  <div class="col-md-6">
  <input id="topic" name="topic"  class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text Total number-->
<div class="form-group">
  <label class="col-md-3 control-label" for="tnum">Total Questions</label>  
  <div class="col-md-6">
  <input id="tnum" name="tnum" value="50" class="form-control input-md" type="number" min='1' max="100">
    
  </div>
</div>
<!-- Text Marks-->
<div class="form-group">
  <label class="col-md-3 control-label" for="topics">Total Score</label>  
  <div class="col-md-6">
  <input id="tscore" name="tscore" value="100" class="form-control input-md" min='1' max="100" type="number">
    
  </div>
</div>
<!-- Text Time Limit-->
<div class="form-group">
  <label class="col-md-3 control-label" for="topics">Time Limit</label>  
  <div class="col-md-6">
  <input id="tlimit" name="tlimit" value="30min" class="form-control input-md" type="number" min='1' max="100">
    
  </div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <b><a href="update.php?q=edit&eid='.$eid.'" class="pull-right btn sub1"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Update</b></span></a></b>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->


</div><!--container closed-->
</div></div>
<!--sign in modal start-->
<div class="modal fade" id="addusers">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><b><span style="color:#45aa14">Add Users</span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="update.php?q=adduser" method="POST">
<fieldset>


<!-- Name input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name">Name:</label>  
  <div class="col-md-6">
  <input id="name" name="name" placeholder="Enter student Name" class="form-control input-md" type="text" required>
    
  </div>
</div>


<!-- Gender input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email">Gender:</label>
  <div class="col-md-6">
    <select id="gender" name="gender" placeholder="Enter student Gender" class="form-control input-md" type="text" required="">
    <option selected>...</option>    
    <option >Male</option>    
    <option >Female</option>    
    </select>
  </div>
</div><!-- Program input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email">Program</label>
  <div class="col-md-6">
    <select id="program" name="program" placeholder="Enter student Program" class="form-control input-md" type="text" >
    <option selected>ICT Scholarship</option>    
    </select>
  </div>
</div>
<!-- Email input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email">Email: </label>
  <div class="col-md-6">
    <input id="email" name="email" placeholder="Enter student Email" class="form-control input-md" type="email" required="">
    
  </div>
</div>
<!-- Regno input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="regno">RegNo: </label>
  <div class="col-md-6">
    <input id="regno" name="regno" placeholder="Enter student regno" class="form-control input-md" type="text" required="">
    
  </div>
</div>
<!-- Password input
<div class="form-group">
  <label class="col-md-3 control-label" for="password">Password</label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" value="">
    
  </div>
</div>-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</body>
</html>
