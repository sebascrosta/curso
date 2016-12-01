import React, { Component } from 'react'
import InputComponent from './InputComponent'
import ButtonComponent from './ButtonComponent'
import Titulo from './Titulo'

export default class Form extends Component {
  constructor (props) {
    super(props)
  }

  render(){
    return(
      <form action = {this.props.action} method={this.props.method}>
        <Titulo nombre="Formulario piola"/>
        <InputComponent type="text" placeHolder="Ingrese su nombre" /> <br />
        <InputComponent type="number" placeHolder="Ingrese su DNI" /> <br />
        <InputComponent type="email" placeHolder="Ingrese su mail" /> <br />
        <ButtonComponent text="Enviar" />
      </form>
    )
  }

}
