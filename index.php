<?php
require_once('/home/ramity/public_html/modules/master.php');
require_once('/home/ramity/public_html/modules/capture.php');
require_once('/home/ramity/public_html/modules/cookies.php');
if($secureLogin)
{
	require_once('/home/ramity/public_html/modules/update.php');
	require_once('/home/ramity/public_html/modules/input.php');
}
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=980">
		<link rel="shortcut icon" href="https://ramity.com/img/static/logo.ico">
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
		if($secureLogin)
		{
		?>
		<div id="home">
			<div id="homeinr">
				<a id="homecreate">Create</a>
				<div id="homecol">
					<form id="homeinput" action="https://ramity.com" method="post">
						<div id="homeinputbanner">
							Update your status:
						</div>
						<textarea id="homeinput" name="homeTextarea" placeholder="How's it going, <?php echo $secureUsername;?>?"></textarea>
						<div id="homeinputbottom">
							<input type="submit" id="homeinputbottomsubmit" name="homeTextareaSubmit" value="Post">
							<select class="homefeedselect" name="homeTextareaPrivacy" style="margin:10px 0px 10px 10px;">
								<option value="public">Public</option>
								<option value="friends">Friends</option>
								<option value="private">Private</option>
							</select>
							<div class="homeinputbottomitem">Privacy:</div>
						</div>
					</form>
					<div id="homefeed">
						<form id="homefeedsort" method="post" action="https://ramity.com/">
							Sort posts by:
							<input id="homefeedsortsubmit" type="submit" name="homeFeedSubmit" value="Sort">
							<select class="homefeedselect" name="sortMethod">
								<option value="mR">Most Recent</option>
								<option value="mP">Most Popular</option>
								<option value="mL">Most Likes</option>
								<option value="mV">Most Viewed</option>
							</select>
						</form>
						<div class="homefeedpost">
							
						</div>
					</div>
				</div>
				<div id="sidebar">
					<div class="sidebaritem">
						<div class="sidebaritemfunctionheader">Events</div>
						<div class="sidebaritemfunction">
							Messages
							<div class="sidebaritemfunctionnum">7</div>
						</div>
						<div class="sidebaritemfunction">
							Notifications
						</div>
						<div class="sidebaritemfunction">
							Requests
							<div class="sidebaritemfunctionnum">1</div>
						</div>
						<div class="sidebaritemfunction">
							<a href="https://ramity.com/updates">Updates</a>
						</div>
					</div>
					<div class="sidebaritem">
						<div class="sidebaritemfunctionheader">Social</div>
						<div class="sidebaritemfunction">
							Friends
						</div>
						<div class="sidebaritemfunction">
							Followers
						</div>
						<div class="sidebaritemfunction">
							Online
						</div>
					</div>
					<div class="sidebaritem">
						<div class="sidebaritemfunctionheader">Statistics</div>
						<div class="sidebaritemfunction">
							Overview
						</div>
						<div class="sidebaritemfunction">
							Rating
						</div>
						<div class="sidebaritemfunction">
							Posts
						</div>
						<div class="sidebaritemfunction">
							Votes
						</div>
						<div class="sidebaritemfunction">
							Views
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		else
		{
			require_once('/home/ramity/public_html/blocks/main.php');
			require_once('/home/ramity/public_html/blocks/footer.html');
		}
		?>
	</body>
</html>