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
          console.log("products",products);
          this.setState({
            stock: products
          })
        });
    });
  }

  onAgregar(id, cantidad) {
    const articulo = this.state.stock.find((producto) => producto.id === id);
    articulo.cantidad = cantidad;
    console.log(articulo.stock);
    const nuevoCarrito = this.state.carrito.concat(articulo);
    const nuevoStock = this.state.stock.filter((producto) => producto.id !== id);

    this.setState({ stock: nuevoStock, carrito: nuevoCarrito});
  }


    onRemover(id, cantidad) {
      const articulo = this.state.carrito.find((producto) => producto.id === id);

      const nuevoStock = this.state.stock.concat(articulo);
      const nuevoCarrito = this.state.carrito.filter((producto) => producto.id !== id);

      this.setState({ stock: nuevoStock, carrito: nuevoCarrito});
    }


  render() {
    console.log(this.state)
    return (
      <div>
        <div className="col-xs-6">
        <ListaProductosOfrecidos
              productos={this.state.stock}
              onAgregar={this.onAgregar.bind(this)}
            />
        </div>

        <div className="col-xs-6">
          <ListaProductosEnCarrito
              carrito = {this.state.carrito}
              onRemover = {this.onRemover.bind(this)}/>
          </div>

      </div>
  )
  }
}

class ListaProductosOfrecidos extends Component {
  static get propTypes() {
    return {
      productos: PropTypes.array.isRequired,
      onAgregar: PropTypes.func.isRequired
    };
  }

  render() {
    const articulos = this.props.productos.map((producto) => {
      return (
        <ProductoOfrecido
          key={producto.id}
          id={producto.id}
          nombre={producto.title}
          imagen={producto.images[0].url.http}
          categoria={producto.category.value}
          precio={producto.price.data.raw.with_tax}
          onOperar={this.props.onAgregar}
        />
      )
    })

    return (
      <div>
        { articulos }
      </div>
    );
  }
}

class ProductoOfrecido extends Component {
  static get propTypes() {
    return {
      id: PropTypes.string.isRequired,
      nombre: PropTypes.string.isRequired,
      imagen: PropTypes.string.isRequired,
      categoria: PropTypes.string.isRequired,
      precio: PropTypes.number.isRequired,
      onOperar: PropTypes.func.isRequired
    }
  }

  constructor (props) {
    super (props)
    this.state = {
      cantidad: 1
    }
  }

  handleQuantity (evt) {
    this.setState({
      cantidad: evt.target.value
    })
  }
  handleClick () {
    if (this.state.cantidad > 0){
      this.props.onOperar(this.props.id, this.state.cantidad)
    }

  }
  render () {
    return (
      <div className="card">
        <img className="card-img-top" src={this.props.imagen} width="150"/>
        <div className="card-block">
          <h3 className="card-title">{this.props.nombre}</h3>
          <p>Categoría: {this.props.categoria}</p>
          <p>Precio: ${this.props.precio}</p>
          <div className="form-group">
            <input className="form-control" type="number" value={this.state.cantidad} onChange={this.handleQuantity.bind(this)}/>
          </div>
          <button onClick={this.handleClick.bind(this)} type="button" className="btn btn-info">Agregar Carrito</button>
        </div>
      </div>
    )
  }
}

class ListaProductosEnCarrito extends Component {
  static get propTypes() {
    return {
      carrito: PropTypes.array.isRequired,
      onRemover: PropTypes.func.isRequired
        };
  }

  render() {
    const articulos = this.props.carrito.map((producto) => {

      return (
        <ProductoEnCarrito
          key={producto.id}
          id={producto.id}
          nombre={producto.title}
          imagen={producto.images[0].url.http}
          categoria={producto.category.value}
          precio={producto.price.data.raw.with_tax}
          cantidad={producto.cantidad}
          onOperar={this.props.onRemover}
        />
      )
    })

    return (
      <div>
        { articulos }
      </div>
    );
  }
}


class ProductoEnCarrito extends Component {
  static get propTypes() {
    return {
      id: PropTypes.string.isRequired,
      nombre: PropTypes.string.isRequired,
      imagen: PropTypes.string.isRequired,
      categoria: PropTypes.string.isRequired,
      precio: PropTypes.number.isRequired,
      onOperar: PropTypes.func.isRequired
    }
  }

  constructor (props) {
    super (props)
    this.state = {
      cantidad: 1
    }
  }

  handleQuantity (evt) {
    this.setState({
      cantidad: evt.target.value
    })
  }

  handleClick () {
    this.props.onOperar(this.props.id)
  }

  render () {

      let precioTotal = this.props.precio * this.props.cantidad

    return (
      <div className="card">
        <img className="card-img-top" src={this.props.imagen} width="150"/>
        <div className="card-block">
          <h3 className="card-title">{this.props.nombre}</h3>
          <p>Categoría: {this.props.categoria}</p>
          <p>Precio Unitario: ${this.props.precio}</p>
          <p>Cantidad: {this.props.cantidad}</p>
          <p>Precio total: ${precioTotal}</p>
          <button onClick={this.handleClick.bind(this)} type="button" className="btn btn-danger">Remover</button>
        </div>

      </div>
    )
  }
}



ReactDOM.render(<SimpleApp />, node);
