import React, { PropTypes, Component } from 'react';

export default class MyTitle extends Component{

  constructor(props){
    super(props);
  }

  static get propTypes (){
    return{
      texto: PropTypes.number.isRequired
    }
  }
  render(){
    return(
      <h1>{this.props.texto}</h1>
    )
  }
}
