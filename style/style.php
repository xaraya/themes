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
Theme Name: Coffee Cup
Theme URI: http://www.zeniths.net
Description: Coffee Cup theme based on <a href="http://www.brokenkode.com/manji/">Manji2</a>
Version: 1.01
Author: Zenith
Author URI: http://www.zeniths.net

Coffee Cup theme for WordPress 1.5 designed by Zenith (www.zeniths.net), based on the Manji2 template.

Manji2 Credits -
Manji2 is an extension of the original Manji theme. The development was
done by Khaled Abou Alfa and Joshua. Originally released 30th January 2005.

Original Manji Credits -
The Manji template designed by Khaled Abou Alfa (www.brokenkode.com) 
and Root (www.atthe404.com/blog); Root is currently offline. Please go read the
FAQ on www.brokenkode.com/board for further information.

Joshua (aka Alphaoide) has been helping complete this project in the wake of 
Root's disappearance.

License -
The CSS, XHTML and design is released under GPL:
http://www.opensource.org/licenses/gpl-license.php

Theme for blogging software. Initially released for Wordpress.
Copyright (C) 2004 khaled abou alfa.

This program is free software; you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software 
Foundation, version 2 of the License.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU General Public License for more details.
*/

/* <<<<<<<<<<<<<<<<<<<<<<<<<< Structural Layout >>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
body {
 background: #afa48e;
 color: #7f6f57;
 margin:  0;
 padding: 0;
 text-align: center; /* IE hack Part 1 */ 
}
/*---------------------------- Site Navigation -------------------------------*/
#hnav {
 width: 770px;
 margin: 8px auto;
 height: 23px;
 background: #fff4df;
 border-bottom: 0px solid #ccced2;
 border-left: 0px solid #f5f6f7;
 border-right: 0px solid #ccced2;
}
#header {
 float: left;
 width: 200px;
 margin: 0px;
 padding: 0px;
 text-align: left;
 height: 20px;
}
#hmenu {
 margin: 2px 5px 0 0;
 text-transform:lowercase;
 text-align: right;
 float: right;
 width: 475px;
}
#masthead {
 background: url(../images/coffeehead.jpg);
 width: 750px;
 height: 340px;
 margin: 0 auto;
 padding: 0;
 border-top: 0px solid #7f7157;
 border-right: 1px solid #7f7157;
 border-bottom: 1px solid #7f7157;
 border-left: 1px solid #7f7157;
}

/*------------------------------- Main Body ----------------------------------*/
#rap {
width:790px;
margin: 0px auto;
padding:0px;
background: #fff4df;
border-left: 5px solid #7f7157;
border-right: 5px solid #7f7157;
}
#container {
 width: 770px;
 margin: 0px auto;
 background: #fff4df;
 border-left: 0px solid #f3782a;
 border-right: 0px solid #f3782a;
 font-family: Arial, Verdana, Helvetica, sans-serif;
 font-size: .75em;
 text-align: left; /* IE hack Part 2 */
 border-top: 0px solid #f3782a;
 border-bottom: 0px solid #f3782a;
}
#topcontentdouble {
 float: right;
 width: 540px;
 height: 27px;
 background: #fff4df;
 margin: 9px 10px 0 0;
 display: inline;
}
#topcontent {
 width: 730px;
 background: #fff4df;
 margin: 9px auto 0 auto;
 height: 27px;
}
#content {
 float: right;
 width: 560px;
 background: #fff4df;
 margin:  0 10px 0 0;
 display: inline;
}
#bottomcontentdouble {
 clear: both;
 width: 730px;
 background: #fff4df;
 margin: 0 10px 9px 10px;
 height: 27px;
}
#singlecontent {
 width: 730px;
 background: #fff4df;
 padding-top:0;
 margin:  0 auto;
}
.post {
 margin-top: 0px;
 margin-left: 15px;
 margin-right: 20px;
 margin-bottom: 70px;
}
.singlepost {
 margin-top: 0px;
 margin-left: 15px;
 margin-right: 20px;
 margin-bottom: 70px;
}
#bottomcontent {
 width: 730px;
 background: #fff4df;
 margin: 0px auto 0px auto;
 padding-bottom: 9px;
 height: 27px;
}
.meta {
 font-size: .9em;
 line-height: 18px;
}
.feedback {
 float: right;
 font-size: .9em;
 line-height: 28px;
}
.author {
 width: 200px;
 float: right;
 text-align: right;
}
/*---------------------------- Page Navigation -------------------------------*/
.postnavigation {
 height: 45px;
}
.left {
 float: left;
 padding-left: 105px;
}
.right {
 float: right;
 padding-right: 105px; 
}
.leftdouble {
 float: left;
 padding-left: 10px;
}
.rightdouble {
 float: right;
 padding-right: 10px; 
}

