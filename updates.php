<?php
require_once('/home/ramity/public_html/modules/master.php');
require_once('/home/ramity/public_html/modules/capture.php');
require_once('/home/ramity/public_html/modules/cookies.php');
if($secureLogin)
{
	require_once('/home/ramity/public_html/modules/update.php');
}
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=980">
		<link rel="stylesheet" type="text/css" href="https://ramity.com/css/icon.css">
		<link rel="stylesheet" type="text/css" href="https://ramity.com/css/topbar.css">
		<link rel="stylesheet" type="text/css" href="https://ramity.com/css/error.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
		<?php
		if($secureLogin)
		{
			echo '<link rel="stylesheet" type="text/css" href="https://ramity.com/css/home.css">';
			echo '<title>Home - '.$secureUsername.'</title>';
		}
		else
		{
			echo '<title>The New Social Network</title>';
			echo '<link rel="stylesheet" type="text/css" href="https://ramity.com/css/main.css">';
			echo '<link rel="stylesheet" type="text/css" href="https://ramity.com/css/footer.css">';
		}
		?>
		<script src="https://ramity.com/js/analytics.js"></script>
	</head>
	<body>
		<?php
		require_once('/home/ramity/public_html/blocks/topbar.php');
		require_once('/home/ramity/public_html/blocks/error.php');
		?>
		<style>
		div#item
		{
		width:100%;
		float:left;
		display:inline-block;
		text-align:center;
		}
		div#iteminr
		{
		width:960px;
		margin:20px auto;
		text-align:left;
		}
		h3.item
		{
		margin:0px;
		padding:10px;
		background-color:#6599FF;
		color:#fff;
		font-weight:normal;
		border-bottom:2px solid #2754AE;
		}
		div.log
		{
		width:660px;
		padding:20px;
		float:left;
		margin-bottom:20px;
		background-color:#fff;
		}
		div#list
		{
		width:700px;
		float:left;
		}
		ul
		{
		margin:0px;
		padding:5px 5px 5px 30px;
		background-color:#fafafa
		}
		div#todo
		{
		width:240px;
		float:left;
		margin-left:20px;
		}
		div#todoinr
		{
		width:200px;
		padding:20px;
		background-color:#fff;
		position:fixed;
		}
		</style>
		<div id="item">
			<div id="iteminr">
				<div id="list">
					<div class="log">
						<h3 class="item">11-17-2014 @ 3:56PM - Minor Changes (All front end)</h3>
						<ul>
							<li></li>
						</ul>
					</div>
					<div class="log">
						<h3 class="item">11-16-2014 @ 5:57PM - Basic Improvements</h3>
						<ul>
							<li>Additions made to index</li>
							<li>Additions made to frontpage</li>
							<li>Additions made to logout page</li>
							<li>Updates page created (this page)</li>
							<li>Began brainstorming ideas for potential extensions for site</li>
							<li>Began brainstorming methods of profit from site</li>
							<li><i>I need to get Austin to create icons for the site > labels for everything is a bit messy</i></li>
							<li><i>Shooting for minimalistic site, but not focusing on responsive web design, for now.</i></li>
						</ul>
					</div>
					<div class="log">
						<h3 class="item">11-15-2014 @ 11:13PM - The site is reborn into social media.</h3>
						<ul>
							<li>Login/Register System</li>
							<li>Database connections</li>
							<li>Frontpage register and login</li>
							<li>Error display system (may be updated later)</li>
							<li>Work done on frontpage</li>
							<li>Work done on secure index page</li>
							<li>Set up css, modules, error, blocks, img, js, and project folders</li>
						</ul>
					</div>
				</div>
				<div id="todo">
					<div id="todoinr">
						<h3 class="item">To do list</h3>
						<ul>
							<li>stuff</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>