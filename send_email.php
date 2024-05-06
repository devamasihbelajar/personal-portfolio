<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Masukkan alamat email penerima di bawah
    $to_email = "luckydevthendean@gmail.com";

    // Ambil nilai dari formulir
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Massage'];

    // Bangun pesan email
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Header email
    $headers = "From: $name <$email>";

    // Kirim email
    if (mail($to_email, $subject, $email_body, $headers)) {
        echo "Pesan Anda telah terkirim.";
    } else {
        echo "Gagal mengirim pesan. Silakan coba lagi.";
    }
}
?>
