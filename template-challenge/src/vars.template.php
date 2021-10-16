<?php
function get_var($name) {
	switch($name) {
		case "SECRET":
			return 'QXrzj5PradqtY9vy';
		case "FLAG":
			return '__TEMPLATE__';
		default:
			return '';
	}
}
// Source: https://www.securify.nl/blog/SFY20180101/spot-the-bug-challenge-2018-warm-up.html
?>