<?php
include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];

//quiz start
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];// get exam id(eid) of exam subject passed here
$sn=@$_GET['n'];// get the serial number passed here.
$total=@$_GET['t'];// get total questions passed here
$ans=$_POST['ans'];//get 
$qid=@$_GET['qid'];

//fetches correct answer id from database
$q=mysqli_query($con,"SELECT * FROM answer WHERE qid='$qid' " );
while($row=mysqli_fetch_array($q) )
{
$ansid=$row['ansid'];
}
// fetches title of subject from database
$subjectcheck = mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " );
while($row=mysqli_fetch_array($subjectcheck) ){
$title = $row['title'];
}

if($ans == $ansid) {//startd
$q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " );

while($row=mysqli_fetch_array($q) ) {
		$correct=$row['correct'];   
	}

if($sn == 1){
$q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW(),'$title')")or die('Error'); 
			}

$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];// total score of student
$r=$row['correct'];// total correct answer
}
$r++;
$s=$s+$correct;
$q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');

} 

else
{
$q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');

while($row=mysqli_fetch_array($q) )
{
$wrong=$row['wrong'];
}
if($sn == 1)
{
$q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW(),'$title' )")or die('Error137');
}
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['correct'];// total correct answer
}
$w++;
//$s=$s-$wrong;
$q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
}
// check if number of question is not same with that in database
if($sn != $total)
{
$sn++;
header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
}

//beginning of else if
else if( $_SESSION['name'] != '' )
{
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');

while($row=mysqli_fetch_array($q) ) {
$s=$row['score'];
$subject = $row['subject'];
 }

$q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email' AND subject='$subject'" )or die('Error161');
$rowcount=mysqli_num_rows($q);
// first chid of else-if: if 
if($rowcount == 0)
{

$q2=mysqli_query($con,"INSERT INTO rank VALUES('$email','$s',NOW(),'$subject')")or die('Error165');
} 

header("location:account.php?q=1");
}
// last else for the if sequence
/*else
{
header("location:account.php?q=result&eid=$eid");
}*/
}




//restart quiz
if(@$_GET['q']== 'quizre' && @$_GET['step']== 25 ) {
$eid=@$_GET['eid'];
$n=@$_GET['n'];
$t=@$_GET['t'];
$q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
}
$q=mysqli_query($con,"DELETE FROM `history` WHERE eid='$eid' AND email='$email' " )or die('Error184');
$q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$sun-$s;
$q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
header("location:account.php?q=quiz&step=2&eid=$eid&n=1&t=$t");
}

?>



