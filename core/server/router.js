var http = require("http");
var	url  = require("url");
var config = require("./config")
var qs	 = require("querystring");
var post = "";
	module.exports = {
		inicio: function(router,handle,request){

			function onRequest(req,response){

				var myUrl = url.parse(req.url);
				var query=myUrl.query;
				data=qs.parse(query);
				var pathname = myUrl.pathname;
				contenido=router.route(pathname,handle,data,request);
				response.end("_testcb("+contenido+")");
			}
			http.createServer(onRequest).listen(3030);
			console.log("Servicios Iniciado")

		},
		route:function(pathname,handle,data,request){

			if (typeof handle[pathname] === 'function') {
				return handle[pathname](data,request);
			} else {
				 return 'Página no encontrada';
			}

		}
	}