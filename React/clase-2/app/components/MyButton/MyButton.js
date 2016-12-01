import React, { PropTypes, Component } from 'react';

export default class MyButton extends Component{

  render(){
    return(
      <button onClick={this.props.onFunctionality} type="button">{this.props.buttonName}</button>
    )
  }
}

MyButton.propTypes = {
  onFunctionality: PropTypes.func.isRequired,
  buttonName: PropTypes.string.isRequired
}
