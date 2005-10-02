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

@import url(xaraya.php);
@import url(comments.css);
@import url(searchprint.php);
body
{ 
    background: #fff; 
    color: #000;
    margin: 0px;
    font-size: 62.5%;
	font-family: "Bitstream Vera Sans", Verdana, Arial, Helvetica, sans-serif;
    text-align: center;
}
a
{
    background: #fff;
    color: #28c;
    text-decoration: none;
    font-weight: normal;
}
a:hover
{
    background: #28c;
    color: #eee;
    text-decoration: none;
    font-weight: normal;
}
#container 
{ 
	text-align: left;
	position: relative;
	margin: auto;
	padding: 0px;
	width: 760px; 
    font-size: 1em;
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 740px;
	}
	html>body #container {
	width: 740px;
}
    #wyome-description
    {
        display: none;
    }
    #top-header
    {
        display: none;
    }

    #top-logo
    {
        position: relative;
        top: 10px;
        left: 0px;
        text-align: left;
        font-family: New York, Arial, Sans-Serif;
        font-weight: bold;
        font-size: 2.5em;
        color: #28c;
        background: #fff;
    }
    #admin-panel
    {
        display: none;
    }
    #content-container
    {
        position: absolute;
        top: 60px;
        left: 0px;
        margin: 10px;
        text-align: left;
        font-size: 1.1em;
        font-weight: normal;
        color: #000;
        background: #fff;
    }
    #content {
        float: right;
        width: 100%;
    }
        #content p
        {
            text-align: justify;
            font-size: 1.2em;
        }
    #blocks
    {
        display: none;
        }
    #footer
    {
        display: none;
    }

.post {
    margin:20px 10px 20px 20px;
    padding:0 10px 15px 15px;
    border-bottom:1px solid #ededed;
    }
.post_cal {
    display: none;
    }
.xar-articles-keywords{
    display: none;
    }