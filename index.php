<!-- includes are usually used to for functions stockage, it is not advised to used them like follows -->

<?php include "formulaire.php" ?>
<?php include "contenu.php" ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form class="addtask" action="" method="post" id="taskform">
    <div class="form-group">

        <label for="task">Add Task:</label>
        <input type="text" name="task" value="" text>

        <?php echo $message1; ?>

        <button type="submit" form="taskform" name="adding">Enregistrer</button>

        <?php
        $status ="";
        $key= "";
            foreach ($tasksArray as $value){
            ?>
            <input type="checkbox" name="$key" value="$status">  <!--create $key and $status var later -->
            <?php 


            }
            print_r($tasksArray);
            echo "ici est le $list" . $list;
        ?>

        </div>
    </form>
</body>
</html>