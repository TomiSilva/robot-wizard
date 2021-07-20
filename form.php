<?php
$connection = new mysqli ('localhost', 'root', '', 'robotdatos');

$name_ = '';
$last_name = '';
$pet = '';
$food = '';
$parent = '';

if (! empty($_POST['name']) && is_string($_POST['name']) &&! empty($_POST['last_name']) && is_string($_POST['last_name'])
 && ! empty($_POST['pet']) && is_string($_POST['pet'])&& ! empty($_POST['food']) && is_string($_POST['food'])
 && ! empty($_POST['parent']) && is_string($_POST['parent'])) {
  
    $name_ = mysqli_real_escape_string($connection, $_POST['name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $pet = mysqli_real_escape_string($connection, $_POST['pet']);
    $food =mysqli_real_escape_string( $connection, $_POST['food']);
    $parent =mysqli_real_escape_string($connection, $_POST['parent']);
     
} else {
    header('Location: index.html');
}

$result = $connection->query("INSERT INTO datos (name_, last_name, pet, food, parents) VALUES
('$name_',
 '$last_name', 
 '$pet', 
 '$food', 
 '$parent' )");
    
    
if($result){
    header('Location: random.php'); 
}