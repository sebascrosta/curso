import React, { Component } from 'react'

export default class ButtonComponent extends Component{
  constructor (props) {
    super(props)
  }

  render(){
    return(<button type="submit">{this.props.text}</button>)
  }
}