/* ------------------------------ Sidebars -----------------------------------*/
#sidebar {
 position: relative;
 float: left;
 width: 185px;
 margin: 0 0 0 10px;
 font-family: Arial, Verdana, Helvetica, sans-serif;
 font-size: 1.0em;
 text-align: left; /* IE hack Part 2 */
 display: inline;
}
#sidebar ul {
 position: relative;
}
#sidebar ul li {
 list-style-type: none;
 list-style-image: none;
 color: #4f4331;
}
#sidebar ul, #sidebar ul li {
 margin: 0;
 padding: 0;
}
#sidebar ul li ul{
 background: #bfb39b;
 border-top: 1px solid #fff4df;
 margin: 0 5px 2px 0px;
 padding: 1px 0 1px 5px;
 color: #4f4331;
}

#sidebar h2 {
 background: #7f7157;
 color: #fff4df;
 margin: 10px 5px 3px 0px;
 padding:  1px 0 1px 5px;
}
#sidebar a {
 display: block;
 padding: 2px;
 width: 160px;
 padding-left: 12px;
 border-bottom: 1px solid #fff4df;
 background-image: url(../images/icon1.gif); 
 background-repeat: no-repeat;
 background-position: 0 55%;
 color: #4f4331;
 text-decoration: none;
}
#sidebar a:hover {
 display: block;
 padding: 2px;
 width: 160px;
 padding-left: 12px;
 border-bottom: 1px solid #fff4df;
 background-image: url(../images/icon2.gif); 
 background-repeat: no-repeat;
 background-position: 0 55%;
 background-color: #cfc2a8; 
 color: #4f4331;
 text-decoration: none;
}

/*
The following is the fix
for 3-pixel-jog bug in IE 
*/
/* Hide from IE5-mac. Only IE-win sees this. \*/ 
* html #content {
 /*margin-right: 7px;*/
}
* html #sidebar {
 height: 1%;
}
/* End hide from IE5/mac */





/* --------------------------- 'Sidebar'(bottom search bar) structure -------------------------- */
#menu {
/*margin: 0px auto;*/
 margin: 8px;
 width: 750px;
 height: 45px;
 background: #fff4df;
 border-top: 0px solid #ce5e16;
 border-right: 0px solid #ce5e16;
 border-bottom: 0px solid #ce5e16;
 border-left: 0px solid #ce5e16;
}
#searchform {
 float: left;
 margin-top: 12px;
 padding-left: 20px;
}
#topimage {
 margin: 2px 0 0 0; 
 cursor: pointer;
 width: 60px;
 height: 40px;
 background: url(../images/topimage.jpg) no-repeat top;
 float: right;
 padding-right: 9px;
 padding-top: 3px;
}
#topimage a{
 display:block;
 height:100%;
 overflow:hidden;
 text-decoration:none;
}
#topimage a:hover {
 border: 0;
}

/* ------------------------------- Credits ---------------------------------- */
#footer {
 margin: 10px auto;
 width: 750px;
 font-size: .8em;
}
#footer p {
margin-top: 0;
}
.clearer {
 clear: both;

 line-height: 0px;
}

/*------------------------------ H Menu Styling ----------------------------- */
#top { 
 display: inline;
 list-style-type: none;
}
#hnav ul li{
 display: inline;
}
#hnav ul li a {
 color: #4f4331;
 text-decoration: none;
 padding: 5px 0px 5px 30px;
 font-size: 0.7em;
 font-family: Arial, Verdana, Helvetica, sans-serif;
 font-weight: normal;
}
#hnav ul li a:hover {
 color: #aaaa88;
 border-top: 1px solid #aaaa88;
 border-bottom: 1px solid #aaaa88;
}

