<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    echo "<p>";
    // Get name of directory entry
    echo "Name: " . zip_entry_name($zip_entry) . "<br>";
    // Get compressed size
    echo "Compressed size: " . zip_entry_compressedsize($zip_entry);
    echo "</p>";
  }
  zip_close($zip);
}
?>
