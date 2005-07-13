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
Theme Name: OrangeSky
Theme URI: http://blog.detlog.org/orangesky/
Description: WordPress theme inspired by Alexi Murdoch's song "Orange Sky".
Version: 1.5
Author: Naoko McCracken
Author URI: http://blog.detlog.org/

	This WordPress theme is released under GPL:
	http://www.opensource.org/licenses/gpl-license.php

	Thank you Michael Heilemann for creating the brilliant kubrick theme!
	I had learned a lot from it in the process of creating this one.
*/

/* General Rules */
body,
p, ul, ol, li, form,
h1, h2, h3, h4, h5, h6 {
	margin: 0;
	padding: 0;
	}

body {
	font-size: 62.5%; /* Resets 1em to 10px */
	font-family: 'lucida grande',verdana,arial,sans-serif;
	background: url(../images/os_bg.jpg) repeat-x #CFE8E8;
	color: #333;
	text-align: center;
	}

h1, h2, h3 {
	font-family: georgia,'times new roman',times,serif;
	}

h1 {
	font-size: 2.8em;
	text-align: left;
	padding: 8px 20px 0 20px;
	font-weight: normal;
	}
h1, h1 a:link, h1 a:visited {
	text-decoration: none;
	color: #4D0000;
	}

h1 a:hover, h1 a:active {
	text-decoration: none;
	color: #C30;
	}

.description {
	font-size: 1.2em;
	text-align: left;
	padding: 0 20px;
	color: #C30;
	}

h2 {
	font-size: 1.3em;
	}

h2.postdate {
	font-size: 1em;
	color: #666;
	padding: 15px 0 0 0;
	}

h2.posttitle {
	margin: 3px 0 0 0;
	}

h2.pagetitle {
	font-size: 1.5em;
	margin: 30px 0 0 0;
	text-align: center;
	color: #4D4D4D;
	}

#sidebar h2 {
	font-size: 1.2em;
	color: #066;
	margin: 5px 0 0;
	}

h2, h2 a, h2 a:visited, h3, h3 a, h3 a:visited {
	color: #066;
	}
a, h2 a:hover, h3 a:hover {
	color: #C30;
	text-decoration: none;
	}

h2, h2 a, h2 a:hover, h2 a:visited, h3, h3 a, h3 a:hover, h3 a:visited, #sidebar h2, #wp-calendar caption, cite {
	text-decoration: none;
	}

h3 {
	font-size: 1.3em;
	margin: 30px 0 0;
	}

/* End General Rules*/

/* Begin Layout */
#page {
	margin: 20px auto;
	width: 740px;
	text-align: left;
	background-image: url(../images/os_main.jpg);
	background-repeat: repeat-y;
	background-position: 0 0;

	}

#content {
	font-size: 1.2em;
    clear: both;
	float: left;
	width: 510px;
	margin-left: 20px;
    margin-right: 20px;
	}
/* Sliding Door technique by A List Apart */
#menu {
	float: left;
	width: 540px;
	font: bold italic 1.2em/normal georgia,'times new roman',times,serif;
	margin: 8px 0 0 10px;
	}

#menu ul {
	list-style: none;
	}

#menu li {
	float: left;
	background: url(../images/os_left.gif) no-repeat left top;
	padding: 0 0 0 5px;
	margin: 0 0 0 3px;
	list-style: none;
	}

#menu a {
	float: left;
	display: block;
	background: url(../images/os_right.gif) no-repeat right top;
	padding: 4px 9px 3px 6px;
	text-decoration: none;
	font-weight: bold;
	color: #E5A153;
	}
    /* Commented Backslash Hack
	 hides rule from IE5-Mac \*/
#menu a { float:none; }
    /* End IE5-Mac hack */

#menu a:hover {
	color:#E5D6B8;
	}

#header {
	height: 132px;
	width: 550px;
	float: left;
	background: url(../images/os_header.jpg) no-repeat 8px 0; 
	}

#sidebar {
	padding: 30px 0;
	margin: 0 0 0 550px;
	font: 1.2em 'Lucida Grande',verdana,arial,sans-serif;
	background: url(../images/os_sidebar.jpg) no-repeat #D0E8E8;

	}

