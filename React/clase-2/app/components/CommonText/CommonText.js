import React, { PropTypes, Component } from 'react';
import styles from './styles.css'

export default class CommonText extends Component{

  constructor(props){
    super(props);
  }

  static get propTypes (){
    return{
      texto: PropTypes.string.isRequired
    }
  }
  render(){
    return(
      <p className={styles.fontsize}>{this.props.texto}</p>
    )
  }
}
