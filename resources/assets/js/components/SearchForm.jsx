import React from 'react';
import {
	Link
} from 'react-router-dom';

export default class SearchMovies extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {searchTerm: ''};
		
		this.handleChange = this.handleChange.bind( this );
	}
	
	handleChange( e ) {
		this.setState( {searchTerm: e.target.value} );
	}
	
	render() {
		var me = this;
		return (
			<div className="input-group mb-4">
				<input
					name="searchTerm"
					onChange={ this.handleChange.bind( this ) }
					className="form-control form-control-lg"
					type="text" placeholder="Search for..."/>
				<span className="input-group-btn">
						<Link to={'/search/' + me.state.searchTerm} className="btn btn-primary btn-lg">Search</Link>
					</span>
			</div>
		);
	}
}