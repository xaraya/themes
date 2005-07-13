/**
 * Functions which help in processing html forms inside xul documents,
 * regardless whether the controls are in xul dialect or html dialect
 *
 */

/**
 * Emulate a submit button
 * 
 * Normally, you would do something like: <input type="submit"..../>
 *
 * which would submit the form the input tag is in according to the
 * attributes in the form tag.
 *
 * We aim to have this instead:  <xul:button type="submit"..../>
 *
 * and do *exactly* the same with it. This allows to migrate smoothly into
 * XUL GUI specification with minimal template logic changes.
 *
 */
function xrm_submit(button)
{
    // Someone pressed a button and wants to submit a form
    // First, get the form in which the button is
    try {
        parent = button.parentNode;
        while ( parent.nodeName != 'form' )
        {
            parent = parent.parentNode;
        }
        form = parent;
        form.createControls = xrm_createcontrols;
        
        // Now we have the form object, we need to add the values from all 
        // xul controls to the form as new elements.
        form.createControls('textbox');
        form.createControls('checkbox');
        form.createControls('radio');
        form.createControls('menulist');

        // Make sure that the value for the button clicked also appears in the submit
        newNode = document.createElementNS("http://www.w3.org/1999/xhtml",'input');
        for(var i = 0; i < button.attributes.length; i++) {
            // Skip the type attribute
            if(button.attributes[i].name != 'type') {
                newNode.setAttribute(button.attributes[i].name,button.attributes[i].value);
            } else {
                newNode.setAttribute(button.attributes[i].name,'hidden');
            }
        }
        form.appendChild(newNode);
        form.submit();
    } catch (e) {
        alert (e.message);
    }
}

/*
 * Method on a node append input controls in the html namespace
 * based on a nodelist passed in
 *
 */
function xrm_createcontrols(xulTag)
{
    nodeList = this.getElementsByTagName(xulTag);
    for(var i = 0; i < nodeList.length; i++)
    {
        // Make sure the new elements are in the html namespace otherwise we
        // run the risk that they are in the xul one for example.
        switch(xulTag) {
            case 'radio':
                if(!nodeList[i].selected) {
                    // dont bother adding it
                    continue;
                }
            default:
                newNode = document.createElementNS("http://www.w3.org/1999/xhtml",'input');
        }
        
        attributes = nodeList[i].attributes;
        newNode.setAttribute('type','hidden');
        for( var j = 0; j < attributes.length; j++)
        {
            // Skip the type attribute
            if(attributes[j].name != 'type') 
                newNode.setAttribute(attributes[j].name,attributes[j].value);
        }
        switch(xulTag) {
            case 'checkbox':
                if(nodeList[i].checked) {
                    newNode.value = nodeList[i].getAttribute('value');
                } else {
                    newNode.value = null;
                }
                break;
            case 'menulist':
                newNode.value = nodeList[i].selectedItem.value;
                break;
            default:
            case 'textbox':
                newNode.value = nodeList[i].value;
                break;
        }
        
        // Consider using replacechild?
        this.appendChild(newNode);   
    }
}
