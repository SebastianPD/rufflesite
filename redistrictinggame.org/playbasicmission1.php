<?php include('inc_header.php'); ?>

<div style="width:960px; height:653px; margin:0 auto;">
	<div style="width:15px; height:653px; float:left; background:url(graphics/shell_center_grad.gif) repeat-x;"><img src="graphics/shell_side_left_top.gif" width="15" height="18" alt="" style="float:left;"><img src="graphics/shell_side_left_grad.gif" width="6" height="618" alt="" style="float:left; clear:left;"><img src="graphics/shell_side_left_bottom.gif" width="6" height="17" alt="" style="float:left; clear:left;"></div>
	
	
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:629px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Launching Game</div><div style="width:629px; height:15px; margin:30px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:629px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px;"><div id="flashversion">Your browser is blocking this page from creating new windows or tabs. Please allow popups for this site or enable creating new windows in your javascript options. You can also manually right-click and choose either "Open Link in New Tab" or "Open in New Window" on <a href="game/launchgame.php?level=basic&amp;mission=1" target="_blank">this link</a> then continue to the <a href="resourceguide.php">resources page</a>. </div></div>
		</div>
		<div style="width:629px; height:15px; margin:0 auto 0 auto;"><img src="graphics/pg_00_333333_ll.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_lr.gif" width="15" height="15" style="float:right;" alt=""></div>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">
	// <![CDATA[
		
		var version = deconcept.SWFObjectUtil.getPlayerVersion();
		
		if (document.getElementById && (version['major'] < 9)) {
			// flash too old
			document.getElementById('flashversion').innerHTML = "You have Flash player "+ version['major'] +"."+ version['minor'] +"."+ version['rev'] +" installed. This game requires Flash 9 or higher to be installed to play. Please download and install the newest <a href='http://www.adobe.com/go/getflashplayer' target='_blank' class='external'>Adobe Flash Player</a>.";
		} else {
			// flash passed
			document.getElementById('flashversion').innerHTML = 'Attempting to load game in a new window or tab. If it does not load please disable your popup blocker or enable creating new windows in your javascript options. You can also manually right-click and choose either "Open Link in New Tab" or "Open in New Window" on <a href="launchgame.php?level=basic&mission=1" target="_blank">this link</a>.<br /><br />If the game window is successfully launched then this page should automatically forward to the <a href="resourceguide.php">resources page</a>.</div>';
			// label new window "redistrictinggame" so it will always load in the same window
			var newWindow = window.open('game/launchgame.php?level=basic&mission=1', 'redistrictinggame', 'status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=1,scrollbars=1,height="768",width="1024"');
			if (newWindow) {
				// open new window and focus if we can
				window.location = 'resourceguide.php';
				if (newWindow.focus) {
					newWindow.focus();
				}
			} else {
				document.getElementById('flashversion').innerHTML = 'Your browser is blocking this page from creating new windows or tabs. Please allow popups for this site or enable creating new windows in your javascript options. You can also manually right-click and choose either "Open Link in New Tab" or "Open in New Window" on <a href="launchgame.php?level=basic&mission=1" target="_blank">this link</a> then continue to the <a href="resourceguide.php">resources page</a>.</div> ';
			}
		}

	// ]]>
</script>
</div></div>


	<div style="width:6px; height:653px; float:left; background:url(graphics/shell_side_right_grad.gif) repeat-y;"><img src="graphics/shell_side_right_top.gif" width="6" height="28" alt=""></div>
</div>

<?php include('inc_footer.php'); ?>
