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
Theme Name: Travelogue
Theme URI: http://svn.wp-themes.org/travelogue/
Description: Designed with a traveler in mind, or someone with a chronologically-based blog, this theme is attractive and customizable. Don't forget to change the picture in the polaroid!
Author: Josh Lyman
Author URI: http://www.podq.com/
Version: 0.1
.
Released under the GPL. The included font, "Dear Joe," is released by joebob of http://www.joebob.nl/, 
and is free to use for any purposes. The default picture supplied in the polaroid header image is 
copyrighted by Josh Lyman. I don't care if you keep it, but recommend you change it. And please don't 
take credit for it either! ;-) Have fun!.
.
*/

/* Color Schemes
   -------------
	Orange Dark: #AA3511
	Orange Light: #E0D3CD
	
	GreenBlue Dark: #618788
	Green Light: #D4DBD3
	Blue Light: #B6CAD1         */

body {
	background-image: url('../images/background.jpg');
	background-repeat: repeat-x;
	background-color: #FFFFFF; 
	margin: 0;
	font-family: "Century Gothic", Verdana, Arial, Helvetica, sans-serif;
}

#polaroid {
	position:absolute;
	left:0px;
	top:0px;
	width:279px;
	height:285px;
	background: url('../images/polaroid.jpg') no-repeat;
}

#header-img {
	position:absolute;
	left:279px;
	top:0px;
	width:486px;
	height:184px;
}

#subheader {
	position:absolute;
	left:279px;
	top:184px;
	width:60%;
	height:101px;
	margin: 3px 5px 0 35px;
}
	
		#subheader #search {
			float: left;
			width: 45%;
		}
		
		#subheader #cats {
			float: right;
			width: 45%;
		}

#sidebar {
	position:absolute;
	left:0px;
	top:285px;
	width:279px;
	margin: 10px 0 5px 3px;
}

#content {
	/*position:absolute;
	left:279px;
	top:285px;
	margin: 10px 20px 10px 35px;
	padding: 0;*/
	right:0;
	margin: 285px 20px 10px 300px;
	padding:0;
	z-index:0;
}

#footer {
	text-align: center;
	font-size:.7em;
	border: 1px solid #D4DBD3;
	width:100%;
	height:100%;
}

.post {
	border-top: 1px #E0D3CD dotted;
	padding: 7px 3px 1px 4px;
}

.comments {
	margin: 0 0 5px 5%;
	padding-left: 8px;
	/*border-left: 3px #618788 solid;
	border-bottom: 1px #618788 solid; */
}

/* Text Styles */

h1, h2, h3 {
	font-weight: bold;
	color: #AA3511;
}

.post_head {
	margin-top:-19px;
}

p {
	font-size: .8em;
}

a:link {
	color: #AA3511;
	text-decoration: underline;
}

a:visited {
	color: #618788;
	text-decoration: none;
	border: none;
}

a:hover {
	color: #E0D3CD;
	text-decoration:none;
	border-bottom: 1px #E0D3CD dashed;
}

.pagetitle {
	text-align:center;
	text-decoration:underline;
}
/* End Typography & Colors */

/* Calendar Styles */

#wp-calendar {
	border: 2px solid #333333;
	text-align: center;
	margin: 0 auto;
	padding: 0;
	font-size: smaller;
}

#wp-calendar caption {
	font: bold 1.2em 'Century Gothic', Verdana, Arial, Sans-Serif;
	text-align: center;
	background-color: #618788;
	color:#FFFFFF;
	border: 2px solid #333333;
	border-bottom: none;
	margin: 0 auto;
}

#wp-calendar tbody, #wp-calendar tfoot {
	background-color: #B6CAD1;
	padding: 0;
	margin: 0;
}

#wp-calendar th {
	padding: 0;
}

/* End Calendar Styles */

/* Postit Date */

.post .post_cal {
	border: 1px solid #A6A6A6;
	text-align: center;
	width: 80px;
	float: left;
	margin: 0 10px 5px 0;
}

	.post_cal .dayname {
		background-color: #AA3511;
		border-bottom: 1px solid #A6A6A6;
		color: #FFFFFF;
		font-size: smaller;
		font-weight: bolder;
		width: 100%;
	}
	
	.post_cal .daynum {
		border-bottom: 1px solid #A6A6A6;
		font-size: xx-large;
		font-weight: bold;
		width: 100%;
	}
	
	.post_cal .month, .post_cal .year {
		font-size: smaller;
		width: 100%;
	}
	
.postmetadata {
	font-weight: bold;
}

/* End Postit Date */

/* Sidebar Styles 
#sidebar h3 {
	font-size: medium;
}

#sidebar ul, #sidebar ul ol {
	margin: 0 10px 10px 5px;
	padding: 0;
	}

#sidebar ul li {
	list-style-type: none;
	list-style-image: none;
	margin-bottom: 15px;
	}

#sidebar ul p, #sidebar ul select {
	margin: 5px 0 8px;
	}

#sidebar ul ul, #sidebar ul ol {
	margin: 5px 0 0 10px;
	font-size: smaller;
	}

#sidebar ul ul ul, #sidebar ul ol {
	margin: 0 0 0 10px;
	}

ol li, #sidebar ul ol li {
	list-style: decimal outside;
	}

#sidebar ul ul li, #sidebar ul ol li {
	margin: 3px 0 0;
	padding: 0;
	}
/* End Sidebar Styles */

#sidebar ul {
	list-style-type: none;
	margin: 0 5px 10px 10px;
	font-size: smaller;
}

#sidebar ul li h3 {
	font-size: 1.35em;
}

#sidebar ul li ul li {
	list-style-type: square;
}

/* Seriously hacked out code for cool boxes */

.sidebox {
	margin: 0 auto; /* center for now */
	width: 17.5em; /* ems so it will grow */
	background: url('../images/sbbody-r.gif') no-repeat bottom right;
	font-size: 100%;
}

.boxhead {
	background: url('../images/sbhead-r.gif') no-repeat top right;
	margin: 0;
	padding: 0;
	text-align: left;
}

.boxhead h3 {
	background: url('../images/sbhead-l.gif') no-repeat top left;
	margin: 0;
	padding: 8px 30px 8px;
	font-weight: bold; 
	font-size: 1.2em; 
	line-height: .8em;
}

.boxbody {
	background: url('../images/sbbody-l.gif') no-repeat bottom left;
	margin: 0;
	padding: 5px 5px 10px 5px;
}