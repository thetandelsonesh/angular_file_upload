<?php 


$arr = json_decode(file_get_contents('php://input'),true);
print_r($_FILES);
print_r($_POST);

echo $_FILES['file']['tmp_name'];
move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);

?>