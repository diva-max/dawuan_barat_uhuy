<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pesan WhatsApp</title>
</head>
<body>
    <h1>Kirim Pesan ke WhatsApp</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sertakan file kelas WhatsAppMessage
        include 'WaController.php';

        // Nomor tujuan WhatsApp (gunakan format internasional tanpa tanda tambah)
        $phoneNumber = '6285217375048';

        // Buat objek WhatsAppMessage
        $whatsappMessage = new WhatsAppMessage($phoneNumber);

        // Set data dari form
        $whatsappMessage->setName($_POST['nama']);
        $whatsappMessage->setMessage($_POST['pesan']);

        // Kirim pesan
        $whatsappMessage->send();
    }
    ?>
</body>
</html>
