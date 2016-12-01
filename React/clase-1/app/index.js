import React, { Component } from 'react'
import ReactDOM from 'react-dom'
// import InputComponent from './InputComponent'
// import ButtonComponent from './ButtonComponent'
// import Titulo from './Titulo'
import Form from './Form'

const content = document.getElementById('content');

ReactDOM.render(<div>
  <Form action = "/" method = "GET"/>
  </div>
, content);

console.log('sarasa');
