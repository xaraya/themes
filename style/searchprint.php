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
#searchform input
	{
        display: none;
	}
	
#searchform input:hover,
#searchform input:focus
	{ border: 1px solid #aaa; }

#LSResult{
	position:absolute;
	right: -17px;
	top: 55px;
	z-index: 100;
	margin: 10px 10px 0 0;
	padding: 10px 10px 10px 15px;
	background-color: #eee;
	border: 1px solid #ddd;
	width: 250px;
	text-align: left;
	display: none;
    font-size: 1em;
}

    #LSResult a
    {
        background: #eee;
    }
    #LSResult a:hover
    {
        background: #28c;
    }

#LSClose {
	font-size: 1em;
}

.LSDetails {
	padding: 10px 10px 10px 15px;
}