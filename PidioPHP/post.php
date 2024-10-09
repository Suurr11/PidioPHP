
<form action="" method="post">
    email :
    <input type="email" name="email">
    password :
    <input type="password" name="password">
    <input type="submit" name="kirem" value="kirem">


</form>

<?php  

if (isset ($_POST['kirem'])) {
    $email = $_POST['email'];
$password = $_POST['password'];

echo $email;
echo "<br>";
echo $password;
}


?>



