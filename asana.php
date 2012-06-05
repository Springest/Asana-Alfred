<?php

# ASANA THIS
# by Dennis Paagman - Springest.com

# -------------------------------------------
# SETTINGS

# Array of projects with 'keyword' => 'asana id'
# Example: 
#    $projects = array('issue' => '123456790', 'germany' => '1234567890');

$projects = array();

# Default email address, use x+projectid if you want to post to a project by default
$to = 'x@mail.asana.com';

# -------------------------------------------

# Loop through all projects and change `to` address in case of a match
$words = explode(' ', $argv[2]);
$first_word = $words[0];

if ($projects) {
  foreach ($projects as $keyword => $id) {
    if ($keyword == $first_word) {
      $to = "x+$id@mail.asana.com";
    }
  }
}
# Set email headers etc.
$headers = 'From: ' . $argv[1] . "\r\n";
$subject = $argv[2];
$message = '';

# And send!
mail($to, $subject, $message, $headers);
?>