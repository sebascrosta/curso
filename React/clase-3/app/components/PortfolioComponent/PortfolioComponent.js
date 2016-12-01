import React, { Component } from 'react'

export default class PortfolioComponent extends Component{
  render(){
    return(
      <div className="container">
             <h2>Rounded Corners</h2>
             <p>The .img-rounded class adds rounded corners to an image (not available in IE8):</p>
             <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" className="img-rounded" alt="Cinque Terre" width="304" height="236"/>
        </div>
    )}
}
