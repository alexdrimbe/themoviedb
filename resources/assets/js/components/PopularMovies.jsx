import React from 'react';
import axios from 'axios';
import MoviesList from './MoviesList'

export default class PopularMovies extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {movies: []};
	}
	
	componentDidMount() {
		var me = this;
		axios.get( '/api/popular' ).then( function( response ) {
			me.setState( {movies: response.data.results} )
		} );
	}
	
	render() {
		return (
			<div>
				<h1>Popular movies</h1>
				<MoviesList movies={this.state.movies}/>
			</div>
		);
	}
}