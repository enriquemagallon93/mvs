var mysql  = require("mysql"),
	azure  = require("azure"),
	config = require("./config"),
	qs	   = require("querystring");

	module.exports = {
		SelectAjax : function(data,request){
			var connection = mysql.createConnection(config.mysql);
			connection.connect();
			sql=request.querySelect(data);
			connection.query(sql,
					function(err,result,fields){
						if(err){
							return "hay un error";
							connection.end();
						}
						else{
							select=result;
						}
					}

				)
			return JSON.stringify(select)
			connection.end();

		},
		LoginUser:function(data){
			var connection=mysql.createConnection(config.mysql);
			connection.connect();
			connection.query("SELECT count(*) FROM usuarios WHERE usuario_login="+data["user"]+" and usuario_password="+data["pass"]+" ",
					function(err,result,fields){
						if(err){
							return "hay un error";
							connection.end();
						}
						else{
							select=result;
						}
					}

				)
			return JSON.stringify(select)
			connection.end();

		},
		InsertAjax:function(data){
			var connection=mysql.createConnection(config.mysql);
			connection.connect();
			connection.query("INSERT INTO "+data["tabla"]+" () VALUES () ",
					function(err,result,fields){
						if (err) {
							return "Error Guardar datos";
						}
						else{
							return "Registro Guardados";
						}

					}
				);
		},
		querySelect:function(data){
			switch(data["tabla"]){
				case "tiponoticia":
					return "SELECT * FROM "+data["tabla"]+" ORDER BY tiponoticia_id DESC"
				break;
				case "fuentes":
					return "SELECT * FROM "+data["tabla"]+" ORDER BY fuente_id DESC"
				break;
				case "noticias":
					return "SELECT * FROM "+data["tabla"]+" ORDER BY noticia_id DESC"
				break;
				case "programas":
					return "SELECT * FROM "+data["tabla"]+" ORDER BY programa_id DESC"
				break;
				case "locutores":
					return "SELECT * FROM "+data["tabla"]+" ORDER BY locutor_id DESC"
				break;
				case "usuarios":
					return "SELECT * FROM "+data["tabla"]+"  WHERE usuario_login='"+data["user"]+"' usuario_password='"+data["pass"]+"' "
				break;
				case "entrevistas":
					return
				break;
				case "podcast":
					return
				break;
				case "resumenes":
					return
				break;
				case "blogs":
					return
				break;
				case "posts":
					return
				break;
				case "galeria":
					return
				break;
				case "videos":
					return
				break;
				case "usuarios":
					return
				break;
				case "roles":
					return
				break;
				case "bitacora":
					return
				break;
				case "micrositio":
					return
				break;
				/*case :
					return
				break;*/
			};

		},
		azureQuery:function(){
			var blobService = azure.createBlobService(config.azure.cuenta,config.azure.llave);
			/*blobService.createContainerIfNotExists('taskcontainer', {publicAccessLevel : 'blob'}, function(error){
    			if(!error){
        		// Container exists and is public
        			return "blob creado";
    			}
    		});*/

			/*blobService.createContainerIfNotExists("media", function(error){
			    if(!error){
			        // Container exists and is private
			        console.log(error)
			    }
			});*/

		}
	}
