<?php
if(isset($_COOKIE['log'])&&!empty($_COOKIE['log']))
{
	unset($_COOKIE['log']);
	setcookie('log',null,-1,'/','ramity.com',true,true);
	header('Location:https://ramity.com');
}
else
{
	header('Location:https://ramity.com');
}
?>