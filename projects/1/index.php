<!DOCTYPE>
<html>
	<head>
		<title>Why should we Vote? - Lewis Brown</title>
		<link rel='stylesheet' type='text/css' href='https://ramity.com/projects/1/index.css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://ramity.com/js/d3.min.js"></script>
		<script src="https://ramity.com/js/radialProgress.js"></script>
		
	</head>
	<body>
		<div id="header">
			<div id="headerinr">
				<a class="headeritem" href="https://ramity.com/">Ramity.com</a>
				<a class="headeritem" href="https://ramity.com/projects/1/" style="float:right;margin:10px 0px 10px 10px">Home</a>
			</div>
		</div>
		<script>
			function radial(element,value,label)
			{
				radialProgress(document.getElementById(element))
					.diameter(230)
					.minValue(0)
					.maxValue(100)
					.value(value)
					.label(label)
					.render();
			}
		</script>
		<div id="contentholder">
			<div id="contentholderinr">
				<div id="slidemain">
					Why Vote?
				</div>
				<div class="slide">
					<div class="slideheader">
						Why not?
					</div>
					<div class="slidecontent">
						<div class="slidetext" style="border-radius:5px">
							<h1 style="border-bottom:5px solid #fff;border-radius:0px">Your vote matters!</h1>
							When you don't vote, your opinion is not properly represented in government. Not voting doesn't stop with one person. If a large enough amount of people do not participate in voting, judicial laws could be incorrect or not representative of the actual figures. It is said that 54% of non voters interviewed in a recent survey held by PEW research center do not believe abortion should not be legal. If the results of the poll were the actual figures from a vote, abortion would be made legal and all just because those who didn't vote believed that their vote actually mattered.
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="slideheader">
						Because it's how you speak your mind!
					</div>
					<div class="slidecontent">
						<div class="slidetext">
							Voting allows for your voice to be heard. Participating in government allows for you to have a say on governmental proceedings. These proceedings can range from education, to public safety, to all kinds of public and important issues at hand.
						</div>
						<div class="statsholder">
							<div class="stats" id="done">
								<script>radial('done',17.5,'"were too busy"');</script>
							</div>
						</div>
						
					</div>
				</div>
				<div class="slide">
					<div class="slideheader">
						Because you have a say in government!
					</div>
					<div class="slidecontent">
						<div class="slidetext">
							As much as government does, why not have a say? Your vote elects people who will partake in representing your shared ideals, so why not represent them?
						</div>
						<div class="statsholder">
							<div class="stats" id="dtwo">
								<script>radial('dtwo',100,'"should vote"');</script>
							</div>
						</div>
						
					</div>
				</div>
				<div class="slide">
					<div class="slideheader">
						Because your vote matters!
					</div>
					<div class="slidecontent">
						<div class="slidetext">
							The difference between your political beliefs being represented or not may actually be up your vote. One vote is all it takes. And even if your vote may seem small, it still has the power if it is popular with the major or minor opinions.
						</div>
						<div class="statsholder">
							<img src="https://imgur.com/1xABX7K.jpg">
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="slideheader">
						Because it's your duty!
					</div>
					<div class="slidecontent">
						<div class="slidetext">
							As Americans, we should actively partake in government because we fought for it. Freedom is not free and, most likely, never will be. Voting is part of the democratic principles we've fought for so many years.
						</div>
						<div class="statsholder">
							<img src="https://imgur.com/KeYIQ7X.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="footerinr">Created by Lewis Brown - <a style="color:#fff;" href="view-source:https://ramity.com/projects/1/">View Source</a> - Copyright Ramity.com - All rights reserved</div>
		</div>
		<style>
		.background
		{
		fill:transparent;
		fill-opacity:1;
		}
		.component
		{
		fill:#d2d2d2;
		}
		.component .label
		{
		font-family:'Exo',sans-serif;
		text-anchor:middle;
		fill:#000;
		}
		.arcs
		{
		width:256px;
		height:256px;
		}
		.arc
		{
		stroke-weight:0.1;
		fill:#0BF;
		}
		.arc2
		{
		stroke-weight:0.1;
		fill:#0BF;
		}
		.label
		{
		font-family:'Exo',sans-serif;
		text-anchor:middle;
		}
		.radial-svg
		{
		width:256px;
		height:256px;
		display:inline-block;
		margin:0px auto;
		}
		</style>
	</body>
</html>