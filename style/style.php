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
@import url(type.php);

body 
{
	background: url('../images/background.png') top left repeat-y;
    text-align: left;
    font-size: 62.5%
}

#container {
	position: relative;
	text-align: left;
    width: 100%;
    font-size: 1.2em;

}

    #blocks
    {
        background: url('../images/logo.png') top left no-repeat;
        width: 25%;
        padding: 15px;
        padding-top: 100px;
        float: right;
    }

        #underblock
        {
            width: 100%;
            padding-left: 10px;
        }

    #content
    {
        float: left;
        padding: 20px;
        margin-left: 60px;
        margin-bottom: 50px;
        margin-top: 100px;
        width: 50%;
        border-left: 1px #CAC55A dotted;
    }

#admin
{
    z-index: 1;
}

/* navlist via listamatic -- http://css.maxdesign.com.au/listamatic/ */

 #navlist
{
    padding: 0 1px 1px;
    margin-left: 0;
    font: bold 1em;
    width: 90%;
}

#navlist li
{
    list-style: none;
    margin: 0;
    text-align: left;
}

#navlist li a
{
    display: block;
    padding: 0.25em 0.5em 0.25em 0.75em;
    border-left: 1em solid #fff;
    background: #fff;
    color: #000;
    text-decoration: none;
}

#navlist li a:hover
{
    border-left: 1em solid #CAC55A;
}