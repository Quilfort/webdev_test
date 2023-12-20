<?php
    $videoDirectory = "uploads/";
    $videoFiles = glob($videoDirectory . "*_video.mp4");

    if (!empty($videoFiles)) {
        echo "<label for='videoSelect'>Select a video:</label>";
        echo "<select name='index' id='videoSelect'>";
        echo "<option value='' disabled selected>Select a video</option>";

        foreach ($videoFiles as $videoFile) {
            $index = pathinfo($videoFile, PATHINFO_FILENAME);
            echo "<option value='" . htmlspecialchars($index) . "'>" . htmlspecialchars($index) . "</option>";
        }

        echo "</select>";
        echo "<input type='submit' value='Play'>";
    } else {
        echo "No videos found.";
    }
?>
