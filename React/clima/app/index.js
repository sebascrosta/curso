import React, { Component, PropTypes } from 'react';
import ReactDOM from 'react-dom';

const node = document.getElementById('content');

class SimpleApp extends Component {
  constructor (props) {
    super (props)
    this.state = {
      ciudad:'',
      termica:'',
      temperatura:'',
      humedad:'',
      isLoading: true,
      hasError: false
    }
  }

  processWeather(values){

    this.setState({
      ciudad: values.location.name,
      termica: values.current.feelslike_c,
      temperatura: values.current.temp_c,
      humedad: values.current.humidity,
      isLoading: false,
      hasError: false
    })
  }

  componentDidMount() {
     fetch("http://api.apixu.com/v1/current.json?key=124c02f5469e4f2f97f140231161907&q=Buenos%20Aires")
       .then((response) => {
         return response.json()
       }).then((values) => {
         this.processWeather(values)
         console.log(values)
       }).catch((error) => {
         this.setState({ isLoading: false, hasError: true })
       })
 }

  render() {

    if(this.state.isLoading === true){
      return <div>La API está muy lenta</div>
    } else if (this.state.hasError === true){
      return <div>Explotó todo, shit happens</div>
    }else{

    return (<div>
      <h1>{this.state.ciudad}</h1>
      <p>Temperatura: {this.state.temperatura}</p>
      <p>Sensación térmica: {this.state.termica}</p>
      <p>Humedad: {this.state.humedad}%</p>
    </div>)}
  }
}
ReactDOM.render(<SimpleApp />, node);
