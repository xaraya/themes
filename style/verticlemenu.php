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

div#hmenu {
/* 	width: 100%; */
	padding: 0 10px;
	margin: 3px 0 0 0;
/* 	float:left; */
	height:20px;
	width:740px;
	position:relative;
	color:#f1f1f1;
/* 	background-color: #BB0101; */
}

* html div#hmenu { z-index:9998;}

div#hmenu li#hmenulabel {
	padding: 0 10px;
	display:block;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 11px;
	line-height: 12px;
	font-family: arial, helvetica, sans-serif;
}
div#hmenu ul#hmenuroot a.empty {
	text-transform: uppercase;
	color: #aaaaaa;
	font-weight: bold;
	font-size: 11px;
	line-height: 12px;
	font-family: arial, helvetica, sans-serif;
	width:auto;
}

#hmenuroot, #hmenuroot ul {
	/* all lists */
	padding: 0;
	margin: 0;
	list-style: none;
	float: left;
/* 	width: 11em; */
}

div#hmenu ul#hmenuroot li.cat {
   width:auto;
}

#hmenuroot li {
	/* all list items */
	position: relative;
	display:block;
	float: left;
	height:12px;
	line-height: 12px;
	margin: 0;
/* 	width: 120px; */
}

#hmenuroot li ul {
	/* second-level lists */
	position: absolute;
	left: -999em;
	margin:0;
	z-index:9999;
	width:128px;
/* 	margin-left: 11.05em; */
/* 	margin-top: -1.35em; */
}

#hmenuroot li ul ul {
	/* third-and-above-level lists */
    /* 	left: -999em; */
    position: absolute;
    top:1px;
    margin-left:100px;
    padding-bottom:2px;
    border:2px solid red;
}

* html #hmenuroot li ul ul { margin-left:120px; }

#hmenuroot li a {
	/* 	width: 150px; */
	/* 	w\idth: 10em; */
	display: block;
	color: #9a9a9a;
	text-decoration: none;
	background-color: #f1f1f1;
	padding: 0 3px;
	margin: 0 0 -1px 0;
	font-size: 10px;
	font-family: arial, helvetica, sans-serif;
	font-weight: bold;
	border-color: #EBEBEB #BBBBBB #BBBBBB #EBEBEB;
	border-width: 1px;
	border-style: solid;
}

#hmenuroot li li a {
    width:120px;
}

#hmenuroot li a:hover {
	color: #f1f1f1;
	background-color: #bbbbbb;
}

/* #hmenuroot li:hover ul ul, #hmenuroot li:hover ul ul ul, #hmenuroot li.over ul ul, #hmenuroot li.over ul ul ul { left: -999em; } */

#hmenuroot li:hover ul, 
#hmenuroot li li:hover ul, 
#hmenuroot li li li:hover ul, 
#hmenuroot li.over ul, 
#hmenuroot li li.over ul, 
#hmenuroot li li li.over ul {
	/* lists nested under hovered list items */
	left: auto;
	z-index:10000;
}
/* * {outline:1px solid red;} */