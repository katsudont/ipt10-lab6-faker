<?php
require 'FileUtility.php';
require 'Random.php';

$random = new Random();
$recordCount = 300;


$headers = [
    'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 'Municipality', 'Province', 'Country',
    'Phone Number', 'Mobile Number', 'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate',
    'Email Address', 'Password'
];

$records = [$headers];

for ($i = 0; $i < $recordCount; $i++) {
    $records[] = $random->getProfile();
}


FileUtility::writeToFile('persons.csv', $records);

echo "Data generated and saved to persons.csv successfully.";