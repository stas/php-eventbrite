Eventbrite PHP wrapper for their API
====================================

Example usage:
	<?php
		require 'EBAPI.class.php';
		$api = new EBAPI( 'app_key', 'user_key' );
		var_dump( $api->event_get( array('id' => 'EVENT_ID') ) );
	?>

License: MIT

Eventbrite API documentation:
	http://developer.eventbrite.com/doc
