<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    // Get name of directory entry
    echo "Name: " . zip_entry_name($zip_entry) . "<br>";
  }
  zip_close($zip);
}
?>
