<?php 

$action = $_POST['action'] ?? null;
require_once 'config.php';

$title = $_POST['title'] ?? '';
$caption = $_POST['caption'] ?? '';
$description = $_POST['description'] ?? '';
$cover_image = $_POST['cover_image'] ?? '';

$heading = $_POST['heading'] ?? '';
$content = $_POST['content'] ?? '';

function add_entry() {
    // Code to add a new blog entry
    
    global $conn, $title, $caption, $description, $cover_image, $heading, $content;
    $sql = "INSERT INTO entry (Title, caption, description, image, heading, content) VALUES ('$title', '$caption', '$description', '$cover_image', '$heading', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "New entry added successfully";
        echo "<script>
        alert('Entry added successfully!');
        window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function delete_entry() {
    echo "Working on it!";
}

if ($action == "1") {
    add_entry();
} else {
    echo "No action specified.";
}

?>