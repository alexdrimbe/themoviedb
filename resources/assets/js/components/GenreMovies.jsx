import React from 'react';
import axios from 'axios';
import MoviesList from './MoviesList'

export default class GenreMovies extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {
			movies: []
		};
	}
	
	componentDidMount() {
		this.loadMovies( this.props.match.params.genreId );
	}
	
	componentWillReceiveProps( nextProps ) {
		if( this.props.match.params.genreId !== nextProps.match.params.genreId ) {
			this.loadMovies( nextProps.match.params.genreId );
		}
	}
	
	loadMovies( genreId ) {
		var me = this;
		axios.get( '/api/genre/' + genreId ).then( function( response ) {
			me.setState( {movies: response.data.results} )
		} );
	}
	
	render() {
		return (
			<div>
				<h1>Movies</h1>
				<MoviesList movies={this.state.movies}/>
			</div>
		);
	}
}