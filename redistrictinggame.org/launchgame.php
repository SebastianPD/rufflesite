<html lang="en"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>The ReDistricting Game</title>
<script language="javascript"> AC_FL_RunContent = 0; </script>
<script language="javascript"> DetectFlashVer = 0; </script>
<script srcc="ruffle.js"></script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Revision of Flash required
var requiredRevision = 0;
// -----------------------------------------------------------------------------
// --> newstuff
</script>

</head>
<body bgcolor="#b6b6b6" onload="AC_ResizeWindow(1024,800)">


<div align="center">

<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) {  // if we've detected an acceptable version
		// embed the flash movie
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '960',
			'height', '720',
			'src', 'game/<?php echo $_REQUEST['level']; ?><?php echo $_REQUEST['mission']; ?>',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'redistrictinggame',
			'bgcolor', '#b6b6b6',
			'name', 'The ReDistricting Game',
			'menu', 'false',
			'allowScriptAccess','always',
			'allowFullScreen','true',
			'movie', 'game/<?php echo $_REQUEST['level']; ?><?php echo $_REQUEST['mission']; ?>',
			'salign', ''
			); //end AC code
	} else {  // flash is too old or we can't detect the plugin
	}
}
// -->
</script>
</div>

</body></html>