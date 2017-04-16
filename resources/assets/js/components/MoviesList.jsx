import React from 'react';
import {Link} from 'react-router-dom';

export default class MoviesList extends React.Component {
	constructor( props ) {
		super( props );
	}
	
	render() {
		return (
			<div className="row">
				{this.props.movies.map( function( movie ) {
					var image = '',
						backdropPath;
					
					if( movie.backdrop_path ) {
						backdropPath = 'https://image.tmdb.org/t/p/w1280/' + movie.backdrop_path;
						image = <img src={backdropPath} className="img-fluid mb-2"/>
					}
					
					return <div className="col-lg-6 mb-4" key={movie.id}>
						<Link to={"/movie/" + movie.id}>{image}</Link>
						<h4><Link to={"/movie/" + movie.id}>{movie.title}</Link></h4>
						<p className="card-text">{movie.overview}</p>
						<Link to={"/movie/" + movie.id} className="btn btn-primary">More</Link>
					</div>
				} )}
			</div>
		);
	}
}

MoviesList.defaultProps = {
	movies: []
};