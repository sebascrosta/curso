import React, { PropTypes, Component } from 'react'
import LinkComponent from '../LinkComponent/LinkComponent'

export default class NavComponent extends Component{

  render(){
    return(
      <nav className="navbar navbar-default">
       <div className="container-fluid">
         <div className="navbar-header">
           <a className="navbar-brand" href="#">WebSiteName</a>
         </div>
         <ul className="nav navbar-nav">
           <LinkComponent onChangeSection = {this.props.onChangeSection} title="Home"/>
           <LinkComponent onChangeSection = {this.props.onChangeSection} title="Portfolio" />
           <LinkComponent onChangeSection = {this.props.onChangeSection} title="Contact" />
         </ul>
       </div>
      </nav>
    )
  }

}

NavComponent.propTypes = {
  onChangeSection: PropTypes.func.isRequired
}
