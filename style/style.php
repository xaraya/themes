<?php 
	ob_start ("ob_gzhandler");
	header("Content-type: text/css; charset: UTF-8");
	header("Cache-Control: must-revalidate");
	$offset = 60 * 60 ;
	$ExpStr = "Expires: " . 
	gmdate("D, d M Y H:i:s",
	time() + $offset) . " GMT";
	header($ExpStr);
?>

/* Import Xaraya Styles */
@import url(xaraya.php);

/*  
Theme Name: Head
Theme URI: http://wpthemes.prissed.com/
Description: Head.  By Priss.  Bright green, yellow, blue, and black.
Version: 1.5
Author: Priss
Author URI: http://www.prissed.com/

	*** REGARDING IMAGES ***
	All CSS that involves the use of images, can be found in the 'index.php' file.
	This is to ease installation inside subdirectories of a server.

    *** Xaraya Note***
    Images in this file for consistancy sake.
*/

a:link, a:visited { color: #009900; text-decoration: none; }
a:hover { color: #006600; border-bottom: 1px dotted #006600; }

#leftmenu { padding: 240px 5px 0px 10px; margin: 0px; width: 135px; font-size: 10px; color: #ffffff; }
#leftmenu ul { margin: 0px; padding: 0px; }
#leftmenu ul li { margin: 0px; padding: 0px; font-weight: bold; font-size: 11px; color: #ffff00; list-style-type: none; }
#leftmenu ul ul { margin: 0px 0px 10px 0px; padding: 0px; }
#leftmenu ul ul li { margin: 0px; padding: 0px; list-style-type: none; color: #ffffff; font-weight: normal; font-size: 10px; }
#leftmenu a:link, #leftmenu a:visited { color: #ffffff; text-decoration: none; }
#leftmenu a:hover { color: #beff0a; border-bottom: 1px dotted #beff0a; }
#leftmenu h2 { color: #ffff00; font-size: 11px; margin: 0px; padding: 0px; }

#midmenu { width: 170; padding: 0px 40px 0px 10px; margin: 0px; color: #beff0a; font-size: 11px; }
#midmenu ul { margin: 0px; padding: 0px; }
#midmenu ul li { color: #ffffff; font-weight: bold; font-size: 12px; list-style-type: none;}
#midmenu ul ul { margin: 0px 0px 10px 0px; padding: 0px; }
#midmenu ul ul li { margin: 0px 0px 0px 15px; padding: 0px; font-size: 11px; font-weight: normal; color: #beff0a; list-style-type: square;}
#midmenu a:link, #midmenu a:visited { color: #beff0a; text-decoration: none; }
#midmenu a:hover { color: #FFFFFF; border-bottom: 1px dotted #ffffff; }

#searchform { margin: 0px; padding: 0px; }
#searchform input { border: 1px solid #beff0a; font-size: 10px; margin: 0px; padding: 0px; }
#searchform input#s { font-size: 11px; width: 72%; }

#description { height: 160px; padding: 30px 40px 0px 40px; font-size: 13px; font-style: italic; color: #ffffff; }

#main { position: absolute; top: 0px; left: 370px; margin: 0px 20px 0px 0px; padding: 30px 0px 10px 30px; line-height: 18px; }
#main h2 { margin: 0px 0px 20px 0px; font-size: 12px; font-weight: bold; color: #999900; text-align: center; border-bottom: 1px solid #999900; border-top: 1px solid #999900; }
#main h3 { margin: 0px; padding: 0px; font-size: 14px; }
#main li { list-style-type: square; }


h1 { display: block; font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 26px; margin: 0px; padding: 0px 0px 20px 0px; line-height: 26px; text-align: center; }
h1 a:link, h1 a:visited { color: #009900; text-decoration: none; }
h1 a:hover { color: #000000; border-bottom: 2px dotted #000000; text-decoration: none; }

cite { margin: 0px; padding: 0px; font-size: 10px; }
blockquote { padding: 0px 30px 0px 30px; margin-left: 0px; margin-right: 0px;  border-top: 1px solid #999900;  border-bottom: 1px solid #999900;  }
blockquote p { margin: 15px 0px 15px 0px; padding: 0px; }

.meta { color: #336666; font-size: 10px; margin: 0px; padding: 0px; }

body { margin: 0px; padding: 0px; background-image: url('../images/bg.gif'); background-repeat: repeat-y; background-color: #FFFF00; font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 13px; }
#left { width: 150px; position: absolute; top: 0px; left: 0px; margin: 0px; background-image: url('../images/lefttop.gif'); background-repeat: no-repeat; }
#mid { width: 220px; position: absolute; top: 0px; left: 150px; margin: 0px; background-image: url('../images/midtop.gif'); background-repeat: no-repeat; }