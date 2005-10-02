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

form.xar-formwidget,
form.xar-formwidget fieldset {
    margin: .5em 0;
    padding: 0;
    border: 0 none;
    line-height: 1.9em;
}

form.xar-formwidget fieldset.formelements:after {
    content: ".";
    display: block;
    height: 1px;
    clear: both;
    visibility: hidden;
}

form.xar-formwidget fieldset.formelements {
    display: inline-block;
    border: 1px solid;
    padding: 0 2px;
}

/* Hides from IE-mac \*/
* html form.xar-formwidget fieldset.formelements { height: 1%; }
form.xar-formwidget fieldset.formelements { display: block; }
/* End hide from IE-mac */

form.xar-formwidget fieldset.formelements legend {
    padding: 0 .5em;
    background-color: #f9f9f9;
    border: 1px solid;
    width: 14em;
    display: inline-block;
    margin:0;
    /* hide from ie5-mac \*/
    min-width: 14em;
    display: block;
    /* end hide */
}

form.xar-formwidget fieldset.formelements p {
    float: left;
    width: 100%;
    padding: 0;
    margin: 1px 0 0 0;
    line-height: 1.8em;
    background-color: #f7f7f7;
}

form.xar-formwidget fieldset.formelements p.param label {
    float: left;
    width: 14em;
    background-color: #ffffff;
    padding: 0 .5em;
    margin-right: .5em;
    text-align: right;
    border-color: #dddddd;
    border-width: 1px;
    border-style: solid;
}

form.xar-formwidget fieldset.extra label,
form.xar-formwidget fieldset.formelements p.param label.xar-norm {
    float: none;
    width: auto;
    background-color: transparent;
    padding: 0 .5em;
    border: 0 none;
}

form.xar-formwidget fieldset.formelements label.required span:before {
    content: " * ";
    color: #28c;
}

form.xar-formwidget fieldset.formelements label span {
    line-height: 1.8em;
    text-align: right;
    background-color: white;
}

form.xar-formwidget fieldset.formelements span.fullright {
    display: block;
    margin-left: 15.7em;
}

form.xar-formwidget fieldset.formelements span.fullright input,
form.xar-formwidget fieldset.formelements input.fullright { width: 99%; }
form.xar-formwidget fieldset.extra { background-color: #f7f7f7; }

form.xar-formwidget fieldset.formelements table {
    clear: left;
    line-height: 1.4em;
    margin-top: .5em;
}

form.xar-formwidget fieldset.formelements table.fullwidth {
    width: 100%;
    background-color: white;
    border-color: #dddddd;
    border-width: 1px;
    border-style: solid;
}

form.xar-formwidget fieldset.formelements table caption {
    text-align: left;
    padding: 1px .5em;
    width: auto;
    margin: 0;
    display: block;
}
