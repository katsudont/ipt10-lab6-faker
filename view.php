<?php
require 'FileUtility.php';


$data = FileUtility::readFromFile('persons.csv');


echo '<html><body>';
echo '<h1>Persons Data</h1>';
echo '<table border="1" cellpadding="5">';
echo '<thead><tr>';

foreach ($data[0] as $header) {
    echo "<th>$header</th>";
}

echo '</tr></thead>';
echo '<tbody>';

for ($i = 1; $i < count($data); $i++) {
    echo '<tr>';
    foreach ($data[$i] as $cell) {
        echo "<td>$cell</td>";
    }
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</body></html>';