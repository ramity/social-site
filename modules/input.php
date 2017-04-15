<?php
//assuming that secureLogin is true
//input names
$submit='homeTextareaSubmit';
$textarea='homeTextarea';
$privacy='homeTextareaPrivacy';
//start if statements
if(isset($_POST['homeTextareaSubmit']))
{
	if(isset($_POST['homeTextarea'])&&!empty($_POST['homeTextarea']))
	{
		/*
		$dbh=new PDO('mysql:host=localhost;dbname=R_content',$authu,$authp);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$get=$dbh->prepare('INSERT INTO ');
		$get->execute(array(':username'=>$_POST['loginInput'],':loginPassword'=>hash('gost',$_POST['loginPassword'])));
		$udata=$get->fetchAll();
		*/
		//don't forget I need a try catch statement for this
	}
}
?>