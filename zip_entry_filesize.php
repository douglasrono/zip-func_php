<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    echo "<p>";
    // Get name of directory entry
    echo "Name: " . zip_entry_name($zip_entry) . "<br>";
    // Get filesize of directory entry
    echo "Filesize: " . zip_entry_filesize($zip_entry);
    echo "</p>";
  }
  zip_close($zip);
}
?>
