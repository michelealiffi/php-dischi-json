<?php
header('Content-Type: application/json');

$disks = json_decode(file_get_contents('../src/data/data.json'), true);

echo json_encode($disks);
