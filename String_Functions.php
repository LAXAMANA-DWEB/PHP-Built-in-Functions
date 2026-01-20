<?php

$string_for_case_char = 'The quick brown fox jumps over the lazy dog.';
$string_for_count_char = 'Prince Laxamana';
$string_for_changing_char = 'Dannah Mikayla';
$string_for_other = 'School of Computing';

// For displaying the Other Built-in Functions
$base_arr = explode(' ', $string_for_other);
$new_value = 'HAU';

$explode_arr = $base_arr;

$unshift_arr = $base_arr;
array_unshift($unshift_arr, $new_value);

$push_arr = $base_arr;
array_push($push_arr, $new_value);

$asorted_arr = $base_arr;
asort($asorted_arr);

$arsorted_arr = $base_arr;
arsort($arsorted_arr);

$ksorted_arr = $base_arr;
ksort($ksorted_arr);

$krsorted_arr = $base_arr;
krsort($krsorted_arr);

$implode_result = implode(' ', $base_arr);

function display_arr($arr)
{
    return '[' . implode(', ', $arr) . ']';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>PHP Built-in Functions</h1>

    <!-- Changing Character Casing -->
    <h2>Changing Character Casing</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Original Text</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>strtolower()</td>
            <td><?= $string_for_case_char ?></td>
            <td><?= strtolower($string_for_case_char) ?></td>
        </tr>
        <tr>
            <td>strtoupper()</td>
            <td><?= $string_for_case_char ?></td>
            <td><?= strtoupper($string_for_case_char) ?></td>
        </tr>
        <tr>
            <td>ucwords()</td>
            <td><?= $string_for_case_char ?></td>
            <td><?= ucwords($string_for_case_char) ?></td>
        </tr>
    </table>

    <!-- Character Counts -->
    <h2>Character Count</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Original Text</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>strlen()</td>
            <td><?= $string_for_count_char ?></td>
            <td><?= strlen($string_for_count_char) ?></td>
        </tr>
        <tr>
            <td>str_word_count()</td>
            <td><?= $string_for_count_char ?></td>
            <td><?= str_word_count($string_for_count_char) ?></td>
        </tr>
    </table>

    <!-- Removing and Replacing Characters -->
    <h2>Removing and Replacing Characters</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Original Text</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>ltrim()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= ltrim($string_for_changing_char, 'Da') ?></td>
        </tr>
        <tr>
            <td>rtrim()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= rtrim($string_for_changing_char, 'Da') ?></td>
        </tr>
        <tr>
            <td>trim()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= trim($string_for_changing_char, 'Da') ?></td>
        </tr>
        <tr>
            <td>str_replace()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= str_replace('Mikayla', 'Maganda', $string_for_changing_char) ?></td>
        </tr>
        <tr>
            <td>str_ireplace()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= str_ireplace('mikayla', 'Malagu', $string_for_changing_char) ?></td>
        </tr>
        <tr>
            <td>str_repeat()</td>
            <td><?= $string_for_changing_char ?></td>
            <td><?= str_repeat($string_for_changing_char . ' ', 2) ?></td>
        </tr>
    </table>

    <!-- Other Built-in Functions -->
    <h2>Other Built-in Functions (Featuring Array)</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Original Text</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>explode()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($explode_arr) ?></td>
        </tr>
        <tr>
            <td>count()</td>
            <td><?= $string_for_other ?></td>
            <td><?= count($explode_arr) ?></td>
        </tr>
        <tr>
            <td>array_unshift()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($unshift_arr) ?></td>
        </tr>
        <tr>
            <td>array_push()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($push_arr) ?></td>
        </tr>
        <tr>
            <td>asort()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($asorted_arr) ?></td>
        </tr>
        <tr>
            <td>arsort()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($arsorted_arr) ?></td>
        </tr>
        <tr>
            <td>ksort()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($ksorted_arr) ?></td>
        </tr>
        <tr>
            <td>krsort()</td>
            <td><?= $string_for_other ?></td>
            <td><?= display_arr($krsorted_arr) ?></td>
        </tr>
        <tr>
            <td>implode()</td>
            <td><?= display_arr($base_arr) ?></td>
            <td><?= $implode_result ?></td>
        </tr>
    </table>
</body>

</html>