<?php

/**
 * Example of *ACCURATE* SMS Counting
 *
 * Date: 2/27/19
 * Time: 12:42 PM
 */


// Load SMSCounting Library
require_once __DIR__ . '/libraries/SMSCounter.php';

// New instance of SMSCounter Object
$counter = new SMSCounter();

// When this example message is sent through your system (sms.teleapi.net) -- it incorrectly tracks as 3 billable SMS
$message = "Ok let's chat òn the invite, I'm leäve my phone to charge in the other room, waitiñg for ù and hope to see you tonìght ;) xoxo  :)\n\n-Jennifer";

// Process on our message to see how many parts/what encoding required/and length
$messageInfo = $counter->count($message);

print_r($messageInfo);