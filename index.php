<!DOCTYPE html>
<html>
<body>
<?php
$input = "abc@icloud.com 
Jos@gmail.com 
tat@gmail.com
1m@gmail.com";

// Convert multiline string into array
$emails = explode("\n", $input);

// Trim whitespace from each email
$emails = array_map('trim', $emails);

// Remove empty lines
$emails = array_filter($emails);

// Format into quoted comma-separated list
$formatted = "'" . implode("',\n'", $emails) . "'";

echo $formatted;

?> 
</body>
</html>
