<?php
$file = "Bindopor_Apresentação.pdf";
header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=\"$file\"");
readfile($file);
exit;
?>
