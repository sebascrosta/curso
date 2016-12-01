import React, { Component } from 'react'
import Titulo from './Titulo'
export default class SimpleComponent extends Component{

  constructor(props){
    super(props)
    this.state = {
      showTitulo: true
    }
  }
  toggleTitulo(){
     this.setState({showTitulo: !this.state.showTitulo})
   }
  render(){
    return(
      <div>
        {this.state.showTitulo && <Titulo nombre="Qué onda"/>}
        <Button onToggle = {this.toggleTitulo.bind(this)}/>
      </div>
    )
  }


}


class Button extends Component{
  render(){
    return (<button type="button" onClick = {this.props.onToggle}>Toggle</button>)
  }
}
