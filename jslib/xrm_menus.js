/**
 * Process a tree item (used for admin panels and the like)
 *
 */
function xrm_menuitemselect(tree)
{
    //alert(tree.currentIndex);
    var item = tree.view.getItemAtIndex(tree.currentIndex);
    
    url = item.getAttribute('href');
    
    if((url.length) > 0) {
        document.location = url;
    }
}