#footer {
	width: 550px;
	}

#footer p {
	padding: 5px 0 10px 0;
	text-align: center;
	}

.entry {
	padding: 15px 0 10px 0;
	line-height: 1.4;
	}

.entry p {
	padding: 0 0 1em 0;
	}

.post {
	padding: 0 0 25px 0;
	}

.alt {
	background-color: #FFF5E5;
	padding: 10px;
	}

.navigation {
	display: block;
	text-align: center;
	margin: 10px;
	}

/* Begin ../images */

img.centered {
	display: block;
	margin: 0 auto;
	}
	
img.floatright {
	padding: 4px;
	margin: 0 0 5px 10px;
	display: inline;
	float: right;
	}

img.floatleft {
	padding: 4px;
	margin: 0 10px 5px 0;
	display: inline;
	float: left
	}
/* End ../images */


/* Begin Lists */ 
.entry ul,
ul.commentdata,
ul.links {
	margin-left: 0px;
	padding: 0 0 1em 20px;
	list-style: none;
	}

ul.commentdata {
	padding: 0;
	}

.entry ul li,
ul.commentdata li,
ul.links ul li {
	background: url(../images/os_entryarrow.gif) 0 3px no-repeat;
	padding: 0 0 0 14px;
	margin: 0 0 2px 0;
	list-style: none;
	}

ul.links h2 {
 	padding: 10px 0 5px 0;
 	}
 
.entry ol {
	padding: 0 0 1em 40px;
	}

.postmetadata ul, .postmetadata li {
	display: inline;
	list-style-type: none;
	list-style-image: none;
	font-family: georgia,'times new roman',times,serif;
	}

#sidebar a, #sidebar a:link {
	color: #066;
	}

#sidebar a:visited {
	color: #099;
	}

#sidebar a:hover, #sidebar a:active {
	color: #999;
	}

#sidebar ul, #sidebar ul ol {
	padding: 0 10px;
	}

#sidebar ul li {
	list-style: none;
	margin-bottom: 15px;
	}

#sidebar ul p, #sidebar ul select {
	margin: 5px 0 8px 8px;
	font-size: 1em;
	}

#sidebar ul ul, #sidebar ul ol {
	margin: 5px 0 0 5px;
	}

#sidebar ul ul ul, #sidebar ul ol {
	margin: 0 0 0 10px;
	}

ol li, #sidebar ul ol li {
	list-style: decimal outside;
	}

#sidebar ul ul li, #sidebar ul ol li {
	margin: 2px 0 0;
	background: url(../images/os_sidearrow.gif) 0 3px no-repeat;
	padding: 0 0 0 14px;
	}

/* End Lists */

/* Begin Form */
#searchform {
	text-align: center;
	padding: 10px 0;
	}

#sidebar #searchform #s {
	width: 95px;
	padding: 1px;
	}

#sidebar #searchsubmit {
	padding: 0;
	}

.entry form {
	text-align:center;
	}

select {
	width: 130px;
	}

/* Begin Miscellaneous */
acronym, abbr {
	cursor: help;
	border-bottom: 1px dashed #999;
	font-size: 0.9em;
	}

code {
	font: 1em 'courier new',courier,fixed,monospace;
	padding: 0 0 1em 0;
	}

small {
	font-size: 0.9em;
	line-height: 1.5;
	}

dl {
	padding: 0 15px;
	}
dt {
	font-weight: bold;
	}
dd {
	padding: 2px 0 6px 0;
	}

blockquote {
	margin: 0 30px 1em 10px;
	padding: 1em 5px 0 15px;
	border-left: 3px solid #C63;
	background: #FFF;
	}
blockquote cite {
	margin: 5px 0 0;
	display: block;
	}

.centered {
	text-align: center;
	}

a img {
	border: none;
	}

small, #sidebar, .nocomments, .postmetadata, blockquote, strike, .commentdata {
	color: #808080;
	}

a:hover {
	color: #066;
	}
/* End Miscellaneous */
?>