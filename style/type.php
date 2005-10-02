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

a:link
{
    color: #6495ED;
    background: #f5;
    text-decoration: underline;
}
a:visited
{
    color: #6495ED;
    background: #f5;
    text-decoration: underline;
}
a:active
{
    color: #6495ED;
    background: #f5;
    text-decoration: underline;
}
a:hover 
{
    color: #036;
    background: #ddd;
    text-decoration: underline overline;
}

h1
{
    color: #036;
    font-size: 2.0em;
}
h2
{
    color: #036;
    font-size: 1.9em;
}
h3
{
    color: #036;
    font-size: 1.8em;
    display: inline;
}
h4
{
    color: #036;
    font-size: 1.7em;
    display: inline;
}

blockquote 
{
	margin: 1em 0;
    margin-left: 40px;
    margin-right: 20px;
	padding-left: 30px;
	padding-right: 30px;
	padding-bottom: 10px;
	color: #6495ED;
    border-bottom: #036 1px dotted;
	background: url(../images/bq.gif) top left no-repeat;
}