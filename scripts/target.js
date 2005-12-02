setExternalLinks=function() {
    if ( !document.getElementsByTagName ) {
        return null;
    }
 
    var anchors = document.getElementsByTagName( "a" );
    for ( var i = 0; i < anchors.length; i++ ) {
        var anchor = anchors[i];
        if ( anchor.getAttribute( "href" ) && anchor.getAttribute( "rel" ) == "external" ) {
            anchor.setAttribute( "target", "_blank" );
        }
    }
}

if (document.all&&window.attachEvent) { // IE-Win
    window.attachEvent("onload", nav_hover);
    window.attachEvent("onload", setExternalLinks);
} else if (window.addEventListener) { // Others
    window.addEventListener("load",setExternalLinks,false);
}

/* } else if (document.all&&document.getElementById) { */
/*     window.onload=nav_hover; // ie5-mac case */
/* } */