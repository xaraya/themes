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

/*
 * Parts of this CSS file is credited to http://www.csszengardens
 * for inspiration and help with some positioning (top image and logo image).
 * Other parts go to the Xaraya team for the basic components.
*/

body {  
	font: 9pt/16pt tahoma, Georgia, Times New Roman, Times, serif; 
	color: #000; 
	background: #F5F5E9 url(../images/background.png) repeat fixed; 
	margin: 0px;
	border: 0px;
	padding: 0px;
	text-align: center;
	}

#description {
    display: none;
    }

#container { 
	text-align: left;
	position: relative;
	background: #fff;
	margin: 10px auto;
	border: 10px solid #D6CE7B;
	padding: 0px;
	width: 760px; 
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 740px;
	}
	html>body #container {
	width: 740px;
    }

    #logo {
        width: 100%; 
        margin: 0; 
        padding: 1px;
        background: #D6CE7B;
        }

        #logo h1 {
            text-indent: 10px;
            color: #9B933D;
            font-size: 24px;
            font-family: impact, tahoma;
            }
        #logo p {
            font-size: 12px;
            margin-top: -25px;
            text-indent: 40px;
            color: #fff;
            font-weight: bold;
            }

    #blocks {
        position: absolute;
        top: 230px;
        left: 30px;
        }

    .blockcontainer {
		width: 200px;
        }
	
    #modulespace {
        background: #F6F5E6;
        border: 1px solid #D6CE7B;
        border-top: 1px solid #fff;
        margin-left: 230px;
        width: 470px;
        margin-bottom: 40px;
        padding: 10px;
		
        } 

    #footer {
        position: absolute; 
        bottom: -1.5em; 
        right: 0;
        font: 12px;
        white-space: nowrap;
        }
        #footer a {
            padding: 0.2em 0.3em;
            background: white;
            color: #C6BC52;
            text-decoration: none;
            font-weight: bold;
            }
        #footer a:hover { 
            color:white; 
            background: #C6BC52; 
            }

	#search {
		position: absolute;
		top: 15px;
        left: 580px;
		}

	#online {
		position: absolute;
		top: 35px;
        left: 560px;
		}

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

blockquote {
   background: #fff; 
   color: #000;
   font-size: 10px;
   padding: 2em;
   border: 1px solid #000;
}
code {
   background: #fff; 
   color: #000;
   font-size: 10px;
   padding: 2em;
   border: 1px solid #000;
}
pre {
   background: #fff; 
   color: #000;
   font-size: 10px;
   padding: 2em;
   border: 1px solid #000;
}

input {
   background-color: #A39A3B;
   border-bottom-width: 1px;
   border-color: #000000;
   border-left-width: 1px;
   border-right-width: 1px;
   border-top-width: 1px;
   font-weight: bold;
   text-indent: 2px;
   font-size: 10px;
   color: #FFFFFF;
}
button {
   border: 2px outset #A39A3B;
   background-color: #A39A3B;
   font-size: 10px;
   color: #FFFFFF;
}
select {
   background-color: #A39A3B;
   border-bottom-width: 1px;
   border-color: #000000;
   border-left-width: 1px;
   border-right-width: 1px;
   border-top-width: 1px;
   font-size: 10px;
   font-weight: bold;
   color: #FFFFFF;
}
textarea {
   background-color: #A39A3B;
   border-bottom-width: 1px;
   border-color: #000000;
   border-left-width: 1px;
   border-right-width: 1px;
   border-top-width: 1px;
   font-size: 12px;
   font-weight: bold;
   text-indent: 0px;
   color: #FFFFFF;
}

img {
   border: 0px;
}

li {
   color: #000;
}

ul {
   margin-bottom: 10px;
}

.blockcontainer ul
{
	margin-left: 0;
	padding-left: 0;
	list-style-type: none;
}

.blockcontainer li a
{
	display: block;
	padding: 3px;
	width: 190px;
	background-color: white;
	font-size: smaller;
    text-decoration: none;
}

ol {
   margin-bottom: 10px;
}

sup {
   font-size: 6.5px;
}
sub {
   font-size: 6.5px;
}


/*  THEME SPECIFIC CLASSES */

hr {
   width:100%;
   color:#000;
}
form {
}
checkbox {
   background-color: transparent;
   font-weight: normal;
}

/*  XARAYA REQUIRED INDIVIDUAL CLASSES */
td.xar-norm {}
td.xar-alt {}


/*  XARAYA REQUIRED ANONYMOUS CLASSES  */

/* No Display for this in this theme */
.xar-mod-head {
   display: none;
}

.xar-mod-title {
   color: #A39A3B; 
   font-size: 14px;
   font-weight: bold;
}

.xar-mod-body {
	margin: 0px;
	padding: 0px;
}

.xar-mod-foot {}
.xar-alt {background-color: #D6CE7B; }
.xar-accent {background-color: #D6CE7B; }
.xar-alt-outline {border: 1px solid #D6CE7B; }
.xar-accent-outline {border: 1px solid #D6CE7B; }
.xar-norm-outline {border: 1px solid #D6CE7B; }
.xar-norm {}
.xar-sub {font-size: smaller;}

.xar-title {
   font-weight: bold;
   font-size: 12px;
}

.xar-error {
   color: #000;
}


/* Start Theme Specific Classes */

p { 
    color: #000;
    font-size: 12px;
}

a:link { 
	text-decoration: underline;
	color: #000;
}

a:visited {
    color: #000;
	border: none;
	text-decoration: underline;
}

a:hover, a:active { 
	color: #000;
    text-decoration: underline overline;
}

h1 {
	color: #A39A3B;
    font-size: 16px;
    font-weight: bold;
    font-style: inherit;
}

h2 {
	color: #A39A3B;
    font-size: 15px;
    font-weight: bold;
    font-style: inherit;
}
h3 {
	color: #A39A3B;
    font-size: 14px;
    font-weight: bold;
    font-style: inherit;
}
h4 {
	color: #A39A3B; 
    font-size: 13px;
    font-weight: bold;
    font-style: inherit;
}
h5, h6 {
	color: #A39A3B;
    font-size: 12px;
    font-weight: normal;
    font-style: inherit;
}

/* Articles */
.plink {
	background: url(../images/plink.png) no-repeat;
	padding: 1px 0 1px 18px;
}

.comments {
	background: url(../images/comments.png) no-repeat;
	margin: -1.3em 0 0 0;
	padding: 0 0 1px 18px;
}

/* Navigation */

#navcontainer { 
	position: absolute;
	top: 55px;
	width: 210px; 
	}
#navcontainer h3
{
	padding-left: 30px;
}

#navcontainer ul
{
	margin-left: 0;
	padding-left: 0;
	list-style-type: none;
}

#navcontainer a
{
	display: block;
	padding: 3px;
	padding-left: 30px;
	width: 196px;
	background-color: #036;
	border-bottom: 1px solid #D6CE7B;
}

#navcontainer a:link, #navlist a:visited
{
	background: #F6F5E6;
	color: #000;
    text-decoration: none;
}

#navcontainer a:hover
{
	background: #C6BC52;
	color: #000;
    text-decoration: none;
}
