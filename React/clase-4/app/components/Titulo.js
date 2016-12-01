import React, { Component } from 'react'

export default class Titulo extends Component{
  constructor (props) {
    super(props);
  }

  render(){
    return(<h1>{this.props.nombre}</h1>)
  }
}
