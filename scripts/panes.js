var panes = new Array();

function toggle_pane(pane_name) {

    // define constants
    targetId = "fp_pane_" + pane_name;
//    panes = new Array('about_us', 'worship', 'outreach', 'singing_bands', 'recent_sermons', 'vespers', 'choir', 'fellowship', 'potlucks');

    // make sure we can get a list of elements
    if (!document.getElementsByTagName) return;

    // get list of elements and assemble target ID
    divs = document.getElementsByTagName('DIV');

    // if pane doesn't exist, default to "about us"
    if (!divs[targetId]) targetId = "fp_pane_about_us";

    // turn on the target pane
    divs[targetId].style.display = "block";

    // turn off all panes except requested one
    for (i=0; i < panes.length; i++) {
        thispane = "fp_pane_" + panes[i];
        if (divs[thispane] && targetId != thispane) {
            divs[thispane].style.display = "none";
        }
    }

}

