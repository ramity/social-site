<?php
/*
if not exists ()
    create table cars(
        Name varchar(64) not null
    )
go*/
if(file_exists('/home/ramity/public_html/u/'.$secureUsername.'.php'))
{
	
}
else
{
	fopen('/home/ramity/public_html/u/'.$secureUsername.'.php','w');
	$error['name']='An error occured';
	$error['text']='User file does not exist (This is a known issue and will be soon corrected)';
}
/*
$dbh=new PDO('mysql:host=localhost;dbname=R_content',$authu,$authp);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$get=$dbh->prepare("
	CREATE TABLE IF NOT EXISTS $secureUsername
	(
		id INT(11) AUTO_INCREMENT,
		PRIMARY KEY(id),
		userid INT(11),
		privacy VARCHAR(100),
		ip VARCHAR(100),
		date VARCHAR(100),
		text TEXT()
	);
");
$get->execute(array(':username'=>$_POST['loginInput'],':loginPassword'=>hash('gost',$_POST['loginPassword'])));
$udata=$get->fetchAll();
*/
?>