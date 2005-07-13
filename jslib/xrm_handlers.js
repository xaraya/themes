
/**
 * placeholder function to check whether the references ar
 * set right
 */
function dummy(msg)
{
  alert(msg);
}

/**
 * Process a click in adminpanel tree
 *
 * @ param tree The tree which received the click event
 */
function processAdminPanelClick(treeObj)
{
  var selectedIndex=-1;
  var itemname="";
  var newurl="";

  selectedIndex= treeObj.currentIndex;
  itemname = treeObj.view.getCellText(selectedIndex,"adminpanels").toLowerCase();
  
  // Construct a relative url
  newurl='index.php?modules='+itemname+'&type=admin&theme=xul';
  document.location=newurl;
}

/**
 * User clicked on sign in button
 */
function processSignInClick(msg)
{
  var newurl="http://localhost/xar/xul/html/index.php?module=users&func=login";
  var request;
  // loginusername contains username
  // loginpassword contains password
  // loginrememberme contains setting for saving login info
  // HOWTO: do post variables from here?
  //loadURIWithFlags ( uri , flags , referrer )
  request = new XMLHttpRequest();
  request.overrideMimeType("text/vnd.mozilla.xul+xml");
  request.open("POST",newurl);
  request.send(null);
  //document.location=newurl;
}
