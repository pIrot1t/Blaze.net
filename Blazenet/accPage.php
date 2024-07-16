<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Account</title>
</head>
<body>
<?
    session_start();
    include "bd.php";
    $id = $_COOKIE["IdUser"];
    $query = "SELECT * FROM Accounts WHERE Id = '$id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="menu">

        <button class="mb" onclick="chatsBut()">чаты</button>

        <button class="mb" onclick="subscribesBut()">подписки</button>

        <button class="mb" onclick="homeBut()">главная</button>

    </div>
    <div class="home">
        <div class="account">
            <?
            if($id != ""){
            ?>
                <img src="<? echo $row["Icon"]; ?>" class="icon">
                <div class="dataPanel">
                    <div class="data"><? echo $row["Name"]; ?></div>
                    <div class="data"><? echo $row["Email"]; ?></div>
                    <div class="data"><? echo $row["Code"]; ?></div>
                </div>
            <?
            }
        
            else{
            ?>
                <img src="" alt="" class="icon">
                <div class="name">Guest</div>
            <?
            }
            ?>
        </div>
        <div class="buttons">
            <?
            if($id != ""){
            ?>
                <button class="accbut" onclick="exitBut()">выйти с аккаунта</button>
                <button class="accbut" onclick="">сменить имя</button>
                <button class="accbut" onclick="">сменить пароль</button>
                <button class="accbut" onclick="">удалить аккаунт</button>
            <?
            }

            else{
            ?>
                <button class="accbut" onclick="autBut()">войти в аккаунт</button>
            <?
            }
            ?>
        </div>
    </div>
    <script src="links.js"></script>
</body>
</html>