import React, {Component, PropTypes} from 'react';
import ReactDOM from 'react-dom';

const node = document.getElementById('content');

class SimpleApp extends Component {

    constructor(props) {
        super(props)
        this.state = {
          title: '',
          year: '',
          rating: '',
          poster: '',
          runtime: '',
          isLoading: true,
          error: false
        }
    }

    componentDidMount() {
        fetch("http://www.omdbapi.com/?t=Star+Wars&plot=short&r=json").then((response) => {
            return response.json()
        }).then((values) => {
          console.log(values)
          this.setState({
            title: values.Title,
            year: values.Year,
            rating: values.imdbRating,
            poster: values.Poster,
            runtime: values.Runtime,
            isLoading: false,
            error: false
          })
        }).catch((error) => {
          this.setState({
            isLoading:false,
            error:true
          })
        })
    }

    render() {
      if(this.state.isLoading === true){
        return <div>Cargando</div>
      }else if (this.state.error === true){
        return <div>Voló todo</div>
      } else {
        return(
          <div>
            <img src={this.state.poster} />
            <h1>{this.state.title}</h1>
            <p>Año: {this.state.year}</p>
            <p>Rating en IMDB: {this.state.rating}</p>
            <p>Duración: {this.state.runtime}</p>
          </div>
        )
      }
    }

}
ReactDOM.render(
    <SimpleApp/>, node);
