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
@import "verticalmenu.css";
/*
Theme Name: Notebook
Theme URI: http://chasethestars.com
Description: A Daily Diary....  Theme made by <a href="http://chasethestars.com">Stacee Leung</a>, Coded by <a href="http://php-princess.net">Daynah Nguyen</a>
Version: 1.0
Author: Stacee Leung
Author URI: http://chasethestars.com

The CSS, XHTML and design is released under GPL:
http://www.opensource.org/licenses/gpl-license.php
*/


A:link    {color:#336699;text-decoration:none;}
A:visited {color:#336699;text-decoration:none;}
A:active  {color:#132C4F;text-decoration:none; border-bottom: 1px dashed #132C4F;}
A:hover   {color:#132C4F;text-decoration:none; border-bottom: 1px dashed #132C4F;}

body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
	color: #000000;
	background-color: #96B5DF;
	text-align: center;
        margin:10px 0px; padding:0px;
}

#Content {
	width:750px;
	margin:0px auto;
	text-align:left;
	padding:0px;
	}

.sidemenuhead, h2 {
	font-weight: bold;
	border-bottom: 1px dotted black;

}

td h1 { text-align:center; }

.header
{
    font-weight: bold;
}

.headertable
{
    margin-bottom: 20px; 
    width: 747px;
}
.headertable td { padding: 0px;}

/* Lists */
ul
{
	list-style-type:none;
	margin-left: 0; padding-left: 0;
}

/* Lists in Lists have margin */
ul ul
{
	margin-left: 10px; padding-left: 0;
}

/* Header in list */
li h2
{
	font-size: 14px;
	font-weight: bold;
}

td {
        text-align:left; 
	vertical-align: top;
}
table {
	background-color:#FFFFFF;
}
input, textarea {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
	color: #000000;
	border: 1px solid black;
        padding: 2px;
}

textarea {
        -moz-border-radius: 10px;
        padding: 5px;
}

.comments 
{ 
        text-align:right; 
        border-bottom: 1px dotted black;
        margin-bottom: 10px;
        padding-bottom: 10px;
}

/* Background Images for Table */
.bg06 
{
        background-image: url(../images/06.jpg);
        width:9px;
}

.bg08 
{
        background-image: url(../images/08.jpg);
        width:8px;
}

.bg10
{
        background-image: url(../images/10.jpg);
        width: 13px;
}

.bg12 
{
        background-image: url(../images/12.jpg);
        width: 41px;
}

td img {padding: 0px; margin: 0px;}

form
{
      margin: 0px;
      padding: 0px;
}

/* Images to float right */
.floatright
{
float: right;
margin: 0 0 10px 10px;
border: 1px solid #666;
padding: 0px;
}

/* Images to float left */
.floatleft
{
float: left;
margin: 10px 10px 0 0;
border: 1px solid #666;
padding: 0px;
}
