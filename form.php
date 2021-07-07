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

    $name_ = $_POST['name'];
    $last_name = $_POST['last_name'];
    $pet = $_POST['pet'];
    $food = $_POST['food'];
    $parent = $_POST['parent'];

     header('Location: random.php'); 
} else {
    header('Location: index.html');
}
var_dump($name_);







$result = $connection->query(
    " INSERT INTO datos(name_, last_name, pet, food, parents) 
    VALUES('$name_', '$last_name', '$pet', '$food', '$parent' )"
    );