import React from 'react';

export default class MovieDetails extends React.Component {
	render() {
		var movie = this.props.movie,
			image = '',
			backdropPath;
		
		if( !movie ) {
			return <div></div>;
		}
		
		if( movie.backdrop_path ) {
			backdropPath = 'https://image.tmdb.org/t/p/w1280/' + movie.backdrop_path;
			image = <img src={backdropPath} className="img-fluid mb-2"/>
		}
		
		return (
			<div>
				<h1>{movie.title}</h1>
				
				<p className="lead">
					{movie.tagline}
				</p>
				
				{image}
				<p>{movie.overview}</p>
				
				<p><b>Realease Date:</b> {movie.release_date}</p>
				<p><b>Vote Average:</b> {movie.vote_average}</p>
				<p><b>Vote Count:</b> {movie.vote_count}</p>
				<p><b>Popularity:</b> {movie.popularity}</p>
				<p><b>Website:</b> <a href="{movie.homepage}">{movie.homepage}</a></p>
			</div>
		);
	}
}