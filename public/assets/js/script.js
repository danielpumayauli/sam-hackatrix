console.log('en script. ');


/* Se ejecuta busqueda de usuario */
function findEvent(event){
	if(event.which == 13 || event.keyCode == 13){
		let busqueda = document.getElementById('busqueda').value;
		


		// $.ajax({
		// 	type:'GET',
		// 	url: '/event/find',
		// 	// data:{},
		// 	success:function(data){
		// 	  data = JSON.parse(data);
		// 	  console.log(data);
				
		// 	},
		// 	error: function(jqXHR, text, error){
		// 		alert('No se pudo Añadir los datos<br>' + error);
		// 	}
        //   });
        
        $.ajax({
            type:'GET',
            url: '/event/find',
            data:{
                busqueda    :   busqueda,
            },
            success: function(respuesta) {
                console.log(respuesta);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
                }
            });
		
	}
	
}