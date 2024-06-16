import React, {useState} from 'react';
import axios from 'axios';

class Models extends React.Component {
	constructor() {
		super();
		this.state = {
			carsList: []
		};
	}
  // const {filteredData,setFilteredData}=useState();
	handleChange = (e) => {
		// this.setState({ [e.target.name]: e.target.value });
		e.preventDefault();
		axios.get('http://localhost:8080/search', {query: e.target.value}).then(response => {

			this.setState({carsList: response.data})

		}).catch(error => {
   console.log(error.response)
 });
	}
	render() {
		return (
      <div>
      <form autoComplete="off">
			<input type="text" name="query" onChange={this.handleChange} placeholder="Search a cars"/>
		</form>

		<div className="row">
      { this.state.carsList.map(car =>
        <div className="col-md-10 offset-md-1 row-block" key={car.model}>
          <ul>
             <li>
               <a className="h5" href="/make/' + {car.make} + '/model/' + {car.model} + '" >{car.makeName}." "#{car.modelName}</a>

              </li>
          </ul>
        </div>
      )}
		</div>
    </div>
  );
	}
}
export default Models;
