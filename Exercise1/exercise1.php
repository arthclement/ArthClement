<?php
// DateTime Object
$dateOfBirth = new DateTime('1999-05-01');

// Associative array
$informations = [
    'firstName' => 'SpongeBob',
    'lastName' => 'Squarepants',
    'address' => 'Pineapple in the sea',
    'postalCode' => '0000',
    'city' => 'Shell city',
    'email' => 'spongebobsquarepants@crustycrab.com',
    'telephone' => '+111111111',
    'birthDate' => $dateOfBirth->format('Y-m-d') // English format
];

echo '<ul>'; // Opening list

foreach ($informations as $key => $value) {
    // If DateTime Object, formatting to French format
    if ($key == 'birthDate') {
        echo '<li>' . $key. ':'. $dateOfBirth->format('d-m-Y') . '</li>';
    } else {
        echo '<li>' . $key. ':'. $value . '</li>';
    }
}

echo '</ul>'; // Closing list

?>