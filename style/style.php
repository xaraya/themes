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
Theme Name: Connections
Theme URI: http://wpthemes.info
Version: 1.0
Description: A Theme from wpthemes.Info
Author: Patricia Muller
Author URI: http://www.vanillamist.com/blog/
*/
body {
	margin:0;
	padding:0;
	font-family: 'Trebuchet MS',Georgia, Times, Times New Roman, sans-serif;
	font-size: 0.9em;
	text-align:center;
	color:#29303B;
	line-height:1.3em;
	background: #F3F6ED;
}
a {
	color: #909D73;	
	text-decoration:none;
}
a:visited {
	color: #8a3207;
}
a:hover {
	color: #753206;
	text-decoration:underline;
}
input, textarea 
{
	background: #F3F6ED;
	border: #E1D6C6 1px solid;
}
#rap 
{
	background:#fff url(../images/rap.jpg) center repeat-y;
	width:760px;
	margin:0 auto;
	padding:0px 8px;
	text-align:left;
	font-family: Trebuchet MS,Georgia, Arial, serif;
	font-size: 0.9em;
}
#header {
	background:#fff url(../images/top.jpg) no-repeat bottom; 	
 	height: 183px;
	margin: 0 auto;
	width:760px;
	padding:0;
	border:#fc9 0px solid;
}
#main 
{
	margin:0 auto;
	padding:0;
	background:#000 url(../images/content_bg.gif) repeat;
	width:740px;
}
#content {
	width:510px;
	float:left;
	padding:5px;
	margin:0;
	overflow:hidden;
	display:inline;
}#sidebar {
	width:186px;
	float:right;
	padding:0px 8px 10px 8px;
	margin:0;
	font-size:1em;
	color:#333;
	display:inline;
} 
a img {
	border: none;
}
acronym, abbr {
	border-bottom: 1px dotted #0c6bf0;
}
acronym, abbr, span.caps {
	cursor: help;
	letter-spacing: .07em;
}
code {
	font-size: 1em;
	font-style: italic;
}
blockquote {
	margin: 15px 30px 0 45px;
	padding: 0 0 0 45px;
	background: url(../images/blockquote.gif) no-repeat left top;
	font-style:italic;
}

cite {
	font-size: 0.9em;
	font-style: normal;
}
h3 {
	margin: 0;
	padding: 0;
	font-size:1.3em;
}
p {
	margin: 0 0 1em;
	padding: 0;
	line-height: 1.5em;
}
h1, h2, h3, h4 {
	font-family: Georgia, "Lucida Sans Unicode", lucida, Verdana, sans-serif;
	font-weight: normal;
	letter-spacing: 1px;
}
#header h1 
{
	margin: 0;	
	font-size: 1.6em;	
	padding:10px 20px 0 0;
	text-align:right;	
}
#header h1 a 
{
	color:#B5C09D;
	text-decoration:none;
}
#header h1 a:hover 
{
	color:#F7F3ED;
}
#header #desc
{
	font-weight:normal;
	font-style:italic;
	font-size:1em;
	color:#B5C09D;
	text-align:right;
	margin:0;
	padding:0 20px 0 0;
}
#sidebar h2 {
	margin: 10px 0 0 0;
	padding:2px;
	font-size: 1em;
	color: #676E04;
	text-align:center;
	background:url(../images/sidenav_top.jpg) no-repeat center;
	border:#ccc 0px solid;
	height:22px;
	font-weight:bold;
}
#sidebar ul {
	list-style-type: none;
	padding: 5px;
	margin: 0;
	font-size: 0.9em;	
	padding-bottom:3em;
	background:#F3F6ED url(../images/sidenav_bottom.jpg) no-repeat bottom;
	border:#E1D6c6 1px solid;
	border-top:#f3f6ed 1px solid;
}
#sidebar ul li {
	margin: 0.1em 0 0 0;
	padding: 0;	
}
#sidebar li a {
	text-decoration: none;
	border:none;
}
#sidebar li a:link {
	color: #909D73;	
}
#sidebar li a:visited {
	color: #999999;	
}
#sidebar li a:hover, #sidebar li a:active {
	color: #990000;
}
#content ul {
	margin-left: 0;
	padding-left: 45px;
	list-style-type: none;
}
#content ul li {
	background: url(../images/bullet.gif) no-repeat 0 7px;
	padding-left: 1.5em;
}
.post 
{
	margin:0 0 30px 0;
}
.post-info 
{
	font-size:0.85em;
	font-family: Verdana, Arial, Sans-Serif;
	margin:0;
	padding:0;
	color:#333;
}
.post-info a
{
	color:#990000;
}
.post-info a:hover 
{
	color:#000;
}
.post-content {
	padding:10px 0;
	margin:3px 0;
	border-top:#BBC4A3 1px solid;	
	font-family: Georgia, Verdana, Arial, serif;
	font-size:12px;
}
.post-title {
	font-family:Georgia, Arial, Serif;
	font-size:1.3em;
	margin:0;
	font-weight:bold;
}
.post-title a:link, .post-title a:visited, .post-title a:hover, .post-title a:active
{
	text-decoration:none;
	color:#676E04;
}
.post-date {
	float: left;
	color: #BBC4A3;
	font-family: Georgia,'Lucida sans ms', Verdana, Arial, Helvetica, sans-serif;
	font-size: 0.9em;
	text-align: center;
	font-weight: bold;
	margin: 3px 10px 0 0;
	padding: 8px 3px;
	width: 55px;
	background: #E7EBDE;
	line-height:1em;
}
.post-footer 
{
	padding-top:20px;
	background:url(../images/divider.gif) no-repeat center;
}
#footer {
	margin:0 auto;
	padding: 7px 0;
	border-top:#BBC4A3 1px solid;
	clear: both;
	font-size: 0.8em;
	color: #999;
	text-align:center;
	width:740px;
}
#footer a {
border:none;
color:#7A7636;
}

}
#topnav 
{
	list-style:none;
	font-size:0.9em;
	margin:0 auto;	
	padding:12px 20px 0 0;
	text-align:right;	
	font-family:Verdana, Arial, Sans-Serif;
}
#topnav li 
{
	list-style:none;
	display:inline;
	padding:0;
	margin:0;
	font-weight:bold;
}

#topnav li a:link, #topnav li a:visited
{
	text-decoration:none;	
	color:#BBC4A3;
}
#topnav li a:hover, #topnav li a:active
{
	color:#F7F3ED;	
}