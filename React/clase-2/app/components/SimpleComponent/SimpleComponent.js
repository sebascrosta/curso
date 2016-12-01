import React, { PropTypes, Component } from 'react';
import MyTitle from '../MyTitle/MyTitle'
import MyButton from '../MyButton/MyButton'
import CommonText from '../CommonText/CommonText.js'
import styles from './styles.css'

export default class SimpleComponent extends Component{
  constructor(props){
    super(props);
    this.state = {
      numero: 0
    }
  }

  incrementValue(){
    this.setState({numero: this.state.numero + 1})
  }
  decrementValue(){
    // if(this.state.numero > 0){
      this.setState({numero: this.state.numero - 1})
      // }
  }
  alertAnda(){
    alert("Más vale, vieja")
  }

  ponerEnCero(){
    this.setState({numero: 0})
  }

  render(){

    let parOImpar;
    let positivoONegativo;

    if(this.state.numero % 2 === 0 && this.state.numero != 0){
      parOImpar = "El numero es par"
    }else if (this.state.numero % 2 != 0 && this.state.numero != 0){
      parOImpar = "El numero es impar"
    } else{
      parOImpar = ''
    }

    if(this.state.numero > 0){
      positivoONegativo = "El numero es positivo"
    }else if(this.state.numero < 0){
      positivoONegativo = "El numero es negativo"
    }else{
      positivoONegativo = "El numero es cero"
    }


    return(
        <div className={`row`}>
          <div className = {`col-sm-8`}>
            <div comnText texto = {positivoONegativo} />
          </div>
        </div>
      </div>
    )
  }
}
