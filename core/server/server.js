var router 	= require("./router");
var request = require("./requestHandlers");

select="";
contenido="";
handle = {};
handle["/select"] =	request.SelectAjax;
handle["/azure"]  = request.azureQuery;
router.inicio(router,handle,request);
