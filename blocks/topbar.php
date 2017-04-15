<div id="topbar">
	<div class="topbarrow">
		<a href="https://ramity.com" id="topbarlogo">R</a>
		<div class="topbarinr">
			<a href="https://ramity.com" id="topbarinrlogo">R</a>
			<div id="topbarsearch">
				<div class="icon" id="searchicon"></div>
				<input id="topbarsearch" placeholder="Enter a search...">
			</div>
			<div id="topbarright">
				
				<?php if($secureLogin){?>
				
				<div id="topbarrightuser">
					<img id="topbarrightuserpic" src="https://lh5.googleusercontent.com/-Eo339Y8QZk0/AAAAAAAAAAI/AAAAAAAAAAA/fdNMuKg47Ig/photo.jpg">
					<?php echo $secureUsername;?>
				</div>
				<div class="topbarrightitem_off">
					<div class="icon" id="inboxicon" title="inbox"></div>
				</div>
				<div class="topbarrightitem_on">
					<div class="icon" id="alerticon_on" title="alerts"></div>
				</div>
				<div class="topbarrightitem_off">
					<div class="icon" id="requesticon" title="requests"></div>
				</div>
				
				<?php }else{?>
				
				<div class="topbarrightitem">Hey, <b>Anon</b></div>
				
				<?php }?>
			</div>
		</div>
	</div>
	
	<?php if($secureLogin){?>
	
	<div class="topbarrow">
		<div class="topbarinr">
			<div class="topbarinritemactive">Feed</div>
			<div class="topbarinritem">Home</div>
			<div class="topbarinritem">News</div>
			<div class="topbarinritem">Channels</div>
			<div class="topbarinritem">Discover</div>
		</div>
	</div>
	
	<?php }?>
	
</div>
<?php
if($secureLogin)
	echo '<div id="topbarspacer"></div>';
else
	echo '<div id="topbarspacer" style="height:51px;"></div>';
?>