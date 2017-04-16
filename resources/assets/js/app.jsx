import React from "react";
import ReactDOM from "react-dom";
import axios from 'axios';
import Layout from "./components/Layout";


axios.defaults.headers.common = {
	'X-CSRF-TOKEN': window.Laravel.csrfToken,
	'Authorization': window.Laravel.api_token,
	'X-Requested-With': 'XMLHttpRequest'
};

ReactDOM.render( (
	<Layout/>
), document.getElementById( 'app' ) );