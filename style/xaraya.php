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

img 
{
    border: 0;
}

th 
{
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
tfoot {}

/*  XARAYA REQUIRED ANONYMOUS CLASSES  */

/* No Display for this in this theme */
.xar-mod-head {
   display: none;
}

.xar-mod-title {
   font-size: 1.4em;
   font-weight: bold;
}

.xar-mod-body {
	margin: 0px;
	padding: 0px;
}

.xar-mod-foot {}
.xar-alt {background-color: #ECEAB6; }
.xar-accent {background-color: #ECEAB6; }
.xar-alt-outline {border: 1px solid #B6A25D; }
.xar-accent-outline {border: 1px solid #B6A25D; }
.xar-norm-outline {border: 1px solid #B6A25D; }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
   font-weight: bold;
   font-size: 1.2em;
}

.xar-error {
   color: #000;
}

form {
    margin: 1em 0;
    padding: 0;
    display: block;
}

button { border: 2px outset #f0f0f0; }

input,
select,
textarea {}

legend {
    color: #CC3300;
    border: 1px solid #aaaaaa;
    margin: 0 -1px;
    padding: 1px 5px;
    font-weight: bold;
    min-width:15em;
    display:block;
    background-image: url(../images/gradients.png);
    background-position: 0px -410px;
    background-repeat: repeat-x;
}

fieldset {
    border: 1px solid #aaaaaa;
    margin: 1em 0;
    padding:5px;
}

label.xar-form-label {
    padding: 2px;
    text-align: right;
    padding-left: 5px;
    margin: 0 5px 0 0;
    font-weight: bold;
    color: #333366;
    background-color: #f9f9f9;
    border:1px solid #f0f0f0;
    clear:left;
}