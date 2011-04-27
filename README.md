#PHP Eventbrite API Client Library
----------------------------------

Example use:

	<?php
		require 'EBAPI.class.php';

        // Initialize the client by adding your app_key and user_key below.
        // API keys are available here: http://www.eventbrite.com/api/key/
        // User keys are available to authenticated users here: http://www.eventbrite.com/userkeyapi
		$eb_client = new EBAPI( 'APP_KEY', 'USER_KEY' );

        // request an event by adding a valid EVENT_ID value here:
		$resp = $eb_client->event_get( array('id' => 'EVENT_ID') );

        // here is a basic example of how to use search:
		$resp = $eb_client->event_search( );

        // ...and an advanced example using search:
        $search_params = array(
          'max' => 2,
          'city' => 'San Francisco',
          'region' => 'CA',
          'country' => 'US'
        );
		$resp = $eb_client->event_search( $search_params );
	?>

Eventbrite API documentation:  http://developer.eventbrite.com/doc
