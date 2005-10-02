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
@import url(verticlemenu.php);
@import url(search.php);
@import url(forms.php);
@import url(comments.css);
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
        position: relative;
        top: 0px;
        left: 0px;
        background: #eee;
	    border: 1px solid #ddd;
        width: 100%;
        padding: 5px;
        font-size: 1.2em;
    }
        #top-header a
        {
            background: #eee;
            color: #28c;
            text-decoration: underline;
            font-weight: normal;
        }
        #top-header a:hover
        {
            background: #28c;
            color: #eee;
            text-decoration: none;
            font-weight: normal;
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
        position: absolute;
        top: 30px;
        left: 0px;
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
        width: 500px;
    }
        #content p
        {
            text-align: justify;
            font-size: 1.2em;
        }
    #blocks
    {
        float: left;
        width: 200px;
        }
    #footer
    {
        position: relative;
        top: 50px;
        left: 0px;
        padding-bottom: 10px;
        text-align: center;
        font-size: .9em;
        font-weight: normal;
        color: #000;
        background: #fff;
    }
        #footer a
        {
            background: #fff;
            color: #28c;
            text-decoration: underline;
            font-weight: normal;
        }
        #footer a:hover
        {
            background: #28c;
            color: #eee;
            text-decoration: none;
            font-weight: normal;
        }

.post {
    margin:20px 10px 20px 20px;
    padding:0 10px 15px 15px;
    border-bottom:1px solid #ededed;
    }
.post_cal {
    padding: 0px;
    color: #ddd;
    background: #fff;
}

.xml a
{
    color: #f60;
    background: inherit;
}
.xml a:hover
{
    color: #fff;
    background: #f60;
}

.nohover a:hover
{
    color: #28c;
    background: #fff;
}