<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["video"])) {
    // Set target directory with today's date
    $targetDir = "recordings/" . date("Y-m-d") . "--" . time() . "/";

    // Create directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Generate unique filename with today's date and unique ID
    $extension = strtolower(pathinfo($_FILES["video"]["name"], PATHINFO_EXTENSION));
    $uniqueFileName = date("Y-m-d") . "-" . uniqid() . "." . $extension;
    $targetFile = $targetDir . $uniqueFileName;

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars($_FILES["video"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Invalid request.";
}
?>