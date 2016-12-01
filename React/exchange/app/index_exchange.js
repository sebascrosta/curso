import React, {Component, PropTypes} from 'react';
import ReactDOM from 'react-dom';

const node = document.getElementById('content');

class SimpleApp extends Component {

    constructor(props) {
        super(props)
        this.state = {
            rates: [],
            error: '',
            isLoading: true
        }
    }

    componentDidMount() {
        fetch("http://api.fixer.io/latest?base=USD").then((response) => {
            return response.json()
        }).then((values) => {
            //        console.log(values)

            this.setState({rates: values.rates, isLoading: false, error: ''})
            console.log(this.state.rates)
        }).catch((error) => {
            this.setState({rates: {}, isLoading: false, error: 'ERROR'})
        })

        // var xmlhttp = new XMLHttpRequest();
        //
        // xmlhttp.onreadystatechange = () => {
        //   if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
        //     if (xmlhttp.status === 200) {
        //       console.log(values)
        //     } else if (xmlhttp.status === 400) {
        //       console.error('ERROR :(');
        //     } else {
        //       console.error('Unknown error');
        //     }
        //   }
        // };
        //
        // xmlhttp.open("GET", "http://api.fixer.io/latest?base=USD", true);
        // xmlhttp.send();
    }

    render() {
        let ratesToShow = []
        let rate

        for (rate in this.state.rates) {
            ratesToShow.push(
                <div key={rate}>
                    {rate}
                    -- {this.state.rates[rate]}
                </div>
            )
        }

        if (this.state.isLoading){
          return <div>Está cargando...</div>
        }else if (this.state.error !== ''){
          return <div>{this.state.error}</div>
        }else{
          return <div><ul>{ratesToShow}</ul></div>
        }
    }
}
ReactDOM.render(
    <SimpleApp/>, node);
