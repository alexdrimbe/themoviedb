import React from 'react';
import axios from 'axios';
import GenresList from "./GenresList";

export default class GenresListContainer extends React.Component {
	constructor( props ) {
		super( props );
		this.state = {genres: []};
	}
	
	componentDidMount() {
		var me = this;
		axios.get( '/api/genres' ).then( function( response ) {
			me.setState( {genres: response.data.genres} )
		} );
	}
	
	render() {
		return (<GenresList genres={this.state.genres}/>);
	}
}