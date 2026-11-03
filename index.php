
<!DOCTYPE html>
<html>
<body>
<?php

class EmailListFormatter
{
    public static function format(string $input): string
    {
        $items = preg_split('/[\r\n,]+/', $input);

        $items = array_map('trim', $items);
        $items = array_filter($items, function ($item) {
            return $item !== '';
        });

        $items = array_map('strtolower', $items);
        $items = array_unique($items);

        $items = array_filter($items, function ($item) {
            return filter_var($item, FILTER_VALIDATE_EMAIL)
                || ctype_digit($item);
        });

        return "'" . implode("',\n'", $items) . "'";
    }
}

$input = "
405512
417664
255417192928
example@gmail.com
user@yahoo.com
255417225362
485764
";

echo EmailListFormatter::format($input);

?>
</body>
</html>
