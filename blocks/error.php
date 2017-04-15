<?php
if(!empty($error))
{
	echo '<div id="error">';
		echo '<div id="errorinr">';
			echo '<b>Error name</b> : '.$error['name'].'<br>';
			echo '<b>Description</b> : '.$error['text'];
		echo '</div>';
	echo '</div>';
}
else
{
	if(isset($_GET['a'])&&$_GET['a'])
	{
		echo '<div id="success">';
			echo '<div id="successinr">';
				echo '<img id="checkmark" src="https://imgur.com/wwbd7c9.jpg">Your account has been successfully created! Go ahead and try logging in.';
			echo '</div>';
		echo '</div>';
	}
}
?>