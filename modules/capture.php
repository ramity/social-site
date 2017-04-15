<?php
function rCapture($input)
{
	$GLOBALS['error']['name']='Login/Register error';
	$GLOBALS['error']['text']=$input;
}
if(isset($_POST['loginSubmit'])&&!empty($_POST['loginSubmit'])){
	if(isset($_POST['loginInput'])&&!empty($_POST['loginInput'])){
		if(isset($_POST['loginPassword'])&&!empty($_POST['loginPassword'])){
			try
			{
				$dbh=new PDO('mysql:host=localhost;dbname=R_main',$authu,$authp);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$get=$dbh->prepare('SELECT id FROM users WHERE username=:username AND password=:loginPassword');
				$get->execute(array(':username'=>$_POST['loginInput'],':loginPassword'=>hash('gost',$_POST['loginPassword'])));
				$udata=$get->fetchAll();
				
				$get=$dbh->prepare('SELECT id FROM users WHERE email=:email AND password=:password');
				$get->execute(array(':email'=>$_POST['loginInput'],':password'=>hash('gost',$_POST['loginPassword'])));
				$edata=$get->fetchAll();
				
				if(!empty($udata)||!empty($edata)){
					if(!empty($udata))
						setcookie('log',$udata[0]['id'].'-'.hash('gost',hash('gost',$_POST['loginPassword']).'-'.$_SERVER['REMOTE_ADDR']),time()+3600*24*7,'/','ramity.com',true,true);
					else
						setcookie('log',$edata[0]['id'].'-'.hash('gost',hash('gost',$_POST['loginPassword']).'-'.$_SERVER['REMOTE_ADDR']),time()+3600*24*7,'/','ramity.com',true,true);
					
					header('Location:https://ramity.com');
					//redirect and give user cookie (>^-^)> (+)
				}else{rCapture('Username or Email is incorrect');}
				$dbh=null;
			}
			catch(PDOException $e)
			{
				$error['name']='PDO error/capture-36';
				$error['text']='Something went wrong with the database request. Our team of highly trained monkeys are on the case.';
				file_put_contents('PDOE_log',$e->getMessage(),FILE_APPEND);
			}
		}else{rCapture('Password is not set');}
	}else{rCapture('Username is not set');}
}

if(isset($_POST['registerSubmit'])&&!empty($_POST['registerSubmit'])){
	if(isset($_POST['registerUsername'])&&!empty($_POST['registerUsername'])){
		if(isset($_POST['registerEmail'])&&!empty($_POST['registerEmail'])){
			if(isset($_POST['registerPassword'])&&!empty($_POST['registerPassword'])){
				if(isset($_POST['registerCPassword'])&&!empty($_POST['registerCPassword'])){
					if($_POST['registerPassword']==$_POST['registerCPassword']){
						if(ctype_alnum($_POST['registerUsername'])){
							if(filter_var($_POST['registerEmail'],FILTER_VALIDATE_EMAIL)){
								try
								{
									$dbh=new PDO('mysql:host=localhost;dbname=R_main',$authu,$authp);
									$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
									
									$get=$dbh->prepare('SELECT username FROM users WHERE username=:username');
									$get->execute(array(':username'=>$_POST['registerUsername']));
									$udata=$get->fetchAll();
									
									$get=$dbh->prepare('SELECT email FROM users WHERE email=:email');
									$get->execute(array(':email'=>$_POST['registerEmail']));
									$edata=$get->fetchAll();
									
									if(empty($udata)){
										if(empty($edata)){
											$get=$dbh->prepare('INSERT INTO users (id,username,email,password,ip) VALUES (:id,:username,:email,:password,:ip)');
											$get->execute(array(
												':id'=>'',
												':username'=>$_POST['registerUsername'],
												':email'=>$_POST['registerEmail'],
												':password'=>hash('gost',$_POST['registerPassword']),
												':ip'=>$_SERVER['REMOTE_ADDR']
											));
											header('Location:https://ramity.com/?r=true');
										}else{rCapture('Email is already in use');}
									}else{rCapture('Username is already in use');}
									$dbh=null;
								}
								catch(PDOException $e)
								{
									$error['name']='PDO error';
									$error['text']='Something went wrong with the database request. Our team of highly trained monkeys are on the case.';
									file_put_contents('PDOE_log',$e->getMessage(),FILE_APPEND);
								}
							}else{rCapture('Email seems a bit fishy');}
						}else{rCapture('Username uses invalid characters. Currently allowed characters : (A-Z,a-z,0-9)');}
					}else{rCapture('Passwords do not match');}
				}else{rCapture('Confirm password is not set');}
			}else{rCapture('Password is not set');}
		}else{rCapture('Email is not set');}
	}else{rCapture('Username is not set');}
}
if($secureLogin)
{
	if(isset($_POST['homeTextareaSubmit']))
	{
		if(isset($_POST['homeTextarea'])&&!empty($_POST['homeTextarea']))
		{
			echo $_POST['homeTextareaPrivacy'];
			echo $_POST['homeTextarea'];
		}
		else
		{
			echo 'error 2';
		}
	}
	else
	{
		echo 'error';
	}
}
?>