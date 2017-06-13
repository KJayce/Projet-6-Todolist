<?php

        function sanitization($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
}

$task = $_POST["task"];
sanitization($task);
$taskTab = array();
print_r($taskTab);
