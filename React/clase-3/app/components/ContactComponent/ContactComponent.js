import React, { Component } from 'react'

export default class ContactComponent extends Component{
  render(){
    return(

      <div className="container">
             <h2>Vertical (basic) form</h2>
             <form>
               <div className="form-group">
                 <label htmlFor="email">Email:</label>
                 <input type="email" className="form-control" id="email" placeholder="Enter email"/>
               </div>
               <div className="form-group">
                 <label htmlFor="pwd">Password:</label>
                 <input type="password" className="form-control" id="pwd" placeholder="Enter password"/>
               </div>
               <div className="checkbox">
                 <label><input type="checkbox"/> Remember me</label>
               </div>
               <button type="submit" className="btn btn-default">Submit</button>
             </form>
           </div>
    )}
}
