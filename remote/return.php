<?php
require_once('/home/ramity/public_html/modules/master.php');
if(isset($_POST)&&!empty($_POST))
{
	if(isset($_POST['out'])&&!empty($_POST['out']))
	{
		try
		{
			$dbh=new PDO('mysql:host=localhost;dbname=R_remote',$authu,$authp);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$get=$dbh->prepare('SELECT url FROM data');
			$get->execute();
			$data=$get->fetchAll();

			echo $data[0]['url'];
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	if(isset($_POST['in'])&&!empty($_POST['in']))
	{
		try
		{
			$dbh=new PDO('mysql:host=localhost;dbname=R_remote',$authu,$authp);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$get=$dbh->prepare('UPDATE `data` SET `url`=:input WHERE 1');
			$get->execute(array(':input'=>$_POST['in']));
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		echo $_POST['in'];
	}
}
?>