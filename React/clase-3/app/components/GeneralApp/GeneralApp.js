import React, { Component } from 'react'
import NavComponent from '../NavComponent/NavComponent'
import HomeComponent from '../HomeComponent/HomeComponent'
import PortfolioComponent from '../PortfolioComponent/PortfolioComponent'
import ContactComponent from '../ContactComponent/ContactComponent'

export default class GeneralApp extends Component{

  constructor(props){
    super(props)
    this.state = {
      section:'Home'
    }
  }

  handleChangeSection(newSection){
      this.setState({
        section:newSection
      })
  }

  render(){
    let activeSection

    if(this.state.section === "Home"){
      activeSection = <HomeComponent />
    }else if(this.state.section === "Portfolio"){
      activeSection = <PortfolioComponent />
    }else if(this.state.section === "Contact"){
      activeSection = <ContactComponent />
    }

    return(
      <div>
        <NavComponent onChangeSection={this.handleChangeSection.bind(this)}/>
        {activeSection}
      </div>
    )
  }
}
