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
.xar-alt {background-color: #eee; }
.xar-accent {background-color: #eee; }
.xar-alt-outline {border: 1px solid #ccc; }
.xar-accent-outline {border: 1px solid #ccc; }
.xar-norm-outline {border: 1px solid #ccc; }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
   font-weight: bold;
   font-size: 1.2em;
}

.xar-error {
   color: #000;
}

blockquote 
{
	margin: 1em 0;
    margin-left: 40px;
    margin-right: 20px;
	padding-left: 30px;
	padding-right: 30px;
	padding-bottom: 10px;
    font-size: .9em;
	color: #000;
    border-bottom: #ccc 1px dotted;
	background: url(../images/bq.gif) top left no-repeat;
}

form {
    margin: 1em 0;
    padding: 0;
    display: block;
}

button { border: 2px outset #f0f0f0; }

input,
select,
textarea {
	border: 1px solid #ddd;
	background: #fff;
	color: #443;
	padding: 3px;
	font-family: Trebuchet MS, Verdana, Arial, Helvetica, sans-serif;
    font-size: .9em;
}

input:hover,
input:focus
	{ border: 1px solid #aaa; }
select:hover,
select:focus
	{ border: 1px solid #aaa; }
textarea:hover,
textarea:focus
	{ border: 1px solid #aaa; }

img {
    border: none;
    }

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
    float: left;
    width: 20em;
    height: 2em;
    vertical-align: center;
    background-color: #f8f8f8;
    padding: 0 .5em;
    padding-top: .5em;
    margin-right: 1em;
    text-align: right;
    border-color: #dddddd;
    border-width: 1px;
    border-style: solid;
}
.xar_formelement {
    padding-top: 1em;
    clear: both;
    }
.xar-form-input-wrapper {
    padding-top: 1em;
    clear: both;
    }