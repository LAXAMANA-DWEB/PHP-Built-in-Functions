<?php

$string_for_case_char = 'The quick brown fox jumps over the lazy dog.';
$string_for_count_char = 'Prince Laxamana';
$string_for_changing_char = 'Dannah Mikayla';
$string_for_other = 'School of Computing';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Built-in Functions</title>

    <style>
        body {
            background-color: bisque;
        }
    </style>
</head>

<body>

    <!-- Changing Character Case -->
    <h1>Original text: <?= $string_for_case_char ?> </h1>

    <h2>lowercase: <?= strtolower($string_for_case_char) ?></h2>
    <h2>UPPERCASE: <?= strtoupper($string_for_case_char) ?></h2>
    <h2>Capitalize: <?= ucwords($string_for_case_char) ?></h2>

    <!-- Character Counts -->
    <h1>Original text: <?= $string_for_count_char ?></h1>
    <h2>Number of Characters: <?= strlen($string_for_count_char) ?></h2>
    <h2>Number of Words: <?= str_word_count($string_for_count_char) ?></h2>

    <!-- Removing and Replacing Characters -->
    <h1>Original text: <?= $string_for_changing_char ?></h1>
    <h2>Remove whitespaces from left: <?= ltrim($string_for_changing_char, 'Da') ?></h2>
    <h2>Remove whitespaces from right: <?= rtrim($string_for_changing_char, 'Da') ?></h2>
    <h2>Remove whitespace from left and right: <?= trim($string_for_changing_char, 'Da') ?></h2>
    <h2>String replace: <?= str_replace('Mikayla', 'Maganda', $string_for_changing_char) ?></h2>
    <h2>String ireplace: <?= str_ireplace('mikayla', 'Malagu', $string_for_changing_char) ?></h2>
    <h2>String repeat: <?= str_repeat($string_for_changing_char . ' ', 2) ?></h2>

    <!-- Other Built-in Functions -->
    <h1>Original text: <?= $string_for_other ?></h1>
    

</body>

</html>