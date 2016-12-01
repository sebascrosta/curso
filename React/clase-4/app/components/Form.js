import React, {Component} from 'react'
import InputComponent from './InputComponent'
import ButtonComponent from './ButtonComponent'
import Titulo from './Titulo'

export default class Form extends Component {
    constructor(props) {
        super(props)
        this.state = {
            emailValue: '',
            emailError: true,
            passValue: '',
            passError: true,
            localidad: '',
            conditions: false
        }
    }

    handleEmail(e) {
      const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

      let validateEmail = (!re.test(this.state.emailValue)) ? true : false

        this.setState({
          emailValue: e.target.value,
          emailError: validateEmail
        })
    }

    handlePass(e) {
      let validatePass = (e.target.value.length < 6) ? true : false;

      this.setState({
        passValue: e.target.value,
        passError: validatePass
      })
    }

    handleLocalidad(e) {
        this.setState({localidad: e.target.value})
    }

    handleCondition(e) {
        this.setState({conditions: e.target.checked})
    }

    render() {

        return (

            <form action={this.props.action} method={this.props.method}>

                <Titulo nombre="Formulario piola"/>
                <div>
                    <input type="email" placeholder="Ingrese su mail" onChange={this.handleEmail.bind(this)} value={this.state.emailValue}/>

                    {this.state.emailError && <span>Formato incorrecto</span>}
                </div>

                <div>
                  <input type="password" placeholder="Ingrese su pass" onChange={this.handlePass.bind(this)} value={this.state.passValue}/>

                  {this.state.passError && <span>La contraseña debe tener más de seis caracteres</span>}

                </div>

                <div>
                    <label>Localidad:</label>
                    <select onChange={this.handleLocalidad.bind(this)}>
                        <option value="GBA">GBA</option>
                        <option value="CABA">CABA</option>
                        <option value="Rosario">Rosario</option>
                        <option value="Cordoba">Cordoba</option>
                    </select>
                </div>

                <div>
                    <label>
                        <input type="checkbox" checked={this.state.conditions} onChange={this.handleCondition.bind(this)}/>Acepto bases y condiciones
                    </label>
                </div>

                {!this.state.emailError &&
                  !this.state.passError ?
                  <ButtonComponent text="Enviar"/> : "Hay errores vieja"}
            </form>
        )
    }

}
