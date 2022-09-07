<?php
$inputfile = file("prod.txt");

$data_lines = array();
foreach ($inputfile as $line)
{
    $data_lines[] = explode(";", $line);
}

//Get column headers.
$first_line = array();
foreach ($data_lines[0] as $dl)
{
    $first_line[] = explode("=", $dl);
}
$headers = array();
foreach ($first_line as $fl)
{
    $headers[] = $fl[0];
}

// Get row content.
$data_cells = array();
for ($i = 1; $i < count($data_lines); $i++)
{
    $data_cell = array();
    for ($j = 0; $j < count($headers); $j++)
    {
        $data_cell[$j] = substr($data_lines[$i][$j], strpos($data_lines[$i][$j], "=")+1);
    }
    $data_cells[$i] = $data_cell;
    unset($data_cell);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HTML Table With PHP</title>
    </head>
    <body>
        <table border="1">
            <tr>
            <?php foreach ($headers as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
            </tr>
        <?php foreach ($data_cells as $data_cell): ?>
            <tr>
            <?php for ($k = 0; $k < count($headers); $k++): ?>
                <td><?php echo $data_cell[$k]; ?></td>
            <?php endfor; ?>
            </tr>
        <?php endforeach; ?>
            <tr>
            <?php foreach ($headers as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
            </tr>
        </table>
    </body>
</html>
