import React, { Component } from 'react';


export default class InputComponent extends Component {
  constructor (props) {
    super(props)
  }
  render(){
    return(<input type={this.props.title} placeholder={this.props.placeHolder}/>)
  }
}
