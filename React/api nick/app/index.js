import React, { Component, PropTypes } from 'react';
import ReactDOM from 'react-dom';

const node = document.getElementById('content');
const moltin = new Moltin({publicId: 'n9Co6KXc7edVnx0JrruniOo21yp1IgbhtkktkOHct6'});



class SimpleApp extends Component {
 constructor(props) {
   super(props);
   this.state = {
     stock: [],
     carrito: []
   };
 }

 componentDidMount(){
   moltin.Authenticate(() => {
     moltin.Product.Search({status: 1}, (products) => {
       this.setState({stock: products})
     });
   });
 }

 onAgregarEnCarrito(id,cantidad){
    const articulo =  this.state.stock.find(function(producto){
      return producto.id === id
    })

    articulo.cantidad = cantidad
    const nuevoStock = this.state.stock.filter(function(producto){
      return producto.id !== id
    })

    const nuevoCarrito = this.state.carrito.concat(articulo)

    this.setState({
      stock: nuevoStock,
      carrito: nuevoCarrito
    })
 }

 render() {
   return (<div><ListaDeArticulosOfrecidos onAgregarEnCarrito={this.onAgregarEnCarrito.bind(this)} productos={this.state.stock} /></div>)
 }
}

class ListaDeArticulosOfrecidos extends Component{
  constructor(props){
    super(props)
  }

  static get propTypes(){
    return{
      productos: PropTypes.array.isRequired,
      onAgregarEnCarrito: PropTypes.func.isRequired
    }
  }

  render(){
    const articulos = this.props.productos.map(function(producto){
      return(
        <ProductoOfrecido
          key={producto.id}
          id={producto.id}
          nombre={producto.title}
          imagen={producto.images[0].url.http}
          categoria={producto.category.value}
          precio={producto.price.data.raw.with_tax}
          onAgregar={this.props.onAgregarEnCarrito}/>
      )
    })

    return (<div className="col-xs-3">{articulos}</div>)
  }
}

class ProductoOfrecido extends Component{

  constructor(props){
    super(props)
    this.state = {
      cantidad:1
    }
  }

  static get propTypes(){
  return{
    id: PropTypes.string.isRequired,
    nombre: PropTypes.string.isRequired,
    imagen: PropTypes.string.isRequired,
    categoria: PropTypes.string.isRequired,
    precio: PropTypes.number.isRequired,
    onAgregar: PropTypes.func.isRequired
  }}

  handleQuantity(evt){
    this.setState({
      cantidad: evt.target.value
    })
  }

  handleClick(){
    this.props.onAgregar(this.props.id, this.state.cantidad)
  }

  render(){
    return(
      <div className="card">
        <img ClassName="card-img-top" src={this.props.imagen} width = "150" />
        <h3>{this.props.nombre}</h3>
        <p>Categoría: {this.props.categoria}</p>
        <p>Precio: {this.props.precio}</p>
        <div className="form-group">
          <input className="form-control" type="number" value={this.state.cantidad} onChange={this.handleQuantity.bind(this)} />
        </div>

        <button type="button"
                className="btn btn-info"
                onClick={this.props.handleClick.bind(this)} >Agregar al Carrito</button>
      </div>
    )
  }
}

ReactDOM.render(<SimpleApp />, node)
