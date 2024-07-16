<? 
include 'bd.php';
$name  = $_POST['Name'];
$email = $_POST['Email'];
$pass  = $_POST['Password'];

printf($name);
printf($email);
printf($pass);

print(mysqli_connect_error());

$AddUser = "INSERT INTO Accounts ( Name, Email, Password) VALUES ('$name','$email','$pass')";
echo $AddUser;
$result = mysqli_query($link, $AddUser);
if (!$result){
    mysqli_error($link);
}
else{
    ?>
    <script>location.href="autPage.php"</script>
    <?
}
?>