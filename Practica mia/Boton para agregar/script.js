window.onload = function(){
  boton = document.getElementById('agregar');
  boton.addEventListener("click", agregar);
};

contador = 1;

function agregar() {
  contador++;
  elemento = document.createElement('div');
  elemento.className = 'row';
  elemento.id = 'row'+contador;
  elemento.innerHTML = '<div class="col-xs-10"> <input type="text"class="form-control" name="input'+contador+'" value=""> </div>  <button id = "eliminar'+contador+'" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>';
  form = document.forms[0];
  form.appendChild(elemento);
  botonCreado = document.getElementById('eliminar'+contador);
  botonCreado.addEventListener("click", eliminar);
}

function eliminar(){
  row = this.parentNode;
  document.forms[0].removeChild(row);
}
