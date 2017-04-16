import React from "react";
import {
	BrowserRouter as Router,
	Route,
	Link
} from 'react-router-dom';

import GenresListContainer from "./GenresListContainer";
import PopularMovies from "./PopularMovies";
import GenreMovies from "./GenreMovies";
import MovieDetailsContainer from "./MovieDetailsContainer";
import SearchForm from "./SearchForm";
import SearchMovies from "./SearchMovies";

const Layout = ( props ) => (
	<Router>
		<div className="container-fluid">
			<div className="d-flex justify-content-end pt-4 pb-2 pl-4">
				<Link to="/" className="mr-auto"><img src="/img/powered-by-rectangle-blue.svg" height="56"/></Link>
				<a href="/logout" className="btn btn-link" role="button">Logout</a>
			</div>
			
			<hr className="colorgraph"/>
			
			<div className="row pt-3 pb-5">
				<div className="col-sm-12 col-lg-3">
					<GenresListContainer />
				</div>
				<div className="col-sm-12 col-lg-9">
					<SearchForm />
					
					<Route exact path="/" component={PopularMovies}/>
					<Route exact path="/movies/genres/:genreId" component={GenreMovies}/>
					<Route exact path="/movie/:movieId" component={MovieDetailsContainer}/>
					<Route exact path="/search/:searchTerm" component={SearchMovies}/>
				
				</div>
			</div>
			
			<hr className="colorgraph"/>
			
			<div className="row pt-3 pb-5 text-center">
				<div className="col">© 2017 Alex Drimbe</div>
			</div>
		
		</div>
	</Router>
);

export default Layout;