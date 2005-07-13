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
Theme Name: FastTrack

Theme URI: http://wpthemes.info
Version: 1.0
Description: A Theme from wpthemes.Info
Author: Sadish Balasubramanian
Author URI: http://www.simpleinside.com

Header Image by tkekkonen
http://sxc.hu/browse.phtml?f=view&id=101419

Icons from http://www.stylegala.com/features/bulletmadness/
*/
@import "verticalmenu.css";
body {
	margin:0;
	padding:0;
	font-family: Georgia, Times, Times New Roman, sans-serif;
	font-size: 0.9em;
	text-align:center;
	color:#29303B;
	line-height:1.3em;
	background: #886;
}
a, .linktext{
	color: #8a3207;	
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
	border:#8a3207 1px solid;
}
#rap 
{
	background:#fff url('../images/contentbg.jpg') center;
	width:700px;
	margin:0 auto;
	padding:8px;
	text-align:left;
	font-family: Trebuchet MS, Georgia, Arial, serif;
	font-size: 0.9em;
}
#header {
	background: url('../images/greentopa.jpg') no-repeat bottom;
 	height: 175px;
	margin: 0 auto;
	width:700px;
	padding:0;
}

#content {
	width:470px;
	float:left;
	padding:5px 0 5px 10px;
	margin:10px 0 0 10px;
	overflow:hidden;
}
#content-admin {
	width:650px;
	float:left;
	padding:5px 0 5px 10px;
	margin:10px 0 0 10px;
	overflow:hidden;
}
#sidebar {
	width:180px;
	float:right;
	padding:10px 8px;
	margin:0;
	font-size:1em;
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
blockquote{
	background: #EEE url(../images/blockquote.png) no-repeat bottom left;
	/*border: 1px solid #E0E0E0;*/
	padding: 10px 10px 30px 10px;
	margin: 1em 1em 1em 3em;
	width:250px;
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
	color: #0f0f0f;
	padding:130px 0 0 30px;
	text-align:left;
}
.description 
{
	margin:0;
	padding:10px 100px 0 10px;
	font-size:1.1em;
	color:#777;	
	display:none;
}
#sidebar h2 {
	margin: 0;
	padding:0 5px;
	font-size: 0.8em;
	color: #333;
	text-transform:uppercase;	
	border-bottom:#ccc 1px solid;	
}
h4 {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 1.1em;
	color: #999;
}
#sidebar ul {
	list-style-type: none;
	padding: 0 0 1em 5px;
	margin: 0;
	font-size: 0.9em;	
}
#sidebar ul li {
	margin: 0.5em 0 0 0;
	padding: 0;	
}
#sidebar li a:link, #sidebar li a:visited {
	color: #8a3207;
	text-decoration: none;
	border:none;
}
#sidebar li a:hover {
	color: #753206;
	text-decoration:underline;
	border:none;
}
#header a:link, #header a:visited {
	color: #333;
	text-decoration: none;
	border-bottom: none;
}
#header a:hover, #header a:active {
	color: #996;
	text-decoration: none;
	border-bottom: none;
}
#content ul {
	margin-left: 0;
	padding-left: 15px;

	list-style-type: none;
}
#content ul li {
	background: url('../images/bullet.png') no-repeat 0 7px;
	padding-left: 1.5em;
}
.post-footer, .copyright {
	margin-bottom: 3em;
	font-size: 0.9em;
	color: #666;
}
.post-content {
	padding: 1em 0 0;
}
.post-title {
	margin: 0 0 0.2em;	
	text-align: right;
	padding: 0.5em 1em 0 0;
	color: #999;
	border-bottom:#ccc 1px solid;
	font-family: "Lucida Grande", "Lucida Sans Unicode", lucida, Verdana, sans-serif;
font-size: 0.8em;
}
.post-title em {
	text-decoration: none;
	float: left;
	font-style: normal;
	padding:0;	
}
.post-info 
{
	margin:0;
	padding:0;
	font-size:1.1em;
	font-family:Georgia, Arial, Verdana, Serif;
}
#content h2, #content h3 {
	color: #666;
	font-family:Georgia, Arial, Serif;
	font-size:1.1em;
	margin:0;
}
.post-info a {
	text-decoration: none;
	color: #8a3207;
	border: none;
}
hr {
	display: none;
}
#footer {
	margin:0 auto;
	padding: 7px 0;
	border-top: 1px solid #996;
	clear: both;
	font-size: 0.8em;
	color: #999;
	text-align:center;width:690px;
}
#footer a {
border:none;
color:#7A7636;
}
#commentlist {
	font-size:1em;
	font-weight:bold;
	color: #ccc;
}
#commentlist li {
	color: #666;
	font-weight: normal;
	font-size:0.85em;
}
#commentlist cite {
	font-size: 0.8em;
	color: #808080;
	margin: 0 0 1em;
	padding: 0 0 0.5em;
}
cite a {
	border-bottom: 1px dotted #DC9204;
	text-decoration: none;
}
cite a:visited, a:hover {
	border-bottom: none;
}
#commentform #author, #commentform #email, #commentform #url, #commentform textarea {
	background: #fafafa;
	border: 1px solid #9ac2a7;
	padding: 0.2em;
}
#commentform textarea {
	width: 80%;
}
#commentform p {
	margin: 0 0 1em;
}
#commentlist li ul {
	border-left: 1px solid #ddd;
	font-size: 110%;
	list-style-type: none;
}
#comments,#respond {
	text-transform: uppercase;
	margin: 3em 0 1em 0;
	color: #AA7D39;
	font: 0.9em verdana, helvetica, sans-serif;
}
#topnav 
{
	list-style:none;
	font-size:0.9em;
	margin:0 auto;	
	padding:2px 0 2px 5px;
	text-align:right;	
	text-transform:lowercase;	
}
#topnav li 
{
	list-style:none;
	display:inline;
	padding:0 1em;
	margin:0;
}

#topnav li a:link, #topnav li a:visited, #topnav li a:hover, #topnav li a:active 
{
	text-decoration:none;	
	color:#666;
}
#topnav li a:hover
{
	border-bottom:#7A7636 3px solid;
	color:#7A7636;	
}
#navHome 
{
	padding-left:15px;
	background:url('../images/home.png') no-repeat left center;
}
#navAbout 
{
	padding-left:15px;
	background:url('../images/about.png') no-repeat left center;
}
#navArchives 
{
	padding-left:15px;
	background:url('../images/archives.png') no-repeat left center;
}
#navLinks 
{
	padding-left:15px;
	background:url('../images/links.png') no-repeat left center;
}
#navContact
{
	padding-left:15px;
	background:url('../images/contact.png') no-repeat left center;
}
#home #navHome, #about #navAbout, #links #navLinks, #contact #navContact, #archives #navArchives
{
	border-bottom:#7A7636 3px solid;
	color:#7A7636;	
}
