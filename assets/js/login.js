const $ = require('jquery');

module.exports  = {
    setAutofocus()
    {
        var $inputUserName = $("#inputUsername");
        if($inputUserName) {
            $inputUserName.click();
        }
    }
}