<?php
session_start();
$log = $_POST["Email"];
$pass = $_POST["password"];
include "bd.php";

$queryLog = "SELECT * FROM Accounts WHERE Email = '$log'";
$result = mysqli_query($link , $queryLog);
$row = mysqli_fetch_array($result);

if($row["Password"] == $pass){
    setcookie("IdUser" , $row["Id"]);
    echo $_COOKIE["IdUser"];
    ?>
        <script>location.href = "accPage.php"</script>
    <?
}

else{
    ?>
        <script>location.href = "autPage.php"</script>
    <?
}