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

.xar-mod-body  {
width: auto;
	margin:0px auto;
	text-align:left;
	padding:0px;
}

.xar-menu-section{
       text-align:left;
	vertical-align: top;

}

.xar-block-title,.xar-block-title-right{
	font-weight: bold;
	font-size:14px;
	border-bottom: 1px dotted black;
}

.xar-menu-item , .xar-menu-item-current {

}

.xar-menu-subitem,  .xar-menu-subitem-current  {
	margin-left: 10px;

}
.xar-block-body  {
    padding-bottom:10px;
}

.xar-mod-foot {}
.xar-alt {background-color: #fafafa; }
.xar-accent {background-color: #fafafa;  }
.xar-alt-outline {border: 1px solid #000000; }
.xar-accent-outline {border: 1px solid #000000;}
.xar-norm-outline {border: 1px solid #000000;  }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
	font-weight: bold;
	border-bottom: 1px dotted black;
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
