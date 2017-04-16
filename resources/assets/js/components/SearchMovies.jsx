import React from 'react';
import axios from 'axios';
import MoviesList from './MoviesList'

export default class SearchMovies extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {
			movies: []
		};
	}
	
	componentDidMount() {
		this.loadMovies( this.props.match.params.searchTerm );
	}
	
	componentWillReceiveProps( nextProps ) {
		if( this.props.match.params.searchTerm !== nextProps.match.params.searchTerm ) {
			this.loadMovies( nextProps.match.params.searchTerm );
		}
	}
	
	loadMovies( searchTerm ) {
		var me = this;
		axios.get( '/api/search/' + searchTerm ).then( function( response ) {
			me.setState( {movies: response.data.results} )
		} );
	}
	
	render() {
		return (
			<div>
				<h1>Search {this.props.match.params.searchTerm}</h1>
				<MoviesList movies={this.state.movies}/>
			</div>
		);
	}
}