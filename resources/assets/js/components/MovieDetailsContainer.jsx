import React from 'react';
import axios from 'axios';
import MovieDetails from './MovieDetails'

export default class MovieDetailsContainer extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {
			movie: null
		};
	}
	
	componentDidMount() {
		this.loadData( this.props.match.params.movieId );
	}
	
	componentWillReceiveProps( nextProps ) {
		if( this.props.match.params.movieId !== nextProps.match.params.movieId ) {
			this.loadData( nextProps.match.params.movieId );
		}
	}
	
	loadData( movieId ) {
		var me = this;
		axios.get( '/api/movie/' + movieId ).then( function( response ) {
			me.setState( {movie: response.data} )
		} );
	}
	
	render() {
		return (
			<MovieDetails movie={this.state.movie}/>
		);
	}
}