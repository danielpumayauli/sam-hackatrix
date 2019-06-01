console.log('en script. ');


/* Se ejecuta busqueda de usuario */
function findEvent(event){
	if(event.which == 13 || event.keyCode == 13){
		let busqueda = document.getElementById('busqueda').value;
	
        
        $.ajax({
            type:'GET',
            url: '/event/find',
            data:{
                busqueda    :   busqueda,
            },
            success: function(respuesta) {
				data = JSON.parse(respuesta);

				// console.log(respuesta,data);
				if(respuesta != ''){
					document.getElementById('contenedorEventos').innerHTML = data;
					

				}else{
					console.log('ocurrio un error, vuelva a intentarlo');
				}
				
				
            },
            error: function() {
                console.log("No se ha podido obtener la información");
                }
            });
		
	}
	
}