/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<< Typography >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
/* ------------------------------- General ---------------------------------- */
a {
 color: #91af83;
 text-decoration: none;
}
a:hover {
 color: #bfb39b;
 border-top: 1px solid #bfb39b;
 border-bottom: 1px solid #bfb39b;
 text-decoration: none;
}
top a {
 border: 0;
 text-decoration: none;
}
blockquote {
 background: #cfc2a8;
 color: #4f4636;
 border-left: 6px solid #7f7157;
 padding: 10px 20px;
}
code {
 font-family: Arial, Verdana, Helvetica, sans-serif;
 font-size: 1.0em;
}
h1 {
 margin-bottom: 4px;
 padding: 0;
 color: #523419;
}
h1 a {
 margin: 0;
 padding: 0;
 text-decoration: none;
 color: #6f6f6f;
}
h2 {
 color: #7f7157;
 font-family: Arial, Helvetica, sans-serif;
 font-size: 1.1em;
 margin-bottom: 0px;
 margin-top: 40px;
 margin-left: 4px;
}
.singlepost h2{
margin-top: 0px;
}
h3 {
 text-align: left;
 color: #778868;
 margin: 0;
 margin-top: 3px;
 padding: 0;
 font-size: 0.9em;
 line-height: 26px;
 font-weight: normal;
}

/* ------------------------------Site Navigation ---------------------------- */
#blogtitle {
 margin: 0;
 padding: 5px;
 font-family: Arial, Helvetica, sans-serif;
 font-weight: normal;
 font-size: 0.8em;
}
#blogtitle a{
 color: #4f4331;
 font-weight: bold;
}
#blogtitle a:hover{
 color: #aaaa88;
 font-weight: bold;
 border: 0;
}

/* -------------------------------- Main Body ------------------------------- */
.post {
 color: #7f6f57;
 text-align: justify;
}
.singlepost {
 color: #7f6f57;
 text-align: justify;
}
.posted {
 color: #a3945d;
}
.title a  {
 text-align: left;
 height: 20px;
 color: #523419;
 display: block;
 text-decoration: none;
 font-size: 1.2em;
 font-weight: bold;
}
.title a:hover {
 color: #bfb39b;
 border: 0;
}
.storycontent {
 border-bottom: 1px solid #7f6f57;
 padding: 0px 0px 5px 0px;
}
.singlepost p {
margin-top: 0;
}
.storycontent a {
 text-decoration: none;
}
.storycontent a:hover {
 text-decoration: none;
}
.storycontent a:visited {
 text-decoration: none;
}
.img a {
 text-decoration: none;
}

/* ----------------------------- Page Navigation ---------------------------- */
.left a{
 color: #91af83;
 font-size: 0.9em;
 text-decoration: underline;
}
.left a:hover {
 border: 0;
}
.right a{
 font-size: 0.9em;
 color: #91af83;
 text-decoration: underline;
}
.right a:hover {
 border: 0;
}
.leftdouble a{
 color: #91af83;
 font-size: 0.9em;
 text-decoration: underline;
}
.leftdouble a:hover {
 border: 0;
}
.rightdouble a{
 font-size: 0.9em;
 color: #91af83;
 text-decoration: underline;
}
.rightdouble a:hover {
 border: 0;
}


/* -------------------------------- Credits --------------------------------- */
p.credits {
 padding: 0px 0px;
 text-align: center;
 margin: 10px; 
 color: #9e9e9e;
 font-family: Arial, Helvetica, sans-serif;
 font-size: 0.8em;
}
p.wordpress {
 margin: 8px;
 padding: 2px;
 border-bottom-width: 1px;
 border-bottom-style: solid;
 border-bottom-color: #7f7157;
}

/*--------------------------- Additional code ------------------------ */

/*	Using 'class="alignright"' on an image will (who would've
	thought?!) align the image to the right. And using 'class="centered',
	will of course center the image. This is much better than using
	align="center", being much more futureproof (and valid) */
	
img.centered {
        padding: 2px;
	display: block;
	margin-left: auto;
	margin-right: auto;
        margin-bottom: 2px;
        border: 1px solid #7f7157;
	}	
img.alignright {
	padding: 2px;
	margin: 0 0 2px 7px;
	display: inline;
        border: 1px solid #7f7157;
	}
img.alignleft {
	padding: 2px;
	margin: 0 7px 2px 0;
	display: inline;
        border: 1px solid #7f7157;
	}
.alignright {
	float: right;
	}	
.alignleft {
	float: left;
            }