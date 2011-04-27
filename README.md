#PHP Eventbrite API Client Library
----------------------------------

Example use:

	<?php
		require 'EBAPI.class.php';

        // add your app_key and user_key below:
		$eb_client = new EBAPI( 'APP_KEY', 'USER_KEY' );

        // add a valid event_id here:
		$resp = $eb_client->event_get( array('id' => 'EVENT_ID') );
	?>

Eventbrite API documentation:  http://developer.eventbrite.com/doc
