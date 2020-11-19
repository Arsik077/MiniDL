


<?php
require_once 'connection.php';
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
$query ="CREATE Table account
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(200) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}



 
$query ="CREATE Table teachers
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    firstname VARCHAR(200) NOT NULL,
    lastname VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    course_id  int,
	FOREIGN KEY(course_id) REFERENCES courses(id),
	account_id  int,
	FOREIGN KEY(account_id) REFERENCES account(id)
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}





 
mysqli_close($link);
?>