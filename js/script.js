/*				Variables			*/
//	Ordenadas de forma alfabeticamente
alias="";								nombre="";						youtbe="";
activo="";								note="";						videos="";
audio="";								noticias="";					pass="";
banner="";								noticias="";
blogs="";								publicar="";
background="";							palabra_clave="";
cuerpo_post="";							programa="";
contraseña="";							prioridad="";
descripcion="";							recomendar="";
facebook="";							reportero="";
fuente="";								reumen="";
foto="";								rol="";
fecha_pubicacion="";					titulo="";
fecha_terminacion="";					tipo="";
horario="";								twitter="";
infrografia="";							telefono="";
login="";								titular="";
leyenda_video="";						top="";
mail="";								url="";
micrositio="";							user="";
/*			Fin Variables 				*/









$(document).ready(function(){
	//function para login
		$(".btn_login").live("click",function(){
			user=$("#user").val();
			pass=hex_md5($("#pass").val());	
			login_node(user,pass);
		})




	$("#tab_select").live("click",function(){
		tabla=$(this).attr("class");
		tabla=tabla.split("_")
		console.log(tabla[1])
		get_Datos(tabla[1]);
	})
	$("#btn_form").live("click",function(){
		console.log($(this).attr("method"))
	})
	
	if(seccion==""){
		_login();
	}
	else{
		//aqui va el seccion storage y validando
		panel();
	}
	$('#tabs a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	/*$(".btn").live("click",function(){
		login2()
	})*/
	
})
seccion="a";
function _login(){
	$(".contenedor").load("core/view/login.html");
	/*$(".container").load(function(){
		plantilla();
	})*/
		/*$.ajax({
		        url: 'http://localhost:3030/select?tabla='+tabla+'',
		        dataType: "jsonp",
		        //data: '{"tabla": "doggypark_shop_user"}',
		        type: 'POST',
		        jsonpCallback: '_testcb', // this is not relevant to the POST anymore
		        success: function (data) {
		           for(x=0;x<=data.length;x++){
		           		//$("body").text(JSON.stringify(data["tiponoticia_id"]))
		           		$("#Tnoticias table tbody").append("<tr><td>"+JSON.stringify(data[x].tiponoticia_nombre)+"</td><td><input type='checkbox'></td><td><input type='radio'></td></tr>")
		           }
		        },
		        error: function (xhr, status, error) {
		            console.log('Error: ' + error.message);
		            $('#lblResponse').html('Error connecting to the server.');
		        },
	    });*/
}
function panel(){
	$(".contenedor").load("core/view/panel.php");
	//plantilla()
}
function get_Datos(tabla){
	$.ajax({
        url: 'http://localhost:3030/select?tabla='+tabla+'',
        dataType: "jsonp",
        data: "prueba:prueb",
        type: 'POST',
        jsonpCallback: '_testcb', // this is not relevant to the POST anymore
        success: function (data) {
           for(x=0;x<=data.length;x++){
           		//$("body").text(JSON.stringify(data["tiponoticia_id"]))
           		$("#Tnoticias table tbody").append("<tr><td>"+JSON.stringify(data[x].tiponoticia_nombre)+"</td><td><input type='checkbox'></td><td><input type='radio'></td></tr>")
           }
        },
        error: function (xhr, status, error) {
            console.log('Error: ' + error.message);
            $('#lblResponse').html('Error connecting to the server.');
        },
    });
}
function get_Datos_Detalles(){

}
function post_Datos(){

}
function login_node(user,pass){
	//alert(pass)
	$.ajax({
        url: 'http://localhost:3030/select?tabla=usuarios&user='+user+'&pass='+pass+' ',
        dataType: "jsonp",
        //data: '{"tabla": "doggypark_shop_user"}',
        type: 'POST',
        jsonpCallback: '_testcb', // this is not relevant to the POST anymore
        success: function (data) {
           for(x=0;x<=data.length;x++){
           		//$("body").text(JSON.stringify(data["tiponoticia_id"]))
           		$("#Tnoticias table tbody").append("<tr><td>"+JSON.stringify(data[x].tiponoticia_nombre)+"</td><td><input type='checkbox'></td><td><input type='radio'></td></tr>")
           }
        },
        error: function (xhr, status, error) {
            console.log('Error: ' + error.message);
            $('#lblResponse').html('Error connecting to the server.');
        },
    });
}