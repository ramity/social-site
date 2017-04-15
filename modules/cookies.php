<?php
if(isset($_COOKIE['log'])&&!empty($_COOKIE['log']))
{
	try
	{
		$dbh=new PDO('mysql:host=localhost;dbname=R_main',$authu,$authp);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$get=$dbh->prepare('SELECT id,username,password FROM users WHERE id=:id');
		
		$bits=explode('-',$_COOKIE['log']);
		$duid=$bits[0];
		
		$get->execute(array(':id'=>$duid));
		$secureData=$get->fetchAll();
		
		$nduid=$secureData[0]['id'];
		$ndupass=$secureData[0]['password'];
		
		$ndublob=$nduid.'-'.hash('gost',$ndupass.'-'.$_SERVER['REMOTE_ADDR']);
		
		if($ndublob==$_COOKIE['log'])
		{
			$secureLogin=true;
			$secureId=$secureData[0]['id'];
			$secureUsername=$secureData[0]['username'];
		}
		else
		{
			header('Location:https://ramity.com/logout');
		}
	}
	catch(PDOException $e)
	{
		$error['name']='PDO Error/cookies-34';
		$error['text']='Something went wrong processing user cookie (-_-)>(+)';
		file_put_contents('PDOE_log',$e->getMessage().'\r\n',FILE_APPEND);
	}
}
?>