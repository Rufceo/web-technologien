<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upload - Gasthaus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Admin Upload</h1>
    </header>

    <section class="upload-section">
        <h2>PDFs und Bilder hochladen</h2>

        <!-- Upload-Formulare für verschiedene Dateien -->
        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="speisekarte_pdf">Speisekarte PDF:</label>
            <input type="file" name="speisekarte_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_speisekarte">Hochladen</button>
        </form>

        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="mittagsstammtisch_pdf">Mittagsstammtisch PDF:</label>
            <input type="file" name="mittagsstammtisch_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_mittagsstammtisch">Hochladen</button>
        </form>

        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="happyhour_pdf">Happy Hour PDF:</label>
            <input type="file" name="happyhour_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_happyhour">Hochladen</button>
        </form>

        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="background_image">Hintergrundbild:</label>
            <input type="file" name="background_image" accept=".jpg, .jpeg, .png" required>
            <button type="submit" name="upload_image">Hochladen</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Gasthaus - Alle Rechte vorbehalten</p>
    </footer>

</body>
</html>
