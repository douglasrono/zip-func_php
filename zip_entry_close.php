<?php

// Close a ZIP directory entry opened by zip_entry_open():

$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    if (zip_entry_open($zip, $zip_entry)) {
      // some code
      // Close directory entry
      zip_entry_close($zip_entry);
    }
  }
zip_close($zip);
}
?>
