<?php

//Sanitization function *mandatory

        function sanitization($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
}
if (!empty($_POST["task"])){
    $task = $_POST["task"];
    $task=sanitization($task);
    $taskArray[]= "";
    //stock task in tasksarray and stock tasks in todo.json

    //print_r($tasksArray);

    //Sanitize task contents

    //print_r($task);

    $file = "todo.json"; //Define variable for wich file were going to send data to
    //$taskArray1 = []; 
    $tasksArray1 = ['task'=>$task, 'status'=>true]; // Create an empty array wich will contain our task ,(when we create the code the task dont exist yet!)

    $Jsondata = file_get_contents($file); // Define variable in wich file the .Json file is gonna get its content

    $tasksArray1 = json_decode($Jsondata,true); // Define a variable for the php => .json translation

    array_push($tasksArray1, $tasksArray); // The two arguments in the array_push are for the array wich will contain the added elements

    print_r($tasksArray1);

    $update = json_encode($tasksArray1, JSON_PRETTY_PRINT ); // Defining a variable allowing .json => php translation

    file_put_contents($file, $update); // Adding the $update variable's content to $file

    $message1  = "Added Task"; // after form completion message if done correctly

} else {
    $message1 = "Please add a task."; // after form completion message if done wrong
}

