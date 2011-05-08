<?php
// Use the library
require_once 'EBAPI.class.php';

// Define user details
$app_key = '';
$user_key = '';

// Initiate the API wrapper
$api = new EBAPI( $app_key, $user_key );
// Load events list
$result = $api->user_list_events();
foreach( $result->events as $e )
    echo $e->event->id . "\t" . $e->event->title . "\n";

// Load organizers list
$result = $api->user_list_organizers();
foreach( $result->organizers as $o )
    echo $o->organizer->name . "\n";

// Load organizers list
$result = $api->user_list_venues();
foreach( $result->venues as $v )
    echo $v->venue->name . "\n";

// Load a simple event
$result = $api->event_get( array( 'id' => 123 ) );
echo $result->event->url . "\n";

// Test errors
$result = $api->dumb_method( array( 'id' => 1234 ) );
echo $api->getError()->error_message . "\n";

?>