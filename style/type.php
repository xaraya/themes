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

body
{
    font-size: 62.5%;
    font-family: Tahoma, Lucida Console, Geneva, sans-serif;
    color: #000;
}

a:link
{
    color: #B6A25D;
    background: inherit;
    text-decoration: underline overline;
}
a:visited
{
    color: #B6A25D;
    background: inherit;
    text-decoration: underline overline;
}
a:active
{
    color: #B6A25D;
    background: inherit;
    text-decoration: underline overline;
}
a:hover 
{
    color: #B6A25D;
    text-decoration: none;
}

/*
a:hover:after {
	content: ' ('  attr(href)  ')';
}
*/

h1, h2, h3, h4, h5, h6
{
    color: #000;
    font-size: 2.5em;
    font-family: Impact, Tahoma, Geneva, sans-serif;
    font-weight: lighter;
    line-height: 1em;
}
#content h1 a:link{
        color: #000;
        text-decoration: none;
        }
#content h1 a:visited{
        color: #000;
        text-decoration: none;
        }
#content h1 a:active{
        color: #000;
        text-decoration: none;
        }
#content h1 a:visited{
        color: #000;
        background: inherit;
        }

#content h2 a:link{
        color: #000;
        text-decoration: none;
        }
#content h2 a:visited{
        color: #000;
        text-decoration: none;
        }
#content h2 a:active{
        color: #000;
        text-decoration: none;
        }
#content h2 a:visited{
        color: #000;
        background: inherit;
        }

#content h3 a:link{
        color: #000;
        text-decoration: none;
        }
#content h3 a:visited{
        color: #000;
        text-decoration: none;
        }
#content h3 a:active{
        color: #000;
        text-decoration: none;
        }
#content h3 a:visited{
        color: #000;
        background: inherit;
        }

blockquote 
{
	margin: 1em 0;
    margin-left: 40px;
    margin-right: 20px;
	padding-left: 30px;
	padding-right: 30px;
	padding-bottom: 10px;
    border-bottom: #000 1px dotted;
	background: url(../images/bq.gif) top left no-repeat;
}

li
{
    list-style: none;
    margin: 0;
    text-align: left;
    line-height: 2em;
}

#underblock li a:link{
        text-decoration: none;
        }
#underblock li a:visited{
        text-decoration: none;
        }
#underblock li a:active{
        text-decoration: none;
        }
#underblock li a:hover{
        background: inherit;
        border-top: 1px #000 dotted;
        border-bottom: 1px #000 dotted;
        }

/* articles */

.meta {
    font-size: .95em;
    font-variant: small-caps;
    margin-bottom: 10px;
    margin-top: -40px;
    color: #B6A25D;
    }
.storycontent {
    text-align: justify;
    }

/* yellow flower source can be found: http://www.flickr.com/photos/gotigersjf/18909674/in/photostream/
 Creative Commons License */

.article{
    position: relative;
    margin-bottom: 20px;
    color: #000;
    background: #fff url(../images/yellowflower.png) top left no-repeat;

    }
.article h1 {
    padding-left: 50px;
    padding-top: 20px;
    height: 100px;
    }

.article h2 {
    padding-left: 50px;
    padding-top: 20px;
    height: 100px;
    }

.feedback {
	margin: 1.3em 0 0 0;
    font-size: .95em;
    font-variant: small-caps;
    padding-left: 20px;
	background: #fff url(../images/comments.png) top left no-repeat;
    margin-bottom: 50px;
    }
.feedback a:link{
        color: #B6A25D;
        background: #fff;
        text-decoration: none;
        }
.feedback a:visited{
        color: #B6A25D;
        background: #fff;
        text-decoration: none;
        }
.feedback a:active{
        color: #B6A25D; 
        background: #fff;
        text-decoration: none;
        }
.feedback a:hover{
        background: #fff;
        border-top: 1px #B6A25D dotted;
        border-bottom: 1px #B6A25D dotted;
            }