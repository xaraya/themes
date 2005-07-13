function xrm_init()
{
    xrm_bind_submit_buttons();
}

/**
 * Get all the buttons in the current document, if their
 * type attribute is submit, then set the cmd to do a submit when clicked
 *
 * @todo check the attribute we're setting first, so we can overrule it if
 *       we need to call another method on the button.
 * @todo use a controller for this
 */
function xrm_bind_submit_buttons()
{
    // Get all the button elements in the current doc
    // where type="submit"
    submitButtons = document.getElementsByTagName('button');
    for (var buttonIndex = 0; buttonIndex < submitButtons.length; buttonIndex++) 
    {
        typeAttribute = submitButtons[buttonIndex].getAttribute('type');
        if (typeAttribute == 'submit' )
        {
            submitButtons[buttonIndex].setAttribute('oncommand','xrm_submit(this)');
        }
    }    
}