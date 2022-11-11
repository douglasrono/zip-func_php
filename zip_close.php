<?php



//Open, read, and close a ZIP file archive:


$zip = zip_open("test.zip");
zip_read($zip);

// some code

zip_close($zip);
?>
