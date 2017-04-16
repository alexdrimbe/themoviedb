import React from 'react';
import {NavLink} from 'react-router-dom';

export default class GenresList extends React.Component {
	constructor( props ) {
		super( props );
	}
	
	render() {
		return (
			<ul className="list-group">
				{this.props.genres.map( function( genre ) {
					return <li className='list-group-item' key={genre.id}>
						<NavLink to={"/movies/genres/" + genre.id} activeClassName="active"
								 exact={true}>{genre.name}</NavLink>
					</li>
				} )}
			</ul>
		);
	}
}

GenresList.defaultProps = {
	genres: []
};