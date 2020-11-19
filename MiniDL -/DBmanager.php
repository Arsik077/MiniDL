
<?php
require_once 'connection.php';
if(isset($_POST['name'])){
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $query ="INSERT INTO courses VALUES(NULL, '$name')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:admin.php");
}

?>





<?php
require_once 'connection.php';
if(isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['course_id']) && isset($_POST['account_id'])){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

    $username = htmlentities(mysqli_real_escape_string($link, $_POST['username']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['course_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
   
    $query ="INSERT INTO teachers VALUES(NULL, '$username','$firstname','$lastname','$email','$password','$course_id','$account_id')";
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
	header("Location:adminTeachers.php");
}

?>




<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['update_name']) && isset($_POST['update_id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['update_id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['update_name']));
  
     
    $query ="UPDATE courses SET name='$name' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:admin.php");
}
 

  
?>



<?php
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 

if(isset($_POST['user_name']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['course_id']) && isset($_POST['account_id']) && isset($_POST['id']) ){
 
    $username = htmlentities(mysqli_real_escape_string($link, $_POST['user_name']));
    $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['firstname']));
    $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['lastname']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    $course_id = htmlentities(mysqli_real_escape_string($link, $_POST['course_id']));
    $account_id = htmlentities(mysqli_real_escape_string($link, $_POST['account_id']));
	$id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
  
     
    $query ="UPDATE teachers SET username='$username',firstname='$firstname',lastname='$lastname',email='$email',password='$password',course_id='$course_id',account_id='$account_id' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 mysqli_free_result($result);
mysqli_close($link);
	header("Location:adminTeachers.php");
}
 

  
?>








<?php
if(isset($_POST['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM courses WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:admin.php");
}
?>





<?php
if(isset($_POST['tid']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['tid']);
     
    $query ="DELETE FROM teachers WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
	header("Location:adminTeachers.php");
}
?>








<?php
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

if(isset($_POST['submit']))
{
    $query = mysqli_query($link,"SELECT * FROM teachers WHERE email='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    if($data['password'] == $_POST['password'])
    {
		
		if(isset($_POST["remember"]) && $_POST["remember"]==1){
			 setcookie("login", $data['email'], time()+60*60*24*30, "/");
        setcookie("password", sha1($data['email']), time()+60*60*24*30, "/");
		}
       
        header("Location: home.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
