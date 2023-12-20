<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Video</title>
</head>
<body>

<?php
if (isset($_GET['index'])) {
    $index = htmlspecialchars($_GET['index']);
    $videoFile = "uploads/{$index}_video.mp4";

    if (file_exists($videoFile)) {
        echo "<h2>Selected Video:</h2>";
        echo "<video controls width='640' height='360'>";
        echo "<source src='{$videoFile}' type='video/mp4'>";
        echo "Your browser does not support the video tag.";
        echo "</video>";
    } else {
        echo "<p>Video not found.</p>";
    }
} else {
    echo "<p>No video selected.</p>";
}
?>

</body>
</html>
