$(function(){

//usamos la función ajax de jquery

      $.ajax({

      url: "http://jsonplaceholder.typicode.com/users"

//luego de que se realiza la conexión, traemos los datos y los ingresamos como parámetro en la función que devuelve email, nombre y teléfono

      }).done(function(usuarios){

       console.log(usuarios);

        var collectionNueva = usuarios.map(function(usuario){

            return {

                email: usuario.email,

                nombre: usuario.username,

                telefono: usuario.phone  

             };

        });        
		
//seleccionamos los primeros 4 elementos y los insertamos en el div con el id entry

			collectionNueva.splice(0, 4).forEach(function(item){

            var $div = $('<div/>');

            $div.text((item.nombre) + " " + (item.telefono) + " " + (item.email));

            $('#entry').prepend($div);

        });

    });

});