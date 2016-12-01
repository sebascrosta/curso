import React, { Component } from 'react'
import NavComponent from '../NavComponent/NavComponent'

export default class HomeComponent extends Component{
  render(){
    return(
    <div className="container">
       <div className="jumbotron">
         <h1>Home Section</h1>
         <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
         responsive, mobile-first projects on the web.</p>
       </div>
       <p>This is some text.</p>
       <p>This is another text.</p>
     </div>
     )
  }
}
