<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $conn = new mysqli("localhost", "username", "password", "your_database");

        $filename = $_FILES['image']['name'];
        $mime_type = $_FILES['image']['type'];
        $imageData = file_get_contents($_FILES['image']['tmp_name']);

        $stmt = $conn->prepare("INSERT INTO images (filename, mime_type, image_data) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $filename, $mime_type, $imageData);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        echo "Image uploaded successfully!";
    } else {
        echo "Error uploading image.";
    }
}
?>
