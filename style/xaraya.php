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

th {
   font-weight: bold;
}

td {
}
table {
	border: 0px;
/* 	margin: 0px; */
/* 	padding: 0px; */
}
thead {}
tbody {}
tfoot {
}

/*  XARAYA REQUIRED ANONYMOUS CLASSES  */

/* No Display for this in this theme */
.xar-mod-head {
   display: none;
}

.xar-mod-title {
   font-size: 14px;
   font-weight: bold;
}

.xar-mod-body {
	margin: 0px;
	padding: 0px;
	font-size: 0.9em;
}
#sidebar ul.xar-menu-section li.xar-menu-section{
	font-size:95%;

}

#sidebar .xar-block-title, #sidebar .xar-block-title-right{
	font-family: Georgia, "Lucida Sans Unicode", lucida, Verdana, sans-serif;
	font-weight: normal;
	letter-spacing: 1px;
		margin: 0;
	padding:0 5px;
	font-size: 0.8em;
	color: #333;
	text-transform:uppercase;	
	border-bottom:#ccc 1px solid;
}

li.xar-menu-item , li.xar-menu-subitem, li.xar-menu-item-current, li.xar-menu-subitem-current,
ul.xar-menu-item, ul.xar-menu-subitem, ul.xar-menu-item-current, ul.xar-menu-subitem-current  {
   color: #8a3207;
	margin: 0.5em 0 0 0;
	padding: 0;
	font-size: 100%;
}

li.xar-menu-item a:link, li.xar-menu-item a:visited,
li.xar-menu-item-current a, li.xar-menu-item-current a:visited,
li.xar-menu-subitem-current a, li.xar-menu-subitem-current a:visited  {
    color: #8a3207;
	text-decoration: none;
	border:none;
    font-size:110%;
}


.xar-mod-foot {}
.xar-alt {background-color: #fafafa; }
.xar-accent {background-color: #fafafa;  }
.xar-alt-outline {border: 1px solid #9ac2a7; }
.xar-accent-outline {border: 1px solid #9ac2a7;}
.xar-norm-outline {border: 1px solid #9ac2a7;  }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
   font-weight: bold;
   font-size: 12px;
}

.xar-error {
   color: #000;
}
.xar-blockedit {
	background-image: url(../images/extlinke.gif) !important;
	background-position: left top;
	background-repeat: no-repeat;
	float: left;
	width: 11px;
	height: 1.0em;
	padding: 0;
	margin: 0;
}
