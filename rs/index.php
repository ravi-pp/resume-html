<?php

$directory = __DIR__; // Current directory

$files = scandir($directory);

echo "<h2>Files in " . htmlspecialchars($directory) . ":</h2>";
echo "<ul>";
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo "<li>" . htmlspecialchars($file) . "</li>";
    }
}
echo "</ul>";