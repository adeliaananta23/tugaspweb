<?php
$file = fopen("appointments.txt", "r");
$appointments = [];

if ($file) {
    while (($line = fgets($file)) !== false) {
        $appointments[] = json_decode($line, true);
    }
    fclose($file);
    echo json_encode($appointments);
} else {
    echo json_encode([]);
}
?>
