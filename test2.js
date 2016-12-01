let users = [
  {id:1 ,name:'Raul'},
  {id:2 ,name:'Esteban'},
  {id:3 ,name:'Ana'},
  {id:4 ,name:'Carlos'},
  {id:5 ,name:'Tamara'}
]

let premiumUsers = []

//crear funcion que refciba un ID, obtener usuario por ID usando metodo find)() Filtrar a ese usuario de la lista Users con filter() Agregarlo a la lista premium e imprimir las dos.


function filtrar(id){
  nuevoPremium = users.find(function(user){return user.id === id})
  users = users.filter((user) => {return user !== nuevoPremium})
  premiumUsers = premiumUsers.concat(nuevoPremium)

    console.log('Usuarios Normales\n')
    users.forEach(function(user){console.log(user.id + ' - ' +user.name)})

    console.log('\n\nUsuarios Premium \n')
    premiumUsers.forEach(function(user){console.log(user.id + ' - ' +user.name)})
    }


filtrar(4)
