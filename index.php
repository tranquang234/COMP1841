<?php
if (!isset($_POST['val1'])) {
    include __DIR__ . '/templates/form.html.php';
} else {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $calc = $_POST['calc'];

    if (is_numeric($val1) && is_numeric($val2)) {
        switch ($calc) {
            case 'add':
                $result = $val1 + $val2;
                break;
            case 'sub':
                $result = $val1 - $val2;
                break;
            case 'mul':
                $result = $val1 * $val2;
                break;
            case 'div':
                $result = $val2 != 0 ? $val1 / $val2 : "Error: Division by zero!";
                break;
        }
        $output = "The result is: " . $result;
        include __DIR__ . '/templates/result.html.php';
    } else {
        $error = "Both inputs must be numbers!";
        include __DIR__ . '/templates/error.html.php';
    }
}
?>