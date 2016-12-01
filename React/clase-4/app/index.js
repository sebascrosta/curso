import React from 'react'
import ReactDom from 'react-dom'
import SimpleComponent from './components/SimpleComponent'
import Form from './components/Form.js'

const content = document.getElementById('content')

ReactDom.render(<Form />,content)
