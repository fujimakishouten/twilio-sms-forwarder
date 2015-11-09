<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */



// Configuration
$to = '';                    // E-Mail address
$subject = 'SMS Forwarded';  // E-Mail subject 
$message = $_POST['Body'];   // E-Mail body
$headers = [                 // Additional headers
    'From' => $_POST['From']
];

// Forward SMS
$header = '';
foreach ($headers as $key => $value) {
    $header = sprintf("%s: %s\n", $key, $value);
}
mail($to, $subject, $message, $header);

// Response
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<Response></Response>' . "\n";



/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
 
