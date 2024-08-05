<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $waktu = htmlspecialchars($_POST['waktu']);

    $appointment = [
        'Nama' => $nama,
        'Email' => $email,
        'Tanggal' => $tanggal,
        'Waktu' => $waktu
    ];

    $file = fopen("appointments.txt", "a");
    fwrite($file, json_encode($appointment) . "\n");
    fclose($file);

    echo "Janji konsultasi telah disimpan. <a href='buat_janji.html'>Kembali</a>";
}
?>
