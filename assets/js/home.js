let $ = require("jquery");
const utils = require("./utils");
module.exports = {
    setFamilyClickAction()
    {
        $(".js-family").off('click').on('click',function(e){
            let family = $(e.target).data('family');
            utils.getPage("listProducts",{family:family}).then( result => {
                $("#productsList").html(result);
            })
        });
    }
}