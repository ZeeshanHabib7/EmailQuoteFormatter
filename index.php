<!DOCTYPE html>
<html>
<body>
<?php
class EmailListFormatter
{
    public static function format(string $input): string
    {
        $emails = explode("\n", $input);
        $emails = array_map('trim', $emails);
        $emails = array_filter($emails);
        $emails = array_map('strtolower', $emails);
        $emails = array_unique($emails);

        $emails = array_filter($emails, function ($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        });

        return "'" . implode("',\n'", $emails) . "'";
    }
}

$input = "
abc@gmail.com
ijk@gmail.com
lmn@yahoo.com
xyz@icloud.com
";
echo EmailListFormatter::format($input);

?> 
</body>
</html>
