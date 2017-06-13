<?php

//Sanitization function *mandatory

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

//Sanitize task contents


$task = sanitization($_POST['task']);

if($task){
    $file = "todo.json"; //Define variable where for wich file were going to send data to

    $taskTab = []; // Create an empty array wich will contain our task ,(when we create the code the task dont exist yet!)

    $Jsondata = file_get_contents($file); // Define variable for in wich file the .Json file is gonna get its content

    $taskTab = json_decode($Jsondata); // Define a variable for the php => .json translation

    array_push($taskTab, $task); // The two arguments in the array_push are for the array wich will contain the added elements

    //print_r($taskTab);

    $update = json_encode($taskTab, JSON_PRETTY_PRINT ); // Defining a variable allowing .json => php translation

    file_put_contents($file, $update); // Adding the $update variable's content to $file

    $message1  = "Added Task"; // after form completion message if done correctly

} else {
    $message1 = "Please add a task."; // after form completion message if done wrong
}
