<?php 
	
if ($_GET['pg']) {
	header('Location: ' . $_GET['pg'] . '.php');
	exit();
}

include('inc_header.php'); 
?>

<div style="width:960px; height:653px; margin:0 auto;">
	<div style="width:15px; height:653px; float:left; background:url('graphics/shell_center_grad.gif') repeat-x;"><img src="graphics/shell_side_left_top.gif" width="15" height="18" alt="" style="float:left;"><img src="graphics/shell_side_left_grad.gif" width="6" height="618" alt="" style="float:left; clear:left;"><img src="graphics/shell_side_left_bottom.gif" width="6" height="17" alt="" style="float:left; clear:left;"></div>
	<div style="width:939px; height:653px; float:left; text-align:left; background:url('graphics/shell_center_grad.gif') repeat-x;" id="siteContent"><div style="width:217px; height:653px; float:left;">
	<img src="graphics/pg_01_what_people.gif" width="190" height="38" style="margin-top:18px; margin-left:10px;" alt="">
	<div style="width:213px; height:431px; border:2px solid #000000; margin-top: 12px; background:url('graphics/pg_01_what_people_grad.gif') repeat-x;">
		<div style="width:2px; height:431px; background-color:#333333; float:left;"></div>
		<div style="width:209px; height:431px; float:left;">
			<div style="width:209px; height:394px; text-align:left;">
				<div style="padding:6px 4px 5px 6px;" class="txtMiniQuotes">"It is not easy to make the redistricting process understandable -- and near-miraculous to be able to do so in a highly entertaining way. But that is just what <span class="txtItalic">The Redistricting Game</span> does, to the gratitude of all who want Americans to understand how this process is working, and why it needs real reform."<div class="txtMiniQuotesName">- Norm Ornstein, American Enterprise Institute</div></div>
				<div style="text-align:center;"><img src="graphics/pg_01_divisor.gif" width="180" height="3" alt=""></div>
				<div style="padding:5px 4px 0px 6px;" class="txtMiniQuotes">"The polarization and poisonous atmo-sphere that have infected the House of Representatives for the past two decades or more can be traced -- in large part -- to the manner in which district lines are drawn in most states."<div class="txtMiniQuotesName">- Les Francis, former Exec Director of the Democratic National Committee</div></div>			</div>
			<div style="width:209px; height:37px;">
				<a href="http://redistrictinggame.blogspot.com/" target="_blank"><img src="graphics/pg_01_what_people_more_btn.gif" width="96" height="32" style="float:right; padding-right:2px;" alt=""></a>
			</div>
		</div>
		<div style="width:2px; height:431px; background-color:#333333; float:left;"></div>
	</div>
	<!--div style="width:204px; height:105px; border:2px solid #000000; margin-top: 9px; background-color:#666666;"-->
	<div style="width:217px; height:105px; margin-top: 12px; text-align:center;">
		<img src="graphics/pg_01_visit_our_friends.gif" width="183" height="18" alt=""><br>
		<div><a href="http://www.fairvote.org/index-page=261.html" target="_blank"><img src="graphics/friends_fairvote.gif" width="100" height="41" style="margin:3px 1px 0 0;" alt=""></a><a href="http://www.excelgov.org/displayContent.php-NewsItemID=734&keyword=a432940507f9e3&searchWord=redistricting.html" target="_blank"><img src="graphics/friends_excellence.gif" width="100" height="37" style="margin-top:7px;" alt=""></a></div>
		<a href="http://www.lwv.org/AM/Template.cfm?Section=Redistricting&Template=/TaggedPage/TaggedPageDisplay.cfm&TPLID=22&ContentID=7996" target="_blank"><img src="graphics/friends_lwv.gif" width="100" height="37" style="margin:1px 1px 0 0;" alt=""></a><a href="http://www.campaignlegalcenter.org/redistricting-223.html" target="_blank"><img src="graphics/friends_campain_legal_center.gif" width="100" height="37" style="margin-top:1px;" alt=""></a>
	</div>
</div>
<div style="width:722px; height:653px; float:left;">
	<div style="width:706px; height:428px; border:5px solid #333333; margin-top:5px; margin-left:4px; background:url('graphics/pg_01_background_video.jpg');"><div style="width:640px; height:320px; margin:35px auto 0 auto; border:3px #000000 solid;">

<video width="640" height="320" controls="controls" preload="none" autoplay="autoplay">
<source src="movie/intro.mp4" type="video/mp4"/>
<source src="movie/intro.ogv" type="video/ogg"/>
</video>

</div></div>
	<div style="width:720px; height:206px;">
		<div style="width:304px; height:206px; float:left; background:url('graphics/pg_01_quotes.gif') no-repeat; background-position:21px 32px;"><div style="background:url('graphics/pg_01_quotes_gerry.gif') no-repeat; background-position: 236px 60px;"><div id="txtQuote">A leader steps back from the entire system and tries to build a more collaborative, more innovative system to work over the long term.<div id="txtQuoteItalics">-- Robert Reich</div></div></div></div>
		<div style="width:416px; height:206px; float:left">
			<!-- <div style="width:416px; height:24px;">
				<img src="graphics/pg_01_audio_bar.gif" width="321" height="24" alt="" /><img src="graphics/pg_01_audio_bar_btn.gif" width="95" height="24" alt="" />
			</div>
			--><div style="width:414px; height:153px; border:1px solid #000000; background-color:#343434;">
				<div style="width:402px; height:141px; margin-top:4px; margin-left:4px; border:2px solid #6D6D6D; background:url('graphics/pg_01_play_the_game_grad.gif') repeat-x;"><a href="game.php"><img src="graphics/pg_01_play_the_game_btn.gif" width="359" height="110" style="margin-left:32px; margin-top:19px;" alt="Play the Game"></a></div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include('inc_footer.php'); ?>
