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
}

.xar-mod-foot {}
.xar-alt {background-color: #fff4df; }
.xar-accent {background-color: #fff4df; }
.xar-alt-outline {border: 1px solid #7f6f57; }
.xar-accent-outline {border: 1px solid #4f4331; }
.xar-norm-outline {border: 1px solid #4f4331; }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
   font-weight: bold;
   font-size: 12px;
}

.xar-error {
   color: #000;
}