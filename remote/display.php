<?php
header('X-Frame-Options: GOFORIT');
?>
<!DOCTYPE html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body>
		<style>
		input#text
		{
		width:200px;
		height:30px;
		float:left;
		position:absolute;
		bottom:0px;
		left:0px;
		margin:0px;
		padding:0px;
		outline:none;
		border:none;
		text-indent:5px;
		}
		iframe#display
		{
		width:100%;
		height:100%;
		float:left;
		position:absolute;
		top:0px;
		left:0px;
		}
		body
		{
		margin:0px;
		overflow:hidden;
		}
		</style>
		<iframe id="display" src="" frameborder="0" allowfullscreen sandbox="allow-forms allow-scripts allow-top-navigation"></iframe>
		<input id="text" value="">
		<script>
		$('#text').change(function()
		{
			var din=$('#text').val();
			$.post("https://ramity.com/remote/return.php",
			{in:$('#text').val()},function(data)
			{
				$('#display').attr('src',data);
				console.log(data);
			});
		});
		</script>
	</body>
</html>