<?php

$dateOfBirth = new DateTime('1999-05-01');

$informations = [
    'firstName' => 'SpongeBob',
    'lastName' => 'Squarepants',
    'address' => 'Pineapple in the sea',
    'postalCode' => '0000',
    'city' => 'Shell city',
    'email' => 'spongebobsquarepants@crustycrab.com',
    'telephone' => '+111111111',
    'birthDate' => $dateOfBirth->format('Y-m-d')
];

echo '<ul>';

foreach ($informations as $key => $value) {
    if ($key == 'birthDate') {
        echo '<li>' . $key. ':'. $dateOfBirth->format('d-m-Y') . '</li>';
    } else {
        echo '<li>' . $key. ':'. $value . '</li>';
    }
}

echo '</ul>';

?>