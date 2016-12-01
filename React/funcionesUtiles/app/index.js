import React, { Component, PropTypes } from 'react';
import ReactDOM from 'react-dom';


const node = document.getElementById('content');

class SimpleApp extends Component {
  constructor (props) {
    super (props)
    this.state = {
      users: []
    }
  }

  componentDidMount() {
    let newUsers = [
      {id:1, name:'Donald', profession: 'Wall builder', nationality: 'American'},
      {id:2, name:'Maradona', profession: 'God', nationality: 'Argentinian'},
      {id:3, name:'Guido', profession: 'Pilot', nationality: 'Argentinian'}
    ]

    this.setState({
      users: newUsers
    })
  }

  render() {

    const usersToShow = this.state.users.map((user) => {
      return <User key={user.id} name={user.name} nationality={user.nationality} />
    })

    const usersFiltered = this.state.users.filter((user) => {
      return user.nationality !== 'American'
    })

    const showUsersFiltered = usersFiltered.map((user) => {
      return <User key={user.id} name={user.name} nationality={user.nationality} />
    })

    return (
      <div>
        <div><h1>Usuarios</h1>{usersToShow}</div>
        <div><h1>Usuarios filtrados</h1>{showUsersFiltered}</div>
      </div>
    )
  }
}

class User extends Component{

  constructor(props){
    super(props)
  }

  render(){
    return(
    <div>
      {this.props.name} - {this.props.nationality}
    </div>
    )
  }
}

ReactDOM.render(<SimpleApp />, node